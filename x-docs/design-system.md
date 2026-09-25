# Design System — Click Studios Digital

Direcția „terminal hibrid”: hârtie milimetrică, titluri în mono greu, eyebrow-uri
`//`, contoare `01 / 05`, panouri de status și o sferă dither ca mascotă. Pornește
din sistemul anterior (Claude Design, „Regândirea designului agenției”): paleta,
umbra dură cu apăsare și grila de 1280px au rămas; tipografia de titluri a trecut
de la Plus Jakarta Sans la JetBrains Mono.

**Hibrid** înseamnă: titluri, navigație, butoane, etichete și date în mono;
paragrafele lungi rămân în Inter, pentru lizibilitate. Nu trece body-ul pe mono.

## Status

Tot site-ul public e pe sistemul ăsta: shell-ul (`components/layouts/app.blade.php`),
navigația și toate paginile Livewire (`homepage`, `featured-apps`, `servicii`,
`portofoliu`, `portofoliu-proiect`, `despre`, `contact`). Modalul de portofoliu
nu mai există: fiecare proiect are pagina lui (`/{locale}/portfolio/{slug}`).

Când adaugi ecrane noi, compune din componentele de mai jos, nu copia clasele.

## Tokens

Definite în `resources/css/app.css`, blocul `@theme`. Folosește-le ca utilitare
Tailwind (`bg-canvas`, `border-rule`, `text-night-muted`, …), nu hex inline.

| Token | Valoare | Rol |
|---|---|---|
| `--color-canvas` | `#fafaf8` | fundalul paginii (alb cald) |
| `--color-grid-line` | `#ecece6` | liniile hârtiei milimetrice |
| `--color-rule` | `#e5e5e0` | separatoare și borduri fine |
| `--color-night` | `#0c1210` | banda închisă, butoane primare, cerneala sferei |
| `--color-night-muted` | `#86a396` | text secundar **pe** fundal închis |
| `--color-row-hover` | `#f4f6f4` | hover pe rânduri |
| `--color-on-emerald` | `#06231a` | text pe buton emerald plin |
| `--font-mono` | `"JetBrains Mono", ui-monospace, …` | titluri, UI, date |
| `--font-inter` | `"Inter"` | paragrafe |
| `--font-newsreader` | `"Newsreader"` italic | doar citatul founderului |

Culori Tailwind standard folosite ca atare: `emerald-600` (accent), `emerald-500`
(accent plin, punct „online”), `emerald-700/800` (linkuri), `emerald-50` (text pe
închis), `gray-900` (ink + borduri carduri), `gray-600` (body), `gray-500` (meta),
`gray-400` (numerotări), `gray-300` (umbra dură pe carduri), `amber-500` (status beta).

`bg-grid` (utilitate `@utility`) desenează hârtia: două `linear-gradient` de 1px la
32px. Stă pe `body` peste `bg-canvas`.

## Fonturi (self-hosted, `public/fonts/`)

- **JetBrains Mono** variabil 400–800, subseturi latin + latin-ext (ș ț ă î â).
  Preîncărcat în `<head>`. Subsetul **nu conține săgeți** (`→ ↗`) și nici `● ■`:
  pentru ele folosește `<x-arrow>` și `<x-glyph>`, nu caractere.
- **Inter** 400–600, **Newsreader** italic 400–600.

## Tipografie

| Element | Clase |
|---|---|
| Meta bar | `<x-page-meta>` — mono 11px, `tracking-[0.16em]`, gray-500 |
| Eyebrow | `<x-eyebrow>` — mono 12px, `tracking-[0.14em]`, emerald-600, prefix `// ` |
| h1 hero | `font-mono font-extrabold text-[28px] md:text-[clamp(40px,4.6vw,64px)] leading-[1.12] md:leading-[1.05] tracking-[-0.02em] uppercase` |
| h1 pagini interioare | `text-[26px] md:text-[clamp(34px,3.8vw,52px)] leading-[1.08]` (o treaptă sub hero) |
| h2 secțiune | `font-mono font-extrabold text-[22px] md:text-[26px] uppercase tracking-[-0.01em]` |
| Titlu rând / card | `font-mono font-bold text-[15px]–[19px] uppercase` |
| Body hero / header | Inter `text-[17px] leading-[1.6] text-gray-600 text-pretty` |
| Body card | Inter `text-[13px] leading-[1.55] text-gray-500` |
| Etichete / chip-uri | mono `text-[10.5px]–[12px] uppercase tracking-[0.04–0.16em]` |

