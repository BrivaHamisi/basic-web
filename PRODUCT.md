# Product

<!-- impeccable:product-schema 1 -->

## Platform

web

## Stack

Laravel 12, Tailwind CSS v4, Vite, Alpine.js, Laravel Breeze (auth), MySQL/SQLite

## Users

**Primary:** Business owners and decision-makers seeking IT solutions, web development, and graphics/design services. They arrive evaluating agencies for digital transformation, custom development, or brand design work. Their job: assess credibility, see relevant work, understand service scope, and initiate contact.

**Secondary:** Marketing managers comparing service providers; startup founders needing end-to-end digital partners.

## Product Purpose

Briva Digital's website is the primary marketing surface for a full-service digital agency. It must:
- Establish credibility and expertise immediately
- Demonstrate relevant capabilities through real work evidence
- Convert qualified visitors into leads (contact/consultation requests)
- Support the admin team in managing dynamic content (sliders, testimonials)

Success = qualified inbound inquiries from target clients.

## Positioning

**Full-stack digital partner** — strategy, design, development, and ongoing support under one roof. Unlike specialists who only design or only develop, or agencies that outsource technical execution, Briva delivers cohesive digital products end-to-end with design-first craft and engineering rigor.

## Operating Context

- **Content management:** Admin panel (authenticated) for CRUD on sliders (hero/content carousels) and testimonials
- **Public site sections:** Hero/slider → Features/services → Clarifies (value props) → Get All (portfolio showcase) → Video demo → Testimonials → FAQ → CTA
- **Authentication:** Laravel Breeze with email verification, password reset, profile management
- **Deployment:** Standard Laravel on PHP 8.2+, Vite-built assets, database-backed

## Capabilities and Constraints

**Confirmed functionality:**
- Public marketing site with 7+ sections
- Admin dashboard with slider and testimonial management
- User authentication (register, login, email verification, password reset, profile)
- Responsive design (mobile menu, adaptive layouts)
- Dark mode support (Tailwind dark:)

**Technical constraints:**
- Laravel 12, PHP 8.2+, Tailwind v4, Vite, Alpine.js
- Existing admin routes and controllers must remain functional
- Database schema for sliders and testimonials is set
- Vite manifest-based asset loading in production

**Explicitly undecided:**
- Whether to migrate public site from Bootstrap/legacy CSS (home_master.blade.php) to Tailwind/components
- Exact content for each public section (mostly placeholder currently)
- Lead capture form integration (contact/quote request)

## Brand Commitments

- **Name:** Briva Digital (fixed)
- **Tagline:** IT Solution & Graphics (fixed)
- **Voice:** Professional, capable, design-conscious, technically credible
- **Assets on hand:** Logo files, brand guidelines, real client testimonials, portfolio screenshots, team photos/bios — though much current site content is placeholder/template
- **Visual direction:** Not yet defined in code; current public site uses Bootstrap + custom CSS (home_master), admin uses Tailwind/Breeze defaults

## Evidence on Hand

- Logo files and brand guidelines (confirmed available)
- Real client testimonials and case studies (confirmed available)
- Portfolio/project screenshots (confirmed available)
- Team photos and bios (confirmed available)
- **Note:** Current live site content is largely placeholder/template; real assets need to be integrated
- **Absences:** No fabricated testimonials, fake metrics, or invented client logos permitted

## Product Principles

1. **Credibility first** — Every element must reinforce expertise; no generic agency tropes without proof
2. **Design proves capability** — The site itself is a portfolio piece; craft quality signals work quality
3. **Clarity over cleverness** — Services, process, and value must be immediately scannable
4. **Real evidence, always** — Only authentic testimonials, real project imagery, verified claims
5. **Admin ergonomics matter** — Content managers need efficient, error-resistant workflows

## Accessibility & Inclusion

- **Target:** WCAG 2.1 AA compliance
- **Requirements:** Semantic HTML, proper heading hierarchy, ARIA labels where needed, focus-visible states, keyboard-operable interactive elements, sufficient color contrast in both light/dark modes, alt text for all meaningful images
- **Screen reader support:** Essential — all dynamic content (sliders, modals, dropdowns) must announce properly
- **Keyboard navigation:** All interactive elements reachable and operable without mouse