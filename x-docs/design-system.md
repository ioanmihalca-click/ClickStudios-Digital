# Design System — Click Studios Digital

Sursa: proiectul Claude Design **„Regândirea designului agenției"**, fișierul
`Homepage Final.dc.html` (project id `8eabfdeb-ddb8-4203-aefb-537ed06ba7ee`).
Valorile de mai jos sunt extrase din acea sursă, nu aproximate — nu le rotunji
la o grilă de 4/8px și nu le înlocui cu default-uri Tailwind „apropiate".

## Status — ce folosește sistemul ăsta

**Tot site-ul public** e pe sistemul ăsta: shell-ul (`components/layouts/app.blade.php`),
`components/navigation-main.blade.php`, `components/portfolio-detail-modal.blade.php`
și toate paginile Livewire (`homepage`, `featured-apps`, `despre`, `servicii`,
`portofoliu`, `contact`).

Nu a mai rămas nimic pe vocabularul vechi (`rounded-2xl`, `rounded-full` pe butoane,
`shadow-lg`, carduri cu gradient `from-teal-50`). Singurele `rounded-full` rămase
sunt măștile circulare ale steagurilor din switcher-ul de limbă — alea sunt corecte.

Când adaugi ecrane noi, folosește rețetele de aici — nu inventa variante noi.

## Tokens

Definite în `resources/css/app.css`, blocul `@theme`. Folosește-le ca utilitare
Tailwind (`bg-canvas`, `border-rule`, `text-night-muted`, …), nu hex inline.

| Token | Valoare | Rol |
|---|---|---|
| `--color-canvas` | `#fafaf8` | fundalul paginii (alb cald) |
| `--color-rule` | `#e5e5e0` | toate liniile de separare și bordurile fine |
| `--color-night` | `#0c1210` | banda închisă + butoane primare |
| `--color-night-muted` | `#86a396` | text secundar **pe** fundal închis |
| `--color-row-hover` | `#f4f6f4` | hover pe rânduri de listă |
| `--color-on-emerald` | `#06231a` | text pe buton emerald plin |
| `--font-mono` | `ui-monospace, Menlo, monospace` | eyebrow-uri și numerotări |

Restul culorilor sunt Tailwind standard și se folosesc ca atare:
`emerald-600` `#059669` (accent), `emerald-500` `#10b981` (accent plin),
`emerald-700/800` (linkuri + hover), `emerald-50` `#f0fdf4` (text pe închis),
`gray-900` `#111827` (ink + borduri carduri), `gray-600` `#4b5563` (body),
`gray-500` `#6b7280` (muted), `gray-400` `#9ca3af` (numerotări),
`gray-300` `#d1d5db` (umbra dură pe carduri).

## Layout

- **Container**: `max-w-[1280px] mx-auto px-6 md:px-12` — 48px padding pe desktop.
- **Nav este full-bleed**, fără `max-w`: doar `px-6 md:px-12`. Intenționat.
- **Ritm vertical secțiuni**: `py-14` (56px). Hero-ul face excepție: `pt-20 pb-18`.
- **Separatoare**: `border-b border-rule` la finalul fiecărei secțiuni.
- **Shell**: `body` este `flex flex-col min-h-screen bg-canvas`, `main` este
  `flex-1`, footerul este **în flux** (nu fix). Nu există imagine de fundal.
- **Z-index**: `z-10` conținut · `z-30` footer · `z-50` nav sticky ·
  `z-[60]` modale.

## Tipografie

- **`font-jakarta`** — titluri. `font-extrabold` pentru h1/h2, `font-bold` pentru
  titluri de card și rânduri.
- **`font-inter`** — body (setat pe `body`).
- **`font-newsreader`** — citatul founderului pe Despre (italic real, self-hosted).
- **`font-mono`** — doar eyebrow-uri și numerotări `01`–`05`.

Scara reală folosită:

| Element | Clase |
|---|---|
| Eyebrow | `font-mono text-xs tracking-[0.14em] uppercase text-emerald-600` |
| h1 hero | `text-[34px] md:text-[clamp(44px,5.5vw,74px)] leading-[1.02] tracking-[-0.02em] uppercase text-balance` |
| h2 secțiune | `text-[26px] uppercase tracking-[0.01em]` |
| Titlu bandă CTA | `text-[30px] text-balance` |
| Titlu rând serviciu | `text-[17px]` |
| Titlu card | `text-[15px] uppercase tracking-[0.03em]` |
| Body hero | `text-[17px] leading-[1.6] text-gray-600 text-pretty` |
| Body card | `text-[13px] leading-[1.55] text-gray-500` |
| Meta / note | `text-[12.5px] text-gray-500` |
| Linkuri nav | `text-[13.5px] font-medium` |
| Footer | `text-xs text-gray-500` |

## Semnătura vizuală: umbra dură cu apăsare

