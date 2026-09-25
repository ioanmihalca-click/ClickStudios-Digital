#!/usr/bin/env bash
#
# Deploy pe Hostinger (shared, SSH). Rulează PE SERVER, din rădăcina aplicației:
#   cd ~/domains/clickstudios-digital.com/public_html && ./deploy.sh
#
# Prima instalare (o singură dată, manual): clonează repo-ul direct în
# public_html, `cp .env.example .env` și completează (APP_ENV=production,
# APP_DEBUG=false, APP_URL=https://clickstudios-digital.com, APP_LOCALE=ro,
# APP_FALLBACK_LOCALE=ro, DB_* din hPanel, MAIL_* pentru formularul de contact,
# QUEUE_CONNECTION=sync). Apoi `php artisan key:generate` și `./deploy.sh`.
# Pe DB gol, tot o singură dată:
#   php artisan make:filament-user     # userul de admin pentru /admin
# Parola se tastează interactiv — nu stă în niciun fișier.
#
# Asset-urile front-end se construiesc AICI, pe server: `public/build/` e în
# .gitignore, deci nu vine prin git. Nu trebuie să rulezi nimic local înainte de
# deploy — doar `git push`.

set -Eeuo pipefail
cd "$(dirname "$0")"

PHP="${PHP_BIN:-/opt/alt/php84/usr/bin/php}"
[ -x "$PHP" ] || PHP=php

# composer2/composer dacă există în PATH, altfel composer.phar din rădăcină
# (așa e instalat pe contul ăsta)
COMPOSER_BIN="$(command -v composer2 || command -v composer || true)"
if [ -n "$COMPOSER_BIN" ]; then
    COMPOSER=("$PHP" "$COMPOSER_BIN")
elif [ -f composer.phar ]; then
    COMPOSER=("$PHP" composer.phar)
else
    echo "Nu găsesc composer (nici în PATH, nici composer.phar în rădăcină)." >&2
    exit 1
fi

# fetch + reset, nu pull: `composer install` rulează `filament:upgrade` la
# post-autoload-dump, iar acela rescrie asset-urile Filament din
# public/css/filament și public/js/filament — fișiere URMĂRITE de git. După
# primul deploy copia de pe server rămâne mereu „dirty", și `git pull` refuză
# merge-ul. Copia de pe server e doar de deploy, deci orice modificare locală
# a fișierelor urmărite se aruncă.
git fetch origin main

# Codul nou rulează pe schema veche între `reset` și `migrate` → mentenanță pe
# durata deploy-ului. Trap-ul e obligatoriu: cu `set -e`, o eroare pe parcurs ar
# lăsa altfel site-ul blocat în mentenanță.
trap '"$PHP" artisan up >/dev/null 2>&1 || true' EXIT
"$PHP" artisan down --render=errors::503 --retry=30 || true

git reset --hard origin/main

# Cache-urile compilate se șterg la nivel de fișier, nu prin artisan: după reset
# pot rămâne un config sau un routes cache de la commit-ul anterior, iar
# `composer install` trebuie să poată boot-a aplicația ca să ruleze
# package:discover și filament:upgrade. Un `artisan optimize:clear` ar avea
# nevoie exact de boot-ul pe care încearcă să-l repare.
rm -f bootstrap/cache/config.php bootstrap/cache/routes-*.php \
      bootstrap/cache/events.php bootstrap/cache/services.php \
      bootstrap/cache/packages.php

# vite 8 cere Node ^20.19 || >=22.12; sub aceste versiuni npm sare în tăcere
# peste binding-urile native opționale (rolldown) și build-ul crapă criptic.
# Verificăm înainte de composer, ca să pice repede, nu după 2 minute de install.
command -v node >/dev/null && command -v npm >/dev/null \
    || { echo "node/npm lipsesc din PATH. Dacă Node e instalat prin nvm, activează-l întâi: source ~/.nvm/nvm.sh && nvm use --lts" >&2; exit 1; }
node -e 'const [M,m]=process.versions.node.split(".").map(Number); process.exit(M>22||(M===22&&m>=12)||(M===20&&m>=19)?0:1)' \
    || { echo "Node $(node -v) e prea vechi pentru vite 8 (cere ^20.19 sau >=22.12)." >&2; exit 1; }

"${COMPOSER[@]}" install --no-dev --optimize-autoloader --no-interaction --no-progress

# CloudLinux (LVE) limitează thread-urile per cont; rolldown/rayon ar porni câte
# un thread per core al gazdei și moare cu EAGAIN („Resource temporarily
# unavailable") — plafonăm explicit.
export RAYON_NUM_THREADS=2 TOKIO_WORKER_THREADS=2 UV_THREADPOOL_SIZE=2

npm ci --no-audit --no-fund
npm run build
rm -f public/hot # rămas din dev; dacă există, @vite ignoră manifestul și trimite browserul la serverul Vite
rm -f public/sitemap.xml # sitemap-ul e acum rută dinamică; un fișier static rămas l-ar umbri (LiteSpeed servește întâi fișierul)

# Plasă de siguranță: vite poate ieși cu 0 și un build parțial. Fără asta,
# lipsa s-ar vedea abia în browser, ca „Unable to locate file in Vite manifest".
"$PHP" -r '
$manifest = "public/build/manifest.json";
if (!is_file($manifest)) {
    fwrite(STDERR, "public/build/manifest.json lipsește după `npm run build` — build-ul a eșuat.\n");
    exit(1);
}
$entries = json_decode(file_get_contents($manifest), true);
if (!is_array($entries) || $entries === []) {
    fwrite(STDERR, "public/build/manifest.json nu e JSON valid sau e gol.\n");
    exit(1);
}
$missing = [];
foreach ($entries as $entry) {
    if (isset($entry["file"]) && !is_file("public/build/" . $entry["file"])) {
        $missing[] = $entry["file"];
    }
}
if ($missing !== []) {
    fwrite(STDERR, "Lipsesc din public/build: " . implode(", ", $missing) . "\n");
    exit(1);
}
'

# `artisan storage:link` pică pe Hostinger: symlink() ȘI exec() sunt în
# disable_functions, iar PHP 8 scoate funcțiile dezactivate din tabela de funcții
# → fatal „Call to undefined function exec()" (Filesystem::link, fallback-ul cu
# `ln -s`). Din shell nu există restricția, deci facem legătura noi. E relativă,
# ca să nu depindă de calea absolută a contului, și supraviețuiește la
# `git reset` (public/storage e în .gitignore). Fără ea, imaginile de portofoliu
# (Storage::url() → /storage/…) dau 404 pe tot site-ul și în /admin.
if [ -L public/storage ]; then
    : # există deja
elif [ -e public/storage ]; then
    echo "public/storage există și NU e symlink — verifică manual înainte de deploy." >&2
    exit 1
else
    ln -s ../storage/app/public public/storage
fi

"$PHP" artisan migrate --force

"$PHP" artisan optimize:clear
"$PHP" artisan filament:optimize-clear
"$PHP" artisan optimize
"$PHP" artisan filament:optimize

"$PHP" artisan up

echo "Gata. Verifică: /ro · /en · /ro/portfolio · /ro/contact · /admin"
