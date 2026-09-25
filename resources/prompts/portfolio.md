# Task: write PORTFOLIO.md for this project

You are working inside the codebase of a product built by **Click Studios Digital**, a web and AI development studio from Baia Mare, Romania. The studio is adding this product to its public portfolio at clickstudios-digital.com. Your job is to study this repository and write **one file, `PORTFOLIO.md`, in the repository root**, in the exact format below. The file is uploaded as-is to the studio's admin panel and parsed by a program, so the format is strict.

## 1. Study the project first

Before writing, read enough of the repository to understand what the product does and for whom:

- README, docs and any marketing or landing-page copy
- `composer.json` / `package.json` / lock files, to get the real stack and major versions
- routes, controllers, Livewire/Inertia/React pages, to see the actual features and user flows
- models, migrations and enums, to see the domain (who the users are, what they manage)
- config and service integrations (payments, AI providers, mail, storage, queues)
- tests, which often describe behaviour most precisely

Describe the product as it exists in the code today. Do not describe planned features unless the code clearly shows them as in progress, and then say so.

## 2. Audience and voice

- Readers are **potential clients**: business owners and managers, not developers. Lead with the problem and the value, then show the craft.
- Plain, confident, specific. Short paragraphs. No hype words ("revolutionary", "cutting-edge", "seamless", "next-generation", "leverage", "robust").
- Write "we" for the studio ("We built…").
- Technical detail belongs in the "Under the hood" section only, and even there explain *why* a choice matters to the client (speed, reliability, cost, security).

## 3. Hard rules

1. **Never invent facts.** No made-up numbers, metrics, client names, testimonials, user counts, revenue, or performance figures. Use a number only if it appears explicitly in the repository (README, docs, config) and you can point to it. If the Outcome section has no verifiable numbers, describe outcomes qualitatively (what the client can now do that they could not before).
2. **Never leak anything private.** No secrets, API keys, `.env` values, internal hostnames, admin URLs, IPs, database names, email addresses of real people, customer data, or security weaknesses.
3. `url` must be the public production URL of the product, only if it appears in the repo (config, README, deploy scripts). Otherwise omit the key. `video` only if a YouTube link appears in the repo. Otherwise omit it.
4. No images, no HTML tags, no tables, no `# ` (H1) headings, no emoji. Inline `code` is fine for product names only if useful; avoid code blocks.
5. Both languages are **native quality**. The Romanian text is written directly in natural Romanian, not translated word for word, with correct diacritics: **ă â î ș ț** (ș and ț with comma below, never ş ţ with cedilla).
6. Keep product names, brand names and technology names as they are in both languages.

## 4. Exact format

The file has YAML front matter between two `---` lines, then the English body after a line containing only `<!-- en -->`, then the Romanian body after a line containing only `<!-- ro -->`. Nothing else.

```markdown
---
title: Product Name
status: live
year: 2025
url: https://example.com
video: https://www.youtube.com/watch?v=XXXXXXXXXXX
stack: [Laravel 12, Livewire 3, Filament 4, MySQL, Stripe]
en:
  category: Short category in English
  summary: One or two sentences for the project card.
ro:
  category: Categorie scurtă în română
  summary: Una sau două propoziții pentru cardul proiectului.
---

<!-- en -->
## Context

## What we built

## Key features

## Under the hood

## Outcome

<!-- ro -->
## Context

## Ce am construit

## Funcționalități cheie

## Sub capotă

## Rezultat
```

### Front matter fields

| Key | Required | Rules |
|---|---|---|
| `title` | yes | The product name, max 60 characters. Add `title:` under `en:` / `ro:` only if the name really differs per language. |
| `status` | yes | Exactly one of: `live` (in production, public), `beta` (public but early), `in-development`, `archived`. |
| `year` | yes | Year of the first production release, or the current year if not released yet. Four digits. |
| `url` | no | Public production URL, `https://…`. Omit the key if unknown. |
| `video` | no | YouTube URL. Omit the key if none. |
| `stack` | yes | 3–10 main technologies, most important first, with major versions where known (`Laravel 12`, not `laravel/framework ^12.0`). No minor libraries. |
| `en.category` / `ro.category` | yes | What kind of product it is, max 50 characters. Example: `Sports club management SaaS` / `SaaS pentru cluburi sportive`. |
| `en.summary` / `ro.summary` | yes | 1–2 sentences, **max 240 characters**. Who it is for and what it does for them. Shown on the portfolio card. |

Quote a YAML value with double quotes if it contains a colon (`:`) or starts with a special character.

### Body sections (same five sections in both languages, in this order)

1. **Context** (`## Context` / `## Context`), 60–120 words. Who the client or users are and what problem or friction existed before.
2. **What we built** (`## What we built` / `## Ce am construit`), 80–150 words. The product in one clear picture: main user roles and the core flow.
3. **Key features** (`## Key features` / `## Funcționalități cheie`), a bullet list of 4–7 items. Each bullet starts with a **bold** feature name, then an en dash and one sentence about the benefit: `- **Online payments** – members pay their fee by card and the club sees it instantly.`
4. **Under the hood** (`## Under the hood` / `## Sub capotă`), 60–130 words. Architecture and notable technical decisions (integrations, AI usage, background jobs, multi-tenancy, security, performance), each tied to a client benefit.
5. **Outcome** (`## Outcome` / `## Rezultat`), 40–100 words. What the product enables now, following hard rule 1.

## 5. Before you finish, check

- [ ] The file is named `PORTFOLIO.md` and sits in the repository root.
- [ ] It starts with `---` on the very first line, with no blank line or text before it.
- [ ] `status` is one of the four allowed values. `year` is a plain number.
- [ ] Both `<!-- en -->` and `<!-- ro -->` lines exist, each on its own line.
- [ ] Both bodies have the same five `##` sections, in order, and no `#` heading.
- [ ] Summaries are at most 240 characters.
- [ ] No invented numbers, no secrets, no private URLs.
- [ ] The Romanian text uses ș/ț with comma below and reads naturally.

Reply with a short confirmation and the path of the file. Do not paste the file content into the chat.