Elementul care definește sistemul. Umbra e **offset solid, fără blur**, iar la
hover butonul „se apasă": umbra se micșorează și butonul se mută cu aceeași
cantitate.

```
shadow-[3px_3px_0_#059669] transition-all duration-[120ms]
hover:shadow-[1px_1px_0_#059669] hover:translate-x-[2px] hover:translate-y-[2px]
```

Regula: **deplasarea = umbra inițială − umbra de hover**. La `2px 2px` folosește
`hover:translate-x-px hover:translate-y-px`.

Raze: **`rounded-[4px]` pentru butoane și controale**, **`rounded-lg` (8px)
pentru carduri**. Niciodată `rounded-full` sau `rounded-2xl` în sistemul nou.

## Rețete de componente

### Buton primar (închis)
```
inline-flex items-center gap-[9px] bg-night text-emerald-50 font-semibold
text-[14.5px] px-[30px] py-[15px] rounded-[4px] shadow-[3px_3px_0_#059669]
transition-all duration-[120ms] hover:shadow-[1px_1px_0_#059669]
hover:translate-x-[2px] hover:translate-y-[2px]
```

### Buton secundar (contur)
```
inline-flex items-center gap-[9px] bg-white border border-night text-night
font-semibold text-[14.5px] px-7 py-[14px] rounded-[4px]
transition-all duration-[120ms] hover:shadow-[3px_3px_0_#d1d5db]
```

### Buton pe fundal închis (emerald plin)
```
inline-flex items-center gap-[9px] bg-emerald-500 text-on-emerald font-bold
text-[14.5px] px-8 py-4 rounded-[4px] shadow-[3px_3px_0_rgba(240,253,244,0.9)]
transition-all duration-[120ms] hover:shadow-[1px_1px_0_rgba(240,253,244,0.9)]
hover:translate-x-[2px] hover:translate-y-[2px]
```

### Nav
`sticky top-0 z-50 w-full border-b border-rule bg-canvas/[0.92] backdrop-blur-[8px]`.
Rând interior `max-w-[1280px] mx-auto flex flex-wrap items-center justify-between gap-3 md:gap-6 px-6 md:px-12 py-[18px]` — același container ca paginile, ca logo-ul să coincidă cu conținutul. Bara (border) rămâne full-bleed.
Logo imagine `assets/logo.jpg`: `h-10 md:h-12 w-auto object-contain` (fără crop, păstrează proporțiile). `alt` = `__('messages.brand')`.
Link activ: `text-gray-900 border-b-2 border-emerald-600 pb-[2px]`; inactiv `text-gray-600`.

### Card
```
flex flex-col bg-white border border-gray-900 rounded-lg overflow-hidden
transition-shadow duration-150 hover:shadow-[4px_4px_0_#d1d5db]
```
Cutia imaginii: `shrink-0 aspect-video overflow-hidden border-b border-rule`
(vezi capcana de mai jos — `overflow-hidden` este obligatoriu).
Corp: `flex flex-col flex-grow pt-5 px-[22px] pb-[22px]`, linkul final cu `mt-auto self-start`.

### Rând de listă numerotat
```
grid grid-cols-[40px_1fr] md:grid-cols-[64px_1fr_auto] gap-x-5 gap-y-1
md:items-baseline py-[18px] border-t border-rule transition-colors hover:bg-row-hover
```
`border-b` în plus pe ultimul rând. Meta primește `col-start-2 md:col-start-auto`
ca să treacă pe rândul doi pe mobil.

### Bandă CTA închisă
`bg-night` pe secțiune; interior `flex flex-wrap items-center justify-between gap-8`
+ containerul standard. Titlu `text-emerald-50`, subtitlu `text-night-muted`.

### Citat founder (Despre)
Tot corpul vorbit (paragrafele + closing) e un `<blockquote>` `font-newsreader italic`.
Ghilimele pe tot blocul: RO `„…”`, EN `“…”`. Closing-ul rămâne accent `text-emerald-700 text-[24px] md:text-[26px]` cu `border-y border-rule`. Semnătura din coloana dreaptă e atribuirea. Chrome-ul paginii (eyebrow, h1, h2) rămâne Jakarta.

### Header de pagină interioară
Toate paginile în afară de homepage folosesc același antet. h1-ul e o treaptă
sub hero-ul de pe homepage (max 60px vs 74px) — asta e ierarhia, n-o egaliza.
```
<header class="max-w-[1280px] mx-auto px-6 md:px-12 pt-20 pb-14 border-b border-rule">
  <div class="font-mono text-xs tracking-[0.14em] uppercase text-emerald-600 mb-[22px]">eyebrow</div>
  <h1 class="font-jakarta font-extrabold text-[30px] md:text-[clamp(40px,4.5vw,60px)]
             leading-[1.05] tracking-[-0.02em] uppercase text-gray-900 text-balance">…</h1>
  <p class="mt-6 max-w-[640px] text-[17px] leading-[1.6] text-gray-600 text-pretty">…</p>
</header>
```
Partea accentuată a titlului merge în `<span class="text-emerald-600">`.