Partea accentuată a unui titlu merge în `<span class="text-emerald-600">`. Fără
`italic` pe mono: fontul e încărcat doar normal, iar italicul ar fi sintetizat.

## Semnătura vizuală: umbra dură cu apăsare

Offset solid, fără blur. La hover butonul „se apasă”: umbra scade și butonul se
mută cu aceeași cantitate. **Deplasarea = umbra inițială − umbra de hover.**
Cardurile nu se apasă: doar le apare umbra `4px_4px_0_#d1d5db`.

Raze: `rounded-[4px]` pentru butoane, controale și chip-uri; `rounded-lg` pentru
carduri, panouri și cadre. `rounded-full` doar la steaguri și la punctele de status.

## Componente (`resources/views/components/`)

| Componentă | Ce face |
|---|---|
| `<x-page-meta :label>` | Bara de sus: icon SVG + `// ETICHETĂ` + `03 / 05`. Indexul vine din `config('site.pages')`; pe pagini din afara listei trimite `:index`/`:total`. |
| `<x-eyebrow>` | Eyebrow-ul `//`. |
| `<x-page-header :eyebrow>` | Antetul paginilor interioare. Sloturi: `title`, `subtitle` (opțional), `aside` (opțional, coloana de 340px de la `lg`). |
| `<x-button :href variant>` | `primary` (night + umbră emerald), `secondary` (contur), `emerald` (pe benzi închise). `external` = tab nou, altfel `wire:navigate`. |
| `<x-status-panel :label :status>` + `<x-status-panel.row>` | Panoul din referință: header mic cu punct emerald pulsant, rânduri cu `<x-glyph>`, nume mono și meta (sau slot). Rândul devine link cu `:href`; `external` pentru site-uri externe, `mailto:`/`tel:` sunt tratate singure. |
| `<x-glyph shape>` | `triangle`, `square`, `circle`, `hexagon`, `diamond` — marcaje pline. |
| `<x-arrow direction>` | `right`, `left`, `up-right`. |
| `<x-dither-orb>` | Mascota: sferă umbrită + zgomot fractal, pragată la 1 bit, cerneală night, alb transparent (se vede grila). Ochii clipesc din CSS (`.orb-eyes`), opriți la `prefers-reduced-motion`. |
| `<x-portfolio-card :item :index>` | Card de proiect, tot cardul e link spre pagina proiectului. Bară de fereastră (`// 01 · categorie` + status), imagine, titlu, rezumat, max. 4 chip-uri de stack. |
| `<x-cta-band :title :subtitle :button>` | Banda închisă de final cu butonul spre `/contact`. |

### Layout

- **Container**: `max-w-[1280px] mx-auto px-6 md:px-12`. Nav-ul folosește același container; bordura lui rămâne full-bleed.
- **Ritm**: secțiuni `py-14`, headere `pt-8` (meta bar) + `pb-14`/`pb-16`. `border-b border-rule` între secțiuni.
- **Shell**: `body` = `flex flex-col min-h-screen bg-canvas bg-grid`, `main` = `flex-1`, footer în flux, cu banda „`@clickstudiosdigital` … URMĂTOR: {pagina} →” (echivalentul lui „SWIPE →”).
- **Z-index**: `z-10` conținut · `z-30` footer · `z-50` nav sticky.

## Responsive

