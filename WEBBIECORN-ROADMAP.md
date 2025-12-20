# 🦄 WEBBIECORN ROADMAP

> **Laatst bijgewerkt:** 21 december 2025  
> **Status:** Actief in ontwikkeling  
> **Doel:** Van manifest naar winstgevend bedrijf

---

## 📍 HUIDIGE STATUS

**Website:** https://webbiecorn.nl  
**Thema:** webbiecorn-starter-v2 (custom WordPress theme)  
**Hosting:** Hostinger

### Wat is AF ✅
- [x] Custom WordPress thema gebouwd
- [x] Homepage met hero, diensten, pakketten, werkwijze, FAQ
- [x] 5 webdesign pakketten met prijzen
- [x] Contactformulier (Contact Form 7)
- [x] Floating dark header met logo + dropdown menu
- [x] Favicon
- [x] Basis responsive design
- [x] Alle service pagina's (webdesign, branding, seo, onderhoud, hosting)
- [x] Portfolio pagina met echte projecten
- [x] Over ons pagina
- [x] Contact pagina met grunge effect
- [x] Diensten overzichtspagina
- [x] Hosting pagina met 3 pakketten
- [x] Mobile menu met submenu
- [x] GSAP animaties globaal geïnstalleerd (ScrollTrigger, Observer, TextPlugin)
- [x] Cookie consent banner
- [x] Google Analytics 4 (na cookie consent)
- [x] Google Search Console gekoppeld (DNS verificatie)
- [x] Sitemap ingediend (18 pagina's geïndexeerd)
- [x] Dynamische SEO meta tags per pagina
- [x] Structured Data (LocalBusiness + WebSite + SiteNavigationElement schema)
- [x] Canonical URLs
- [x] Portfolio pagina met unified floating background + GSAP animaties
- [x] Teaser cards met CTA buttons, glow hover effect, emoji animaties
- [x] Google Business Profile aangemaakt ✅ 14 dec 2025
- [x] Herindexering alle pagina's aangevraagd ✅ 14 dec 2025
- [x] **Homepage hero redesign** ✅ 15 dec 2025
  - Split layout (tekst links, device mockups rechts)
  - Rotating words animatie ("converteren", "presteren", "groeien", "scoren")
  - USP pills met checkmarks
  - Stats bar (17 projecten, <1s laadtijd, 100% custom, 5★ reviews)
  - Verbeterde CTA buttons
- [x] **GSAP animaties geoptimaliseerd** ✅ 15 dec 2025
  - Mobiel: alleen fade-in animaties (geen slide/scale)
  - Portfolio pagina scroll-out effecten verwijderd (content bleef verdwijnen)
  - Dubbele animatie conflicten opgelost
- [x] **LiteSpeed caching + performance** ✅ 15 dec 2025
  - LiteSpeed cache ingeschakeld (CacheLookup on)
  - Browser caching ingesteld (CSS/JS 30 dagen, images 1 jaar)
  - GZIP compressie actief
  - Security headers toegevoegd
- [x] **Rank Math SEO plugin** ✅ 15 dec 2025
  - Rank Math geïnstalleerd en geactiveerd
  - Schema markup ondersteuning
  - Sitemap automatisch gegenereerd
  - Focus keyword tracking
- [x] **Testimonials sectie homepage** ✅ 15 dec 2025
  - 3 testimonial cards met Schema.org markup
  - Featured card design (donker)
  - Trust indicators (5.0 score, 100% tevreden, 24u reactietijd)
  - Responsive grid layout
- [x] **Rank Math SEO wizard voltooid** ✅ 15 dec 2025
  - Advanced mode geconfigureerd
  - Google Search Console gekoppeld
  - Google Analytics gekoppeld
  - Sitemap actief (HTTP 200)
  - SEO tweaks ingesteld (noindex empty archives, external links in new tab)
- [x] **Wordfence Security geïnstalleerd** ✅ 15 dec 2025
  - Firewall bescherming
  - Malware scanner
  - Brute force protection
  - Login security
- [x] **WordPress instellingen geoptimaliseerd** ✅ 15 dec 2025
  - Site titel: "Webbiecorn"
  - Tagline: "Webdesign & Development Studio"
  - Tijdzone: Europe/Amsterdam
  - Permalinks: /%postname%/ (SEO-friendly)
  - Comments/Pingbacks uitgeschakeld
  - Statische homepage ingesteld
- [x] **GitHub repository aangemaakt** ✅ 15 dec 2025
  - Repository: https://github.com/Webbiecorn/webbiecorn-theme
  - 26 bestanden geüpload
  - Veilig (geen credentials)
  - Versie beheer actief
- [x] **Wordfence firewall geoptimaliseerd** ✅ 15 dec 2025
  - LiteSpeed configuratie gedetecteerd
  - .htaccess backup gemaakt
  - Firewall op server-niveau actief
- [x] **OG afbeelding geüpload** ✅ 15 dec 2025
  - 1200x630px afbeelding
  - URL: /wp-content/uploads/2025/12/webbiecorn-og-image.png
  - Social media sharing gereed (Facebook, LinkedIn, Twitter, WhatsApp)
- [x] **FAQ Schema (JSON-LD) toegevoegd** ✅ 15 dec 2025
  - 6 FAQ vragen met structured data
  - Google Rich Results ondersteuning
  - Hosting FAQ aangepast (alleen in combinatie met pakket)
- [x] **Performance & SEO optimalisaties** ✅ 15 dec 2025
  - Breadcrumbs Schema (JSON-LD) op alle subpagina's
  - Lazy Loading voor alle afbeeldingen
  - Service Schema op webdesign/diensten pagina's
  - Preload critical fonts (Inter)
  - Content Security Policy headers
  - Custom 404 pagina met Webbiecorn styling
- [x] **Performance Quick Wins** ✅ 20 dec 2025
  - Logo burst intro animatie volledig verwijderd (3.3s laadtijd bespaard)
  - ~210 regels intro CSS verwijderd uit style.css
  - ~330 regels inline intro JavaScript verwijderd uit front-page.php
  - Backup bestanden verwijderd (page-portfolio.php.backup, page-portfolio.php.bak)
  - Hreflang tags toegevoegd (nl-NL + x-default) voor internationale SEO
- [x] **CSS Splitsing & Conditioneel Laden** ✅ 20 dec 2025
  - CSS gesplitst in 13 modulaire bestanden in `/assets/css/`
  - Conditioneel laden per pagina type (homepage, portfolio, pricing, etc.)
  - Base CSS (tokens, reset, typography): altijd geladen (~5KB)
  - Page-specific CSS: alleen geladen waar nodig
  - Verwachte besparing: ~60-70% minder CSS per pagina
- [x] **GSAP Lokaal Gebundeld** ✅ 20 dec 2025
  - GSAP + plugins gedownload naar `/assets/js/vendor/`
  - Geen CDN dependency meer (was 5 externe requests)
  - Observer & TextPlugin: conditioneel laden (alleen homepage/portfolio)
  - Defer attribute toegevoegd voor betere rendering
  - Fallback class `.no-gsap` voor als GSAP niet laadt
- [x] **Animatie Conflicten Opgelost** ✅ 20 dec 2025
  - Dubbele header scroll animatie verwijderd uit animations.js
  - main.js behoudt header scroll effect (`.scrolled` class)
  - GSAP beschikbaarheid check toegevoegd met fallback
  - ScrollTrigger beschikbaarheid check toegevoegd
  - Alle keyframes verplaatst naar animations.css

### Wat moet nog 🔄
- [ ] Google Business Profile verificatie (wacht op code)
- [ ] Foto's toevoegen aan Google Business Profile
- [ ] Case study pagina's voor portfolio
- [ ] Blog/nieuws sectie starten

---

## 🔍 FASE SEO: ZOEKMACHINE OPTIMALISATIE
**Doel:** #1 in Google voor relevante zoekwoorden  
**Status:** 🚧 IN UITVOERING  
**Gestart:** 11 december 2025

### SEO Audit Resultaten (11 dec 2025)
| Item | Status | Notities |
|------|--------|----------|
| Sitemap aanwezig | ✅ | /sitemap_index.xml (Rank Math) |
| Robots.txt | ✅ | Correct geconfigureerd |
| Meta description homepage | ✅ | Aanwezig in header.php |
| Open Graph tags | ✅ | Basis aanwezig + OG image |
| SSL/HTTPS | ✅ | Actief |
| Mobile friendly | ✅ | Responsive design |
| Google Search Console | ✅ | Gekoppeld 12 dec 2025, sitemap ingediend |
| Google Business Profile | ⏳ | Aangemaakt, wacht op verificatie |
| Pagina-specifieke meta tags | ✅ | Dynamisch per pagina in header.php |
| Structured Data (Schema) | ✅ | LocalBusiness + WebSite + Review schema |
| Rank Math SEO | ✅ | Geïnstalleerd + wizard voltooid |
| OG afbeelding | ✅ | 1200x630px geüpload |
| Laadsnelheid | ⚠️ | Te testen/optimaliseren |
| Interne linking | ⚠️ | Kan beter |

---

### 📋 SEO ACTIEPLAN

#### STAP 1: Google Search Console Koppelen ✅ AFGEROND
**Wat:** Website verifiëren bij Google zodat je:
- Kunt zien welke zoekwoorden traffic brengen
- Indexeringsproblemen kunt vinden
- Handmatig herindexering kunt aanvragen

**Afgerond:** 12-14 december 2025
- DNS verificatie via TXT record: `google-site-verification=Q0FEiwOwYalht6ndzke--jF_WiQyO5NG9zmbpNM3tvw`
- Sitemap ingediend: 18 pagina's gevonden
- Herindexering aangevraagd voor ALLE pagina's (14 dec 2025):
  - Homepage, Webdesign, Portfolio, Diensten, Contact, etc.
- SiteNavigationElement schema toegevoegd voor sitelinks
- "Home" pagina verwijderd (veroorzaakte redirect fout)

**Status:** ✅ Afgerond

---

#### STAP 2: Google Business Profile Aanmaken ✅ AFGEROND
**Wat:** Lokale SEO - verschijnen op Google Maps en in lokale zoekresultaten

**Afgerond:** 14 december 2025
- Profiel aangemaakt voor "Webbiecorn"
- Categorie: "Webdesign" + gerelateerde services
- Services toegevoegd: App-ontwikkeling, Softwareontwikkeling, Website ontwerp, WordPress, SEO
- Beschrijving toegevoegd
- Website gekoppeld: https://webbiecorn.nl

**Nog te doen:**
- [ ] Verificatie voltooien (wacht op briefkaart/code)
- [ ] Logo uploaden
- [ ] Foto's toevoegen (portfolio screenshots)

**Hoe verificatie werkt:**
1. Ga naar https://business.google.com
2. Maak profiel aan voor "Webbiecorn"
3. Categorie: "Webdesign bureau" of "Internetmarketingservice"
4. Voeg toe: adres (of "Online dienstverlener"), telefoon, website, openingstijden
5. Upload logo en foto's
6. Vraag verificatie aan (postcode)

**Status:** ⏳ Wacht op Kevin

---

#### STAP 3: Pagina-specifieke Meta Tags ✅ AFGEROND
**Wat:** Elke pagina unieke title en description geven  
**Geïmplementeerd:** 11 december 2025

Dynamische SEO in `header.php` met unieke meta data per pagina:
- Homepage, Diensten, Over Ons, Contact, Portfolio, Hosting
- Canonical URLs toegevoegd
- OG Image dimensies (1200x630) toegevoegd

**Status:** ✅ Afgerond

---

#### STAP 4: Structured Data (Schema.org) ✅ AFGEROND
**Wat:** Code die Google helpt je bedrijf te begrijpen  
**Geïmplementeerd:** 11 december 2025

**Geïmplementeerde schemas in header.php:**
- [x] LocalBusiness schema (bedrijfsinfo, diensten, openingstijden)
- [x] WebSite schema met SearchAction (op homepage)
- [ ] Service schema (per dienst) - later
- [ ] FAQ schema (voor FAQ secties) - later  
- [ ] BreadcrumbList schema (navigatie) - later

**Status:** ✅ Basis afgerond, uitbreiding mogelijk

---

#### STAP 5: Content & Keywords 🟢 DOORLOPEND
**Wat:** Pagina's optimaliseren voor zoekwoorden waar mensen op zoeken

**Target Keywords:**
| Keyword | Volume | Difficulty | Target Pagina |
|---------|--------|------------|---------------|
| website laten maken | Hoog | Medium | /webdesign/ |
| webdesign bureau | Medium | Medium | Homepage |
| maatwerk website | Medium | Laag | /webdesign/ |
| logo laten ontwerpen | Medium | Medium | /branding/ |
| seo specialist | Hoog | Hoog | /seo-analyse/ |
| website onderhoud | Laag | Laag | /onderhoud/ |
| wordpress hosting | Hoog | Hoog | /hosting/ |

**Status:** ⏳ Keyword research uitvoeren

---

#### STAP 6: Technische SEO 🟢 DOORLOPEND
**Wat:** Website sneller en beter indexeerbaar maken

- [ ] PageSpeed test uitvoeren (Google PageSpeed Insights)
- [ ] Afbeeldingen comprimeren (WebP formaat)
- [ ] Lazy loading voor afbeeldingen
- [ ] CSS/JS minification
- [ ] Caching optimaliseren
- [ ] Core Web Vitals verbeteren

**Status:** ⏳ Te testen

---

#### STAP 7: Linkbuilding 🟢 LATER
**Wat:** Links van andere websites naar jouw site krijgen

**Ideeën:**
- [ ] Vermeldingen in webdesign directories
- [ ] Gastblogs schrijven
- [ ] Lokale business directories
- [ ] Social media profielen met links

**Status:** ⏳ Later oppakken

---

#### STAP 8: Blog Content Strategie 🟢 NIEUW
**Wat:** Maandelijks 2-4 blog posts voor SEO en autoriteit

**Voorgestelde onderwerpen:**
- [ ] "Waarom maatwerk websites beter zijn dan templates"
- [ ] "5 tekenen dat je website aan vervanging toe is"
- [ ] "SEO basics: wat elke ondernemer moet weten"
- [ ] "Het verschil tussen webdesign en webdevelopment"
- [ ] "Hoeveel kost een website laten maken in 2025?"
- [ ] "WordPress vs. maatwerk: wat past bij jouw bedrijf?"

**Status:** ⏳ Nog te starten

---

#### STAP 9: Social Proof Versterken 🟢 NIEUW
**Wat:** Testimonials, reviews en case studies voor meer vertrouwen

**Acties:**
- [ ] Klanten om reviews vragen (Google, LinkedIn)
- [ ] Review schema implementeren op website
- [ ] "Klanten aan het woord" sectie op homepage
- [ ] Case study pagina's voor portfolio projecten
- [ ] LinkedIn recommendations verzamelen

**Status:** ⏳ Nog te starten

---

### 📊 SEO KPI's & Tracking
| Metric | Huidige waarde | Doel (3 maanden) |
|--------|---------------|------------------|
| Google positie "webbiecorn" | #1 | Behouden |
| Google positie "website laten maken" | Niet gerankt | Top 50 |
| Organisch verkeer | 0 | 100+ bezoekers/maand |
| Geïndexeerde pagina's | ? | 15+ |
| Backlinks | 0 | 10+ |

---

## 🗺️ GEFASEERDE ROADMAP

### FASE 0: Fundament ✅ AFGEROND
**Doel:** Professionele basis website die klanten kan aantrekken  
**Afgerond:** 8 december 2025

| Taak | Status | Prioriteit |
|------|--------|------------|
| Homepage content finaliseren | ✅ Done | - |
| Header zonder Home + Pakketten link | ✅ Done | - |
| Contactformulier werkend | ✅ Done | - |
| Footer updaten (links, social, contact) | ✅ Done | - |
| Basis SEO (meta, OG tags) | ✅ Done | - |
| Google Analytics installeren | ✅ Done | - |
| Cookie banner (AVG) | ✅ Done | - |

---

### FASE 1: Service Pagina's ✅ AFGEROND
**Doel:** Uitgebreide info over elk aanbod  
**Afgerond:** 8 december 2025

| Pagina | URL | Status | Inhoud |
|--------|-----|--------|--------|
| Diensten overzicht | `/diensten` | ⏳ Todo | Alle services in één overzicht |
| Webdesign & Pakketten | `/webdesign` | ✅ Done | 5 pakketten, vergelijkingstabel, FAQ, add-ons |
| Branding & Identiteit | `/branding` | ✅ Done | 3 diensten, proces, add-ons, FAQ |
| SEO & Analyse | `/seo-analyse` | ✅ Done | 3 diensten, checklist, rapport mockup, FAQ |
| Onderhoud & Support | `/onderhoud` | ⏳ Todo | Abonnementen, SLA |

---

### FASE 2: Vertrouwen & Portfolio ✅ AFGEROND
**Doel:** Social proof en bewijs van expertise  
**Afgerond:** 8 december 2025

| Taak | Status | Details |
|------|--------|---------|
| Portfolio pagina | ✅ Done | Grid met 4 echte projecten + filter |
| Portfolio: Buurtapp | ✅ Done | Webapp showcase card |
| Portfolio: Gifteez | ✅ Done | Branding/affiliate project card |
| Portfolio: Webbiecorn | ✅ Done | Eigen agency website card |
| Portfolio: Social Media Assets | ✅ Done | Multi-brand visuals card |
| Contact pagina | ✅ Done | Dedicated contact page + verbeterd formulier |
| Over ons pagina | ✅ Done | Verhaal, waarden, skills, fun facts |
| /onderhoud pagina | ✅ Done | 3 onderhouds-abonnementen |
| Mobile menu & footer links | ✅ Done | Naar echte pagina's i.p.v. ankers |
| CTA buttons werkend | ✅ Done | "Project starten" → /contact/ |
| **Hero redesign** | ✅ Done | Animated gradient, particles, Lottie |
| **Portfolio screenshots** | ✅ Done | Echte project screenshots geüpload |
| **Buurtapp detail pagina** | ⏳ Todo | Uitgebreide case study met screenshots |
| Testimonials sectie | ⏳ Todo | Reviews van klanten |

---

### FASE 3: Digitale Producten
**Doel:** Passief inkomen via templates & downloads  
**Deadline:** Week 4-6

| Product | Prijs | Platform | Status |
|---------|-------|----------|--------|
| Social Media Bundle | €29 | Gumroad/Shop | ⏳ Todo |
| Branding Kit Template | €49 | Gumroad/Shop | ⏳ Todo |
| AI Prompts Pack | €19 | Gumroad/Shop | ⏳ Todo |
| Portfolio Template | €39 | Gumroad/Shop | ⏳ Todo |

**Pagina nodig:** `/shop` of `/templates`

---

### FASE 4: Apps & Tools
**Doel:** SaaS producten bouwen voor recurring revenue  
**Deadline:** Week 6-10

#### Prioriteit Apps (in volgorde):

1. **GiftFinder App** (voor Gifteez)
   - Affiliate powerhouse
   - Cadeau-suggesties via AI
   - Status: ⏳ Planning

2. **QR Menu Maker**
   - Snelle micro-app
   - Target: horeca
   - Status: ⏳ Niet gestart

3. **AI Design Buddy**
   - Schaalbaar internationaal
   - Status: ⏳ Niet gestart

4. **BuurtApp White-Label**
   - Voor gemeentes/wijken
   - Status: ⏳ Niet gestart

#### App Pricing Model:
| Tier | Prijs | Features |
|------|-------|----------|
| Free | €0 | Beperkte functies |
| Pro | €5/mo | Volledige toegang |
| Unlimited | €15/mo | + prioriteit support |
| Agency | €49/mo | White-label + API |

---

### FASE 5: Marketing & Groei
**Doel:** Zichtbaarheid en klanten werven  
**Deadline:** Doorlopend

| Kanaal | Actie | Status |
|--------|-------|--------|
| LinkedIn | B2B posts, case studies | ⏳ Todo |
| TikTok/Reels | App demo's, behind-the-scenes | ⏳ Todo |
| Pinterest | Templates, design inspiratie | ⏳ Todo |
| Nieuwsbrief | Updates, launches | ⏳ Todo |
| Affiliate programma | 10-20% commissie | ⏳ Todo |
| Google Ads | Wanneer budget beschikbaar | ⏳ Later |

---

## 💰 VERDIENMODELLEN

### Services (Webbiecorn Studio)
| Pakket | Prijs |
|--------|-------|
| Micro One-Page | €300–€500 |
| Starter Web | €500–€800 |
| Professional Web & Branding | €900–€1.800 |
| Business Web & Growth | €1.800–€3.500+ |
| Full Service Premium | €2.500–€4.000+ |

### Abonnementen
| Type | Prijs |
|------|-------|
| Basis Support | €50–€100/mo |
| Premium Support | €100–€200/mo |
| Full Service Retainer | €100–€300/mo |

### Digitale Producten
| Product | Prijs |
|---------|-------|
| Templates | €19–€79 |
| Bundles | €49–€149 |

### Apps (SaaS)
| Model | Prijs |
|-------|-------|
| Subscriptions | €5–€49/mo |
| White-label setup | €1.000–€5.000 |
| White-label maintenance | €79–€249/mo |

---

## 🔧 TECHNISCHE STACK

### Website
- **CMS:** WordPress (custom theme)
- **Thema:** webbiecorn-starter-v2
- **Hosting:** Hostinger
- **Formulieren:** Contact Form 7

### Apps (toekomstig)
- **Frontend:** React / Next.js
- **Mobile:** React Native / Expo
- **Backend:** Firebase / Supabase
- **Payments:** Stripe
- **Hosting:** Vercel / Firebase

---

## 📞 BETALINGSVOORWAARDEN

| Projectwaarde | Structuur |
|---------------|-----------|
| Tot €1.500 | 50% vooraf, 50% bij oplevering |
| Boven €1.500 | 40% start, 40% eerste versie, 20% afronding |
| Abonnementen | Maandelijks vooraf |

---

## 📝 NOTITIES VOOR AI ASSISTENTEN

### Context
- Webbiecorn is een technische webstudio van Kevin
- Focus op maatwerk, geen pagebuilders
- Toon: professioneel, helder, speels modern
- Nederlandse markt, teksten in het Nederlands

### Belangrijke bestanden
- `/wp-content/themes/webbiecorn-starter-v2/` - Actief thema
- `front-page.php` - Homepage
- `header.php` - Header met inline critical CSS
- `style.css` - Hoofdstylesheet
- `WEBBIECORN-SERVICE-MANIFEST.md` - Service details

### Deploy
- Zie `DEPLOY.md` (één centrale, veilige deploy-handleiding).

---

## 📅 CHANGELOG

### 9 december 2025 — HERO REDESIGN & PORTFOLIO POLISH
- ✅ **Hero sectie compleet herontworpen:**
  - Animated gradient achtergrond (15s cycle, zachte kleuren)
  - Floating particles effect via CSS pseudo-element
  - Pulsating blob effecten op de achtergrond
  - Text fade-in animaties met staggered delays
  - Glowing CTA button met pulserende glow
  - Custom Lottie animatie geïntegreerd (hero-home-webbie.json)
  - Lottie player via unpkg CDN
- ✅ **Portfolio sectie verbeterd:**
  - Echte screenshots geüpload voor alle 4 projecten
  - Reversed hover effect (overlay standaard zichtbaar, verdwijnt bij hover)
  - Animated rode category badges met shine effect
  - Backdrop blur en text shadows voor leesbaarheid
  - Grotere category labels
  - Subtitle verwijderd voor cleaner design
- ✅ **Portfolio pagina verbeterd:**
  - Echte screenshots toegevoegd
  - Gifteez categorie gecorrigeerd (branding → website)
  - Alt teksten en titels bijgewerkt

### 8 december 2025 (update 5) — FASE 2 AFGEROND
- ✅ **Contact pagina live** (`/contact/`):
  - Verbeterd contactformulier met onderwerp dropdown
  - Budget indicatie dropdown (€500 tot €5.000+)
  - Telefoon veld toegevoegd
  - Email naar info@webbiecorn.nl geconfigureerd
  - Contact info cards + social links
  - "Wat kun je verwachten" sectie
- ✅ **Over ons pagina live** (`/over-ons/`):
  - Hero met studio verhaal
  - 4 kernwaarden cards met icons
  - 3 skills blokken (Design, Development, Marketing)
  - Fun facts sectie
  - Logo avatar (niet emoji)
- ✅ **Portfolio fix:**
  - Custom post type conflict opgelost (slug → /werk/)
  - Portfolio pagina werkt nu op /portfolio/
  - Portfolio toegevoegd aan header menu
- ✅ **Navigatie verbeterd:**
  - Mobile hamburger menu → linkt naar echte pagina's
  - Footer links → linkt naar echte pagina's
  - "Project starten" buttons → /contact/
- ✅ **Mobile header verbeterd:**
  - "WEBBIECORN" tekst verborgen op kleine schermen (<480px)
  - Meer ruimte voor CTA button
- 📋 **Volgende fase:** Digitale producten, case studies, testimonials

### 8 december 2025 (update 4) — PORTFOLIO & PRICING POLISH
- ✅ **Pakketten sectie homepage herontworpen:**
  - 3 compacte pricing cards (Starter, Professional, Business)
  - Uitklapbare details per pakket
  - Witte kaarten met rode hover glow + shine effect
  - Professional kaart met subtiele rode tint + ster indicator
  - CTA's op gelijke hoogte
  - "Bekijk alle 5 pakketten" link naar /webdesign
- ✅ **Portfolio pagina met echte projecten:**
  - Buurtapp/Buurtconciërge (Full-stack webapp)
  - Gifteez Cadeauplatform (Branding & affiliate)
  - Webbiecorn Agency (Eigen merk)
  - Social Media & Branding Assets (Multi-brand)
  - Skills sectie met 4 categorieën
  - Kleurrijke gradient placeholders per project
  - Filter: Alles, Webapps, Branding, Websites
- ✅ **Gardeneez verwijderd** (uit de lucht)
- 📋 **Volgende:** Buurtapp detail pagina, Contact pagina

### 8 december 2025 (update 3) — GROTE UPDATE
- ✅ **Google Analytics 4** geïnstalleerd (wacht op consent)
- ✅ **Cookie banner (AVG)** met accept/decline + localStorage
- ✅ **/branding pagina live:**
  - 3 diensten (Logo €150, Huisstijl €350, Complete €600)
  - 4-stappen proces timeline
  - 6 extra brand assets add-ons
  - 5 FAQ's
- ✅ **/seo-analyse pagina live:**
  - 3 diensten (Audit €150, Optimalisatie €300, Maandpakket €150/mnd)
  - SEO checklist (technisch, on-page, off-page)
  - Rapport mockup visual
  - 5 FAQ's
- ✅ **/portfolio pagina live:**
  - Filterable grid (Alles, Websites, Branding, Redesign)
  - Placeholder projecten met hover overlays
  - Stats sectie (10+, 100%, <1s, 24h)
  - "Jouw project?" CTA card
- ✅ **Menu bijgewerkt:** Webdesign, Branding, SEO, Portfolio, Over ons, Contact
- 📋 **Volgende: Echte portfolio screenshots + /onderhoud pagina**

### 8 december 2025 (update 2)
- ✅ **/webdesign pagina live:** volledige pakketten pagina met:
  - Page hero met kicker badge
  - "Waarom Webbiecorn" sectie met 4 icons
  - 5 pakket cards met meta info (levertijd, revisies)
  - Vergelijkingstabel met 10 features
  - 8 add-ons met prijzen
  - Betalingsvoorwaarden met visuele bars
  - 7 FAQ accordions (pure HTML/CSS)
  - CTA sectie
- ✅ Menu bijgewerkt: Pakketten → Webdesign link
- ✅ Oude Diensten link verwijderd

### 8 december 2025
- ✅ **FASE 0 AFGEROND**
- ✅ Footer met 4 kolommen: brand, diensten, webbiecorn, contact
- ✅ Social links: LinkedIn, Instagram, X
- ✅ SEO meta tags: description, keywords, Open Graph, Twitter Cards
- ✅ Theme color voor mobile browsers
- ✅ Homepage met pakketten live
- ✅ Contact Form 7 geïnstalleerd
- ✅ Header: Home verwijderd, Pakketten toegevoegd
- ✅ Roadmap document aangemaakt

---

*Dit document wordt bijgewerkt na elke milestone.*