### Secțiune de serviciu (rândul numerotat, extins)
Varianta lungă a rândului de listă, folosită pe `/services`:
```
grid grid-cols-[40px_minmax(0,1fr)] md:grid-cols-[64px_minmax(0,1fr)_280px]
gap-x-5 gap-y-6 py-10 border-t border-rule
```
Col 1 numărul mono, col 2 titlu `text-[20px]` + descriere `text-[15px] max-w-[560px]`,
col 3 eyebrow mono + `<ul>` de livrabile `text-[13px] text-gray-500`.
Col 3 primește `col-start-2 md:col-start-auto`; `border-b` pe ultimul rând.

### Controale de formular
Proiectul are `@tailwindcss/forms`, deci reset-ul e deja aplicat.
```
w-full px-4 py-3 text-[14.5px] text-gray-900 bg-white border border-rule rounded-[4px]
transition-colors focus:border-emerald-600 focus:ring-1 focus:ring-emerald-600 focus:outline-none
```
Etichetă `block mb-2 text-[12.5px] font-medium text-gray-600`; eroare
`block mt-1.5 text-[12.5px] text-red-600`. Alertele sunt
`flex items-start gap-3 p-4 rounded-[4px] border` cu perechile
emerald-50/emerald-600 și red-50/red-600. Submit = butonul primar.

### Modal
Panou `relative w-full max-w-2xl max-h-[85vh] overflow-y-auto bg-white border border-gray-900 rounded-lg`,
fundal `absolute inset-0 bg-night/40 backdrop-blur-sm`, buton de închidere
`w-11 h-11 rounded-[4px] border border-rule`. Imaginea de sus folosește aceeași
cutie ca la card. **Fără `x-transition` nicăieri** — vezi capcana de mai jos.

## Responsive

- **Breakpoint-ul nav-ului este `lg`, nu `md`.** Linkurile orizontale + switcher-ul
  de limbă + CTA nu încap sub 1024px și bara se rupe pe două rânduri. Sub `lg`:
  hamburger + panou. Nu muta asta înapoi pe `md`.
- **h1** folosește o treaptă mobilă separată (`text-[34px]`) pentru că floor-ul
  de `44px` din clamp face overflow cu titluri lungi în română pe ecrane de 320–375px.
- **Grile de carduri**: `grid-cols-[repeat(auto-fit,minmax(min(300px,100%),1fr))]`.
  `min(300px,100%)` este obligatoriu — `minmax(300px,1fr)` simplu depășește
  viewportul sub 348px.
- **Ținte de atingere** ≥ 44px pe controale reale (hamburger `w-11 h-11`,
  butoane `py-[15px]`+).

## Capcane verificate în cod

- **`aspect-video` pe un flex item are nevoie de `overflow-hidden`.** Fără el,
  `min-height:auto` lasă o imagine mai înaltă decât 16:9 să împingă cutia peste
  raport, și cardurile ies inegale. Bug real prins pe SportClubPro (imagine 1.37:1).
- **Plus Jakarta Sans self-hosted nu are față italică** (doar 600–800 normal).
  `italic` pe titlu produce oblic sintetizat de browser. Acceptabil, dar dacă
  vrei italic real trebuie adăugat fișierul de font.
- **`leading-[1.02]` este foarte strâns pentru diacritice românești** (Ă, Î, Â).
  Nu se taie la dimensiunile actuale, dar verifică vizual dacă schimbi titlul.
- **Nu folosi emoji sau glife ca iconuri.** SVG inline, stroke-based, grilă 16/20/24px.
  Excepție deja existentă: săgeata `↗` din linkuri e element tipografic, nu icon.
- **`x-transition` în `<template x-teleport>` desincronizează `display`.** În modalul
  de portofoliu, overlay-ul rămânea cu o stare în urmă (ascuns după deschidere, vizibil
  după închidere), iar un `x-show` cu tranziție imbricat în alt `x-show` cu tranziție
  rămânea blocat pe clasele `enter-start` (`opacity-0`) — modalul se deschidea cu fundal,
  dar fără panou. **Bug preexistent**, confirmat pe versiunea originală prin A/B.
  Soluția: doar `x-show` simplu în tot arborele teleportat, zero `x-transition`.
  Dacă vrei animație acolo, fă-o din CSS, nu din Alpine.

## i18n — obligatoriu

Aplicația e bilingvă (`ro` / `en`). **Niciun text vizibil nu se scrie hardcodat**
în Blade: totul prin `__('messages.*')`, cu cheia adăugată în **ambele**
`lang/ro/messages.php` și `lang/en/messages.php`. Rulează `php artisan test`
și verifică în pagina randată că nu apar chei brute (`messages.`) neinterpretate.

Linkurile interne poartă locale-ul și `wire:navigate`:
`route('contact', ['locale' => App::getLocale()])`.
