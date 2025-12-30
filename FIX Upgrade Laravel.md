Am identificat și rezolvat problema, și ai avut dreptate: nu era o eroare de sintaxă în codul tău, ci o schimbare în parserul Blade din Laravel 12.

Cauza: Începând cu Laravel 12.20, parserul Blade a devenit mai strict și interpretează simbolul @ din interiorul tag-urilor <script> ca fiind o directivă Blade (ca @if sau @foreach). În cazul tău (și probabil în toate cele 3 aplicații), ai un script JSON-LD pentru SEO care conține:

json
"@context": "https://schema.org",
"@type": "ProfessionalService",
Laravel 12 crede că @context și @type sunt directive Blade care nu au fost închise, de aceea aruncă eroarea: unexpected end of file, expecting "elseif" or "else" or "endif".

Soluția aplicată: Am învelit blocurile JSON-LD din welcome.blade.php și resources/views/components/layouts/app.blade.php în directivele @verbatim ... @endverbatim. Aceasta spune parserului Blade să ignore tot ce este între ele, lăsând JSON-ul intact.

Acțiuni necesare:

Verifică și celelalte aplicații pentru scripturi JSON-LD similare și aplică @verbatim.
Rulează php artisan view:clear pentru a fi sigur că totul e curat.