- **Breakpoint-ul nav-ului este `lg`**, nu `md` (sub 1024px: hamburger + panou).
- **Două coloane doar de la `lg`** în hero și în `page-header` (coloana de 340px).
- **Grile de carduri**: `grid-cols-[repeat(auto-fit,minmax(min(300px,100%),1fr))]`.
- **Ținte de atingere** ≥ 44px pe controale reale.
- Verificat fără overflow orizontal la 320 și 375px pe toate paginile, în ambele limbi.

## Capcane verificate în cod

- **Un token `--color-X` generează și utilitatea `bg-X`.** `--color-grid` producea un `bg-grid` de culoare care se bătea cu `@utility bg-grid` și umplea tot fundalul cu gri. De aici numele `--color-grid-line`. Nu numi un token de culoare la fel ca o utilitate custom.
- **Un grid fără `grid-cols-*` are track implicit `auto`, cu minimul = min-content.** Un text `nowrap`/`truncate` din interior (antetul panoului de status) lățea coloana peste container la 320px. Pune `grid-cols-1` (`minmax(0,1fr)`) pe grid-urile care devin cu două coloane abia de la `lg`.
- **Butoanele cu text lung nu primesc `flex-none`.** „CONFIGUREAZĂ ECOSISTEMUL TĂU” nu încăpea la 320px; butonul are `max-w-full` și se înfășoară.
- **`aspect-video` pe un flex item are nevoie de `overflow-hidden`**, altfel o imagine mai înaltă decât 16:9 împinge cutia.
- **Diacriticele sub mono uppercase** (virgula lui Ș/Ț) au nevoie de aer: pe mobil h1-ul hero are `leading-[1.12]`.
- **Fără emoji sau glife ca iconuri.** SVG inline (`<x-arrow>`, `<x-glyph>`). Font Awesome a fost scos (blocant în `<head>`).
- **`x-transition` în `<template x-teleport>` desincronizează `display`** (bug găsit pe fostul modal de portofoliu). Dacă reintroduci un modal teleportat, folosește doar `x-show`, animații din CSS.

## Portofoliu din Markdown

- Promptul pentru LLM-uri: `resources/prompts/portfolio.md` (și butonul „Prompt LLM” din admin). Produce `PORTFOLIO.md`: front matter YAML + corp EN după `<!-- en -->` și RO după `<!-- ro -->`.
- Upload în Filament, tab-ul „Markdown”: `App\Helpers\PortfolioMarkdown::parse()` validează fișierul și completează formularul; câmpurile rămân editabile și sunt sursa de adevăr. Fișierul se păstrează privat, pe disk-ul `local`.
- Descrierea se randează cu `Str::markdown` cu HTML brut eliminat; pe pagină, `prose` cu h2 mono emerald prefixate cu `//`.

## SEO și Markdown for Agents

- Titlu + meta description per pagină și limbă (`lang/*/app.php` → `seo.*`), hreflang ro/en/x-default, `og:*` per pagină, JSON-LD (Organization, WebSite, plus CreativeWork + BreadcrumbList pe proiecte).
- `/sitemap.xml` e rută dinamică (`SitemapController`), cu alternate hreflang. Nu pune un `public/sitemap.xml` static: serverul l-ar servi în locul rutei.
- Fiecare pagină are versiune Markdown: `/{locale}/index.md`, `/{locale}/{services|portfolio|about|contact}.md`, `/{locale}/portfolio/{slug}.md`, plus content negotiation (`Accept: text/markdown`) pe URL-urile normale și `/llms.txt`. View-urile sunt în `resources/views/markdown/`; când adaugi o pagină, adaugă-i și ruta `{nume}.markdown`.

## i18n — obligatoriu

Aplicația e bilingvă (`ro` / `en`). **Niciun text vizibil hardcodat** în Blade: totul
prin `__('messages.*')` sau `__('app.*')`, cu cheia în **ambele** fișiere de limbă.
`PortfolioPagesTest` verifică toate paginile, în ambele limbi, după chei brute.

Linkurile interne poartă locale-ul și `wire:navigate`:
`route('contact', ['locale' => App::getLocale()])`.
