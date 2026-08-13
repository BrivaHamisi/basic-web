---
name: Briva Digital
description: Split visual system: Bootstrap marketing site, Tapeli admin theme, Tailwind v4 auth
colors:
  # Public Marketing Site (Bootstrap + custom CSS)
  marketing-heading: "#142D6F"
  marketing-body: "#A3BDFF"
  marketing-white: "#ffffff"
  marketing-white-bg: "#ffffff"
  marketing-light: "#F6F4EF"
  marketing-light-2: "#A3BDFF"
  marketing-light-3: "#b2b7c7"
  marketing-light-4: "#C9CCD5"
  marketing-accent: "#FFC947"
  marketing-accent-hover: "#FFC947"
  marketing-dark-bg: "#0D152E"
  marketing-red: "#FD4C5C"
  marketing-red-deep: "#0F1A54"
  marketing-yellow: "#FBC21D"
  marketing-yellow-text: "#0F1A54"
  marketing-border: "rgba(29, 36, 58, 0.12)"
  marketing-shadow: "rgba(65, 62, 101, 0.1)"
  marketing-submenu-shadow: "rgba(0, 0, 0, 0.3)"
  marketing-megamenu-shadow: "rgba(0, 0, 0, 0.09)"
  marketing-megamenu-border: "#e7e9ed"
  marketing-overlay: "rgba(0, 0, 0, 0.5)"
  marketing-focus: "#989ffd"

  # Admin Panel (Tapeli Bootstrap 5 Theme)
  admin-primary: "#537AEF"
  admin-secondary: "#8c57d1"
  admin-success: "#29aa85"
  admin-info: "#62B7E5"
  admin-warning: "#eb9d59"
  admin-danger: "#ec8290"
  admin-light: "#f0f4f7"
  admin-dark: "#4a5a6b"
  admin-body-color: "#4a5a6b"
  admin-body-bg: "#ffffff"
  admin-heading-color: "inherit"
  admin-link-color: "#537AEF"
  admin-link-hover: "#4262bf"
  admin-border-color: "#dee2e6"
  admin-border-radius: "0.325rem"
  admin-border-radius-sm: "0.25rem"
  admin-border-radius-lg: "0.5rem"
  admin-border-radius-xl: "1rem"
  admin-border-radius-xxl: "2rem"
  admin-box-shadow: "0 0.5rem 1rem rgba(0, 0, 0, 0.15)"
  admin-box-shadow-sm: "0 0.125rem 0.5rem rgba(0, 0, 0, 0.04)"
  admin-box-shadow-lg: "0 1rem 3rem rgba(0, 0, 0, 0.175)"
  admin-focus-ring-color: "rgba(83, 122, 239, 0.25)"
  admin-form-valid: "#29aa85"
  admin-form-invalid: "#ec8290"

  # Auth/Breeze (Tailwind v4)
  breeze-primary-bg: "#1f2937"
  breeze-primary-hover: "#111827"
  breeze-primary-active: "#030712"
  breeze-primary-text: "#ffffff"
  breeze-secondary-bg: "#ffffff"
  breeze-secondary-hover: "#f9fafb"
  breeze-secondary-border: "#d1d5db"
  breeze-secondary-text: "#374151"
  breeze-danger-bg: "#dc2626"
  breeze-danger-hover: "#ef4444"
  breeze-danger-active: "#b91c1c"
  breeze-danger-text: "#ffffff"
  breeze-input-border: "#d1d5db"
  breeze-input-focus-border: "#6366f1"
  breeze-input-focus-ring: "#6366f1"
  breeze-label-text: "#374151"
  breeze-error-text: "#dc2626"
  breeze-focus-ring-indigo: "#6366f1"
  breeze-focus-ring-red: "#ef4444"
  breeze-focus-ring-offset: "#1f2937"

typography:
  marketing-display:
    fontFamily: '"Afacad", "DM Sans", "Fira Sans", "Instrument Sans", "Inter", sans-serif'
    fontWeight: 700
    letterSpacing: "-0.01em"
  marketing-body:
    fontFamily: '"DM Sans", sans-serif'
    fontSize: "20px"
    lineHeight: 1.3
    fontWeight: 400
  marketing-nav:
    fontFamily: '"DM Sans", sans-serif'
    fontSize: "17px"
    lineHeight: "30px"
    fontWeight: 600
  marketing-btn:
    fontFamily: '"DM Sans", sans-serif'
    fontSize: "16px"
    fontWeight: 700
    letterSpacing: "-0.53px"
    textTransform: "uppercase"

  admin-body:
    fontFamily: '"Public Sans", sans-serif'
    fontSize: "0.875rem"
    lineHeight: 1.5
    fontWeight: 400
  admin-heading:
    fontFamily: '"Public Sans", sans-serif'
    fontWeight: 500
    lineHeight: 1.2
  admin-code:
    fontFamily: "SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"

  breeze-body:
    fontFamily: '"Figtree", ui-sans-serif, system-ui, sans-serif'
    fontSize: "0.875rem"
    lineHeight: 1.5
    fontWeight: 400
  breeze-label:
    fontFamily: '"Figtree", ui-sans-serif, system-ui, sans-serif'
    fontSize: "0.875rem"
    fontWeight: 500
  breeze-button:
    fontFamily: '"Figtree", ui-sans-serif, system-ui, sans-serif'
    fontSize: "0.75rem"
    fontWeight: 600
    letterSpacing: "0.1em"
    textTransform: "uppercase"

rounded:
  marketing-btn: "6px"
  marketing-btn-sm: "3px"
  marketing-submenu: "6px"
  marketing-megamenu: "8px"
  marketing-mobile-trigger: "0"
  admin-default: "0.325rem"
  admin-sm: "0.25rem"
  admin-lg: "0.5rem"
  admin-xl: "1rem"
  admin-xxl: "2rem"
  admin-pill: "50rem"
  breeze-default: "0.375rem"
  breeze-sm: "0.25rem"

spacing:
  marketing-nav-padding: "30px"
  marketing-nav-padding-sm: "15px"
  marketing-btn-padding: "15px"
  marketing-btn-min-width: "130px"
  marketing-btn-height: "40px"
  marketing-submenu-padding: "12px 0"
  marketing-megamenu-padding: "30px"
  admin-body-line-height: 1.5
  admin-heading-margin-bottom: "0.6rem"
  admin-border-width: "1px"
  breeze-btn-padding: "16px 48px"
  breeze-btn-gap: "8px"

components:
  marketing-primary-btn:
    backgroundColor: "{colors.marketing-red}"
    textColor: "{colors.marketing-white}"
    rounded: "{rounded.marketing-btn-sm}"
    padding: "10px"
    border: "none"
    fontWeight: 600
    transition: "all 0.4s"
    hoverBackground: "{colors.marketing-red-deep}"
    hoverTransform: "skew(30deg)"

  marketing-yellow-btn:
    backgroundColor: "{colors.marketing-yellow}"
    textColor: "{colors.marketing-yellow-text}"
    rounded: "{rounded.marketing-btn-sm}"
    padding: "10px"
    border: "none"
    fontWeight: 600
    transition: "all 0.4s"
    hoverBackground: "{colors.marketing-white}"

  marketing-default-btn:
    backgroundColor: "transparent"
    textColor: "{colors.marketing-heading}"
    border: "2px solid {colors.marketing-heading}"
    rounded: "{rounded.marketing-btn}"
    padding: "15px"
    fontSize: "16px"
    fontWeight: 700
    letterSpacing: "-0.53px"
    transition: "all 0.4s"
    hoverBackground: "{colors.marketing-heading}"
    hoverTextColor: "{colors.marketing-white}"

  marketing-nav-link:
    color: "{colors.marketing-heading}"
    fontWeight: 500
    padding: "30px 15px"
    letterSpacing: "-0.01em"
    transition: "color 0.4s"
    hoverColor: "{colors.marketing-accent}"

  marketing-submenu:
    backgroundColor: "{colors.marketing-white}"
    boxShadow: "-2px 2px 70px -25px {colors.marketing-submenu-shadow}"
    rounded: "{rounded.marketing-submenu}"
    padding: "12px 0"
    minWidth: "240px"
    border: "none"
    transition: "all 0.4s"

  marketing-megamenu:
    backgroundColor: "{colors.marketing-white}"
    boxShadow: "0 42px 54px {colors.marketing-megamenu-shadow}"
    border: "1px solid {colors.marketing-megamenu-border}"
    rounded: "{rounded.marketing-megamenu}"
    padding: "30px"
    minWidth: "925px"
    transition: "all 0.4s"

  marketing-mobile-menu:
    backgroundColor: "{colors.marketing-white}"
    width: "320px"
    height: "100vh"
    position: "fixed"
    transform: "translateX(-100%)"
    transition: "all 0.5s ease"
    zIndex: 1099

  marketing-mobile-overlay:
    backgroundColor: "{colors.marketing-overlay}"
    position: "fixed"
    width: "100%"
    height: "100%"
    zIndex: 1098
    transition: "all 0.5s ease"

  admin-primary-btn:
    backgroundColor: "{colors.admin-primary}"
    textColor: "{colors.admin-white}"
    rounded: "{rounded.admin-default}"
    padding: "0.375rem 0.75rem"
    fontSize: "0.875rem"
    fontWeight: 500
    border: "none"
    transition: "all 0.15s ease-in-out"
    hoverBackground: "{colors.admin-link-hover}"
    focusRing: "0 0 0 0.25rem {colors.admin-focus-ring-color}"

  admin-secondary-btn:
    backgroundColor: "{colors.admin-secondary}"
    textColor: "{colors.admin-white}"
    rounded: "{rounded.admin-default}"
    padding: "0.375rem 0.75rem"
    fontSize: "0.875rem"
    fontWeight: 500
    border: "none"
    hoverBackground: "#6f42c1"

  admin-success-btn:
    backgroundColor: "{colors.admin-success}"
    textColor: "{colors.admin-white}"
    rounded: "{rounded.admin-default}"
    padding: "0.375rem 0.75rem"
    fontSize: "0.875rem"
    fontWeight: 500
    border: "none"
    hoverBackground: "#218870"

  admin-danger-btn:
    backgroundColor: "{colors.admin-danger}"
    textColor: "{colors.admin-white}"
    rounded: "{rounded.admin-default}"
    padding: "0.375rem 0.75rem"
    fontSize: "0.875rem"
    fontWeight: 500
    border: "none"
    hoverBackground: "#d7707d"

  admin-outline-primary-btn:
    backgroundColor: "transparent"
    textColor: "{colors.admin-primary}"
    border: "1px solid {colors.admin-primary}"
    rounded: "{rounded.admin-default}"
    padding: "0.375rem 0.75rem"
    fontSize: "0.875rem"
    fontWeight: 500
    hoverBackground: "{colors.admin-primary}"
    hoverTextColor: "{colors.admin-white}"

  admin-outline-secondary-btn:
    backgroundColor: "transparent"
    textColor: "{colors.admin-secondary}"
    border: "1px solid {colors.admin-secondary}"
    rounded: "{rounded.admin-default}"
    padding: "0.375rem 0.75rem"
    fontSize: "0.875rem"
    fontWeight: 500
    hoverBackground: "{colors.admin-secondary}"
    hoverTextColor: "{colors.admin-white}"

  admin-outline-danger-btn:
    backgroundColor: "transparent"
    textColor: "{colors.admin-danger}"
    border: "1px solid {colors.admin-danger}"
    rounded: "{rounded.admin-default}"
    padding: "0.375rem 0.75rem"
    fontSize: "0.875rem"
    fontWeight: 500
    hoverBackground: "{colors.admin-danger}"
    hoverTextColor: "{colors.admin-white}"

  admin-card:
    backgroundColor: "{colors.admin-body-bg}"
    border: "1px solid {colors.admin-border-color}"
    rounded: "{rounded.admin-default}"
    boxShadow: "none"
    padding: "1.5rem"

  admin-table:
    backgroundColor: "{colors.admin-body-bg}"
    borderColor: "{colors.admin-border-color}"
    fontSize: "0.875rem"
    color: "{colors.admin-body-color}"

  admin-badge-success:
    backgroundColor: "{colors.admin-success}"
    textColor: "{colors.admin-white}"
    rounded: "{rounded.admin-pill}"
    padding: "0.25rem 0.5rem"
    fontSize: "0.75rem"
    fontWeight: 500

  admin-badge-warning:
    backgroundColor: "{colors.admin-warning}"
    textColor: "{colors.admin-white}"
    rounded: "{rounded.admin-pill}"
    padding: "0.25rem 0.5rem"
    fontSize: "0.75rem"
    fontWeight: 500

  admin-form-input:
    backgroundColor: "{colors.admin-body-bg}"
    border: "1px solid {colors.admin-border-color}"
    rounded: "{rounded.admin-default}"
    padding: "0.375rem 0.75rem"
    fontSize: "0.875rem"
    color: "{colors.admin-body-color}"
    focusBorderColor: "{colors.admin-primary}"
    focusBoxShadow: "0 0 0 0.25rem {colors.admin-focus-ring-color}"

  admin-form-input-valid:
    borderColor: "{colors.admin-form-valid}"
    focusBoxShadow: "0 0 0 0.25rem rgba(41, 170, 133, 0.25)"

  admin-form-input-invalid:
    borderColor: "{colors.admin-form-invalid}"
    focusBoxShadow: "0 0 0 0.25rem rgba(236, 130, 144, 0.25)"

  breeze-primary-btn:
    backgroundColor: "{colors.breeze-primary-bg}"
    textColor: "{colors.breeze-primary-text}"
    rounded: "{rounded.breeze-default}"
    padding: "0.5rem 1rem"
    fontSize: "0.75rem"
    fontWeight: 600
    letterSpacing: "0.1em"
    textTransform: "uppercase"
    border: "1px solid transparent"
    transition: "all 0.15s ease-in-out"
    hoverBackground: "{colors.breeze-primary-hover}"
    focusRing: "0 0 0 2px {colors.breeze-focus-ring-indigo}"
    focusRingOffset: "2px solid {colors.breeze-focus-ring-offset}"

  breeze-secondary-btn:
    backgroundColor: "{colors.breeze-secondary-bg}"
    textColor: "{colors.breeze-secondary-text}"
    rounded: "{rounded.breeze-default}"
    padding: "0.5rem 1rem"
    fontSize: "0.75rem"
    fontWeight: 600
    letterSpacing: "0.1em"
    textTransform: "uppercase"
    border: "1px solid {colors.breeze-secondary-border}"
    boxShadow: "0 1px 2px 0 rgba(0, 0, 0, 0.05)"
    transition: "all 0.15s ease-in-out"
    hoverBackground: "{colors.breeze-secondary-hover}"
    focusRing: "0 0 0 2px {colors.breeze-focus-ring-indigo}"
    focusRingOffset: "2px solid {colors.breeze-focus-ring-offset}"

  breeze-danger-btn:
    backgroundColor: "{colors.breeze-danger-bg}"
    textColor: "{colors.breeze-danger-text}"
    rounded: "{rounded.breeze-default}"
    padding: "0.5rem 1rem"
    fontSize: "0.75rem"
    fontWeight: 600
    letterSpacing: "0.1em"
    textTransform: "uppercase"
    border: "1px solid transparent"
    transition: "all 0.15s ease-in-out"
    hoverBackground: "{colors.breeze-danger-hover}"
    focusRing: "0 0 0 2px {colors.breeze-focus-ring-red}"
    focusRingOffset: "2px solid {colors.breeze-focus-ring-offset}"

  breeze-input:
    backgroundColor: "{colors.breeze-secondary-bg}"
    border: "1px solid {colors.breeze-input-border}"
    rounded: "{rounded.breeze-default}"
    padding: "0.5rem 0.75rem"
    fontSize: "0.875rem"
    color: "{colors.breeze-label-text}"
    focusBorderColor: "{colors.breeze-input-focus-border}"
    focusRing: "0 0 0 2px {colors.breeze-input-focus-ring}"

  breeze-input-dark:
    backgroundColor: "#1f2937"
    border: "1px solid #374151"
    rounded: "{rounded.breeze-default}"
    padding: "0.5rem 0.75rem"
    fontSize: "0.875rem"
    color: "#d1d5db"
    focusBorderColor: "#818cf8"
    focusRing: "0 0 0 2px #818cf8"

  breeze-label:
    color: "{colors.breeze-label-text}"
    fontSize: "0.875rem"
    fontWeight: 500
    display: "block"
    marginBottom: "0.25rem"

  breeze-error:
    color: "{colors.breeze-error-text}"
    fontSize: "0.875rem"
    marginTop: "0.25rem"

  breeze-nav:
    backgroundColor: "{colors.breeze-secondary-bg}"
    borderBottom: "1px solid {colors.breeze-secondary-border}"
    padding: "1rem 1.5rem"

  breeze-nav-link:
    color: "#6b7280"
    fontSize: "0.875rem"
    fontWeight: 500
    padding: "0.5rem 1rem"
    rounded: "{rounded.breeze-default}"
    transition: "all 0.15s ease-in-out"
    hoverColor: "#374151"
    hoverBackground: "#f3f4f6"
    activeColor: "#1f2937"

  breeze-dropdown-trigger:
    backgroundColor: "{colors.breeze-secondary-bg}"
    border: "1px solid transparent"
    color: "#6b7280"
    fontSize: "0.875rem"
    fontWeight: 500
    padding: "0.5rem 0.75rem"
    rounded: "{rounded.breeze-default}"
    transition: "all 0.15s ease-in-out"
    hoverColor: "#374151"
    hoverBackground: "#f3f4f6"
    focusRing: "0 0 0 2px {colors.breeze-focus-ring-indigo}"
    focusRingOffset: "2px solid {colors.breeze-focus-ring-offset}"

  breeze-dropdown-content:
    backgroundColor: "{colors.breeze-secondary-bg}"
    border: "1px solid {colors.breeze-secondary-border}"
    rounded: "{rounded.breeze-default}"
    boxShadow: "0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)"
    padding: "0.5rem"
    minWidth: "12rem"
    zIndex: 50

  breeze-dropdown-link:
    color: "#374151"
    fontSize: "0.875rem"
    fontWeight: 500
    padding: "0.5rem 1rem"
    rounded: "{rounded.breeze-default}"
    transition: "all 0.15s ease-in-out"
    hoverBackground: "#f3f4f6"

  breeze-responsive-nav:
    backgroundColor: "{colors.breeze-secondary-bg}"
    borderTop: "1px solid {colors.breeze-secondary-border}"
    padding: "1rem 1.5rem"
---

# Design System: Briva Digital

## Overview

**Creative North Star: "The Three-Tier Studio"**

Briva Digital's visual system is not a single cohesive design language — it is three distinct visual tiers coexisting in one codebase, each serving a different surface and audience. This reflects the product's honest architecture: a public marketing site built on a purchased Bootstrap template, an admin panel from a separate Bootstrap admin theme, and authentication flows using Laravel Breeze's Tailwind v4 defaults.

**Marketing Tier** — The public face (`home_master.blade.php`, `main.css`, `app.min.css`). Built on Bootstrap 5 with heavy custom CSS overrides. Uses a five-font Google Fonts stack (Afacad, DM Sans, Fira Sans, Instrument Sans, Inter) with DM Sans as the workhorse. Color vocabulary centers on a deep navy heading color (`#142D6F`), a muted blue body color (`#A3BDFF`), and two accent buttons: a skew-animated red (`#FD4C5C` → `#0F1A54`) and a yellow (`#FBC21D`). The aesthetic is template-polished but visually busy — megamenus, decorative SVG shapes, AOS scroll animations, and a sticky header with scroll-reveal behavior.

**Admin Tier** — The authenticated workspace (`admin_master.blade.php`, `backend/assets/css/app.min.css`). The Tapeli admin theme by Zoyothemes. Pure Bootstrap 5.3 with CSS custom properties throughout. Single font: Public Sans. Semantic color roles (primary `#537AEF`, success `#29aa85`, warning `#eb9d59`, danger `#ec8290`) with full light/dark mode support via `[data-bs-theme]`. Component-rich: cards, tables (DataTables), badges, dropdowns, modals, tooltips, charts (ApexCharts). Clean, utilitarian, density-appropriate for data management.

**Auth Tier** — Laravel Breeze defaults (`resources/views/components/*.blade.php`, `resources/css/app.css`). Tailwind v4 with Figtree font. Minimal, accessible, dark-mode-aware. Buttons use uppercase tracking-wide micro-typography. Inputs have indigo focus rings. Dropdowns use Alpine.js. This tier is the most internally consistent and closest to modern Laravel conventions.

**Key Characteristics:**
- Three visual systems, zero shared tokens
- Marketing: template-derived, decorative, animation-heavy
- Admin: theme-derived, utilitarian, component-complete
- Auth: framework-native, minimal, accessible
- No design token abstraction layer exists
- Dark mode only in Admin (via Bootstrap) and Auth (via Tailwind); Marketing has hardcoded dark variants in CSS

## Colors

The palette is fractured across three independent systems with no shared values.

### Primary (Marketing)
- **Deep Navy** (`#142D6F`): Primary heading color, nav links, button borders, sticky header background. The anchor hue for the marketing tier.
- **Muted Blue** (`#A3BDFF`): Body text, secondary UI elements. Low contrast against white — fails WCAG AA for body copy.
- **Vibrant Red** (`#FD4C5C`): Primary CTA button. Skew-transform hover reveals **Deep Indigo** (`#0F1A54`) as a pseudo-element animation.
- **Golden Yellow** (`#FBC21D`): Secondary CTA button with **Deep Indigo** (`#0F1A54`) text. Hovers to white.
- **Accent Gold** (`#FFC947`): Nav hover state, megamenu item hover. Used sparingly as a highlight.
- **Dark Navy BG** (`#0D152E`): Sticky header revealed state, mobile menu trigger bars.

**The Skew Button Rule.** The red primary button uses a `::after` pseudo-element with `transform: skew(30deg)` that expands on hover. This decorative animation is the marketing tier's most distinctive interactive moment — do not replicate it in Admin or Auth tiers.

### Secondary (Admin)
- **Primary Blue** (`#537AEF`): Primary actions, links, focus rings, active states.
- **Purple** (`#8c57d1`): Secondary actions, alternative CTAs.
- **Emerald** (`#29aa85`): Success states, published badges, valid form inputs.
- **Sky Blue** (`#62B7E5`): Info states, informational badges.
- **Amber** (`#eb9d59`): Warning states, draft badges.
- **Rose** (`#ec8290`): Danger states, delete actions, invalid form inputs.
- **Slate Gray** (`#4a5a6b`): Body text, headings, borders, dark mode surfaces.

Admin colors follow Bootstrap's semantic system exactly. Light and dark modes are complete CSS custom property overrides.

### Tertiary (Auth/Breeze)
- **Near-Black** (`#1f2937`): Primary button background, dropdown triggers, focus ring offset.
- **White** (`#ffffff`): Secondary button background, input backgrounds, dropdown content.
- **Cool Gray 300** (`#d1d5db`): Borders, dividers, secondary button borders.
- **Cool Gray 700** (`#374151`): Body text, labels, active nav states.
- **Indigo 500** (`#6366f1`): Focus rings, focus borders, primary interactive accent.
- **Red 500** (`#ef4444`): Danger buttons, error text, invalid focus rings.

Auth colors are Tailwind v4 defaults mapped to Breeze component classes. Dark mode uses Tailwind's `dark:` variants with slate-900/slate-700 backgrounds and slate-300 text.

### Neutral (Cross-cutting)
- **White** (`#ffffff`): Universal surface background
- **Overlay** (`rgba(0,0,0,0.5)`): Mobile menu backdrop, modal backdrops
- **Focus Ring** (`#989ffd`): Marketing selection highlight
- **Border Subtle** (`rgba(29,36,58,0.12)`): Marketing header dividers, top contact separators

**The No-Shared-Tokens Rule.** No color value is shared across all three tiers. Marketing navy (`#142D6F`) ≠ Admin slate (`#4a5a6b`) ≠ Auth near-black (`#1f2937`). Marketing blue (`#A3BDFF`) ≠ Admin primary (`#537AEF`) ≠ Auth indigo (`#6366f1`). Do not assume visual consistency across tiers.

## Typography

Three independent font stacks, no shared scale.

### Marketing
- **Display/Headline Font Stack:** `"Afacad", "DM Sans", "Fira Sans", "Instrument Sans", "Inter", sans-serif` — five fallbacks deep. The template loads all five from Google Fonts. Afacad is variable (400–700, italic); DM Sans is the practical workhorse.
- **Body Font:** `"DM Sans", sans-serif` at 20px/1.3 line height. Notably large for body copy.
- **Nav Font:** `"DM Sans", sans-serif` at 17px/30px, weight 600, slight negative tracking (`-0.01em`).
- **Button Font:** `"DM Sans", sans-serif` at 16px, weight 700, uppercase, tight tracking (`-0.53px`).

**The Template Font Rule.** Five Google Fonts are loaded but only DM Sans is used consistently. Afacad appears in the `<link>` but nowhere in CSS. Do not add more fonts; consolidate to DM Sans if refactoring.

### Admin
- **UI Font:** `"Public Sans", sans-serif` (variable 100–900). Single font for everything — headings, body, UI, data tables.
- **Scale:** Bootstrap 5.3 fluid type scale (`calc(1.34375rem + 1.125vw)` for h1 down to 0.875rem for h6/body).
- **Code Font:** Standard monospace stack (SFMono, Menlo, Monaco, Consolas, Liberation Mono, Courier New).

### Auth/Breeze
- **UI Font:** `"Figtree", ui-sans-serif, system-ui, sans-serif` — loaded via Bunny Fonts in `welcome.blade.php` and `app.blade.php`.
- **Body:** 0.875rem / 1.5 line height.
- **Labels:** 0.875rem, weight 500.
- **Buttons:** 0.75rem, weight 600, uppercase, wide tracking (`0.1em`).

**The Micro-Typography Rule.** Auth buttons use aggressive tracking (`tracking-widest` / `0.1em`) and uppercase — a distinct voice from Marketing's tighter uppercase (`-0.53px`) and Admin's sentence-case defaults. Do not mix button typography styles across tiers.

## Layout

### Marketing
- **Container:** Bootstrap `.container` (max-width 1140px at xl, 1326px at xxl per custom override in `app.min.css`).
- **Grid:** Bootstrap 12-col, heavy use of `col-lg-7`/`col-lg-5` hero splits, `row`/`gx-3` gutters.
- **Spacing Rhythm:** Custom CSS variables for font sizes (`--fs-xl-20: 20px`, `--fs-lg-18: 18px`, etc.) but no systematic spacing scale — padding/margin values are scattered and context-specific (30px nav padding, 15px button padding, 50px section paddings via utility classes like `mt-50`).
- **Responsive Breakpoints:** Standard Bootstrap (576, 768, 992, 1200, 1400px) plus custom 1366px megamenu width adjustments.
- **Sticky Header:** Absolute → fixed on scroll with `transform: translateY(-100%)` hide/reveal animation (0.4s).
- **Mobile Menu:** Fixed 320px left drawer, `translateX(-100%)` → `translateX(0)` with overlay.

### Admin
- **Layout:** Fixed topbar (60px) + fixed left sidebar (260px default, collapsible) + content area with `margin-left: 260px` / `padding: 24px`.
- **Container:** Bootstrap `.container-xxl` (full-width with padding).
- **Sidebar:** Dark theme fixed, light theme optional. Collapses to icon-only (70px).
- **Content Density:** Comfortable — 1.5 line height, 0.6rem heading margins, 1.5rem card padding.

### Auth/Breeze
- **Layout:** Centered card (max-w-4xl on desktop, full-width mobile) with generous padding (p-6 / lg:p-20).
- **Container:** `max-w-7xl mx-auto px-4 sm:px-6 lg:px-8` for nav; content centered in flex column.
- **Spacing:** Tailwind's default scale (4px base). Consistent 1rem/1.5rem/2rem rhythms.

**The Three-Container Rule.** Each tier has its own container strategy: Marketing uses Bootstrap `.container` with custom xxl override; Admin uses `.container-xxl` full-width; Auth uses `max-w-7xl` centered. Do not share container classes across tiers.

## Elevation & Depth

### Marketing
- **Shadows:** Decorative and heavy. Submenu: `-2px 2px 70px -25px rgba(0,0,0,0.3)` (dramatic drop). Megamenu: `0 42px 54px rgba(0,0,0,0.09)` (broad, soft). Sticky header reveal: `0 12px 34px -11px rgba(65,62,101,0.1)` (tinted).
- **Layering:** Z-index tower — mobile menu 1099, overlay 1098, sticky header 1000/999, megamenu -99 (hidden) → 99 (visible). SVG decorative shapes use absolute positioning with negative margins.
- **Depth Signal:** Shadows are decorative, not structural. The skew button animation is the primary "lift" interaction.

**The Decorative Shadow Rule.** Marketing shadows use large blur radii, negative spreads, and color-tinted rgba values. They do not follow a systematic elevation scale. Do not use marketing shadows as a reference for Admin or Auth components.

### Admin
- **Shadows:** Bootstrap 5.3 standard three-tier: `sm` (0.125rem/0.5rem, 0.04 opacity), `default` (0.5rem/1rem, 0.15 opacity), `lg` (1rem/3rem, 0.175 opacity). Used structurally: cards at rest have no shadow; dropdowns/modals use `lg`; hover states may escalate.
- **Dark Mode:** Shadows become less relevant; tonal layering (bg-subtle/border-subtle) carries depth.
- **Focus Rings:** `0 0 0 0.25rem rgba(83,122,239,0.25)` — consistent indigo glow.

### Auth/Breeze
- **Shadows:** Minimal. Buttons: `shadow-sm` (0 1px 2px rgba(0,0,0,0.05)). Dropdowns: `shadow-lg` (0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05)). Cards: none at rest.
- **Focus Rings:** `0 0 0 2px #6366f1` (indigo) with `2px` offset in theme background color. Visible, accessible, consistent.
- **Depth Signal:** Tonal layering (white/gray-50/gray-100) + focus rings. No decorative shadows.

**The Flat-By-Default Rule.** Admin and Auth tiers default to flat surfaces. Shadows appear only on interactive overlays (dropdowns, modals, tooltips) or explicit hover states. Marketing is the exception — shadows are decorative and pervasive.

## Shapes

### Marketing
- **Buttons:** 6px radius (`.btn`), 3px for skew variants (`.log-in-btn`).
- **Submenus:** 6px radius.
- **Megamenus:** 8px radius.
- **Cards/Containers:** Mixed — some use Bootstrap's 0.325rem (5.2px), others custom.
- **Inputs:** Not standardized in marketing tier (delegated to Bootstrap/form plugins).
- **Borders:** 1px solid, color varies (`rgba(29,36,58,0.12)` for dividers, `#dee2e6` for tables).

### Admin
- **Systematic Scale:** Bootstrap's 5-step: `sm` (4px), `default` (5.2px), `lg` (8px), `xl` (16px), `xxl` (32px), `pill` (50rem).
- **Buttons/Inputs/Cards:** `default` (0.325rem / 5.2px).
- **Badges/Pills:** `pill` (50rem).
- **Modals/Dropdowns:** `lg` (0.5rem / 8px).
- **Borders:** 1px solid `#dee2e6` (light) / `#495057` (dark).

### Auth/Breeze
- **Buttons/Inputs/Dropdowns:** `rounded-md` (0.375rem / 6px).
- **Consistent:** All interactive elements share the same 6px radius.
- **No pill/rounded-full** used in default Breeze components.

**The Radius Fragmentation Rule.** Three tiers, three radius scales. Marketing: 3px/6px/8px ad-hoc. Admin: 5-step systematic. Auth: single 6px. Do not assume a shared radius token exists.

## Components

Documented per-tier. Components do not share APIs or visual language.

### Marketing Tier
- **Primary Button (`.log-in-btn`):** Red background, white text, 3px radius, 10px padding, skew-transform hover animation (30deg pseudo-element expansion). Distinctive, template-specific.
- **Yellow Button (`.yellow-btn`):** Yellow background, dark indigo text, 3px radius, hovers to white.
- **Default Button (`.lonyo-default-btn`):** Transparent, navy border/text, 6px radius, 15px padding, fills navy on hover.
- **Nav Link:** 30px vertical padding, 15px horizontal, 600 weight, navy color, gold hover.
- **Submenu:** White, heavy drop shadow, 6px radius, 12px vertical padding, 240px min-width, 0.4s transition.
- **Megamenu:** White, broad shadow, 8px radius, 1px border, 30px padding, 925px+ min-width, centered.
- **Mobile Menu:** 320px fixed drawer, slide-in from left, 50px header with back/close controls, nested submenus as full-screen panels.
- **Sticky Header:** Absolute → fixed on scroll, translateY hide/reveal, dark background on reveal, logo swap (light/dark versions).
- **Hero Slider:** Background image + content overlay + decorative SVG shapes, AOS fade animations.
- **Section Decoratives:** Absolute-positioned SVG shapes (`shape1.svg`, `shape2.svg`, `shape3.svg`) with `mix-blend-mode` and `hard-light` overlays.

### Admin Tier
- **Buttons:** Full Bootstrap 5.3 variant set (primary, secondary, success, info, warning, danger, light, dark, link + outline variants + sizes). 5.2px radius, 0.875rem text, 500 weight.
- **Cards:** White background, 1px border, 5.2px radius, no shadow at rest, 1.5rem padding. Header/footer variants.
- **Tables:** DataTables.net with Bootstrap 5 styling. Bordered, responsive, hoverable rows, pagination.
- **Badges:** Pill radius, semantic colors (success, warning, danger, primary, etc.), 0.75rem text.
- **Forms:** Floating labels (optional), validation states with semantic border/focus-ring colors, select2/niceSelect enhancements.
- **Dropdowns:** Bootstrap dropdown component, 8px radius, `lg` shadow, dark mode aware.
- **Modals:** Standard Bootstrap modal, centered, scrollable, backdrop overlay.
- **Sidebar:** Fixed, collapsible (260px → 70px), dark theme default, nested accordion navigation with feather icons.
- **Topbar:** 60px fixed, search, notifications, user dropdown, sidebar toggle.
- **DataTables:** Full CRUD tables with search, pagination, sorting, column visibility, export buttons.
- **Toasts:** Toastr.js, top-right, semantic colors.

### Auth/Breeze Tier
- **Primary Button:** Near-black, white text, 6px radius, 0.5rem/1rem padding, 0.75rem uppercase tracking-wide, indigo focus ring with offset.
- **Secondary Button:** White, gray-700 text, gray-300 border, 6px radius, shadow-sm, indigo focus ring.
- **Danger Button:** Red-600, white text, 6px radius, red focus ring.
- **Input:** White/gray-900 (dark), gray-300/gray-700 border, 6px radius, indigo focus border + ring.
- **Label:** Block, 0.875rem, 500 weight, gray-700/gray-300 (dark).
- **Error:** Red-600/red-400 (dark), 0.875rem, list format.
- **Nav:** White/gray-800 (dark), gray-100/gray-700 border, 60px height, logo + links + dropdown.
- **Dropdown Trigger:** Button-styled, chevron icon, indigo focus ring.
- **Dropdown Content:** White/gray-800, gray-200/gray-700 border, 6px radius, `lg` shadow, min-width 12rem.
- **Responsive Nav:** Mobile drawer (Alpine.js), slide-down, user profile header, same link/dropdown patterns.

## Do's and Don'ts

### Do:
- **Do** respect tier boundaries — Marketing components stay in Marketing views, Admin in Admin, Auth in Auth.
- **Do** use each tier's native semantic colors: Admin's `btn-primary`/`text-success`/etc., Auth's `bg-gray-800`/`text-red-600`/etc., Marketing's custom classes (`.lonyo-default-btn`, `.log-in-btn`).
- **Do** preserve Admin's complete Bootstrap 5.3 dark mode — it is the only tier with a fully implemented, token-driven dark theme.
- **Do** preserve Auth's focus-ring accessibility — indigo rings with offsets are the project's best a11y pattern.
- **Do** use Admin's systematic radius scale (0.25rem–2rem) for any new Admin components.
- **Do** use Auth's single 6px radius for any new Auth components.
- **Do** load Google Fonts only once — currently Marketing loads 5 fonts, Admin loads Public Sans, Auth loads Figtree. Consolidate if unifying.

### Don't:
- **Don't** copy Marketing's skew-button animation into Admin or Auth — it is template-specific decor, not a system pattern.
- **Don't** assume Marketing's navy (`#142D6F`) equals Admin's slate (`#4a5a6b`) or Auth's near-black (`#1f2937`). They are different hues with different roles.
- **Don't** use Marketing's decorative shadows (70px blur, negative spread, tinted rgba) for structural elevation in Admin/Auth.
- **Don't** mix button typography: Marketing uses 16px/700/-0.53px/uppercase; Admin uses 0.875rem/500/sentence-case; Auth uses 0.75rem/600/0.1em/uppercase.
- **Don't** add new fonts — the project already loads 7 font families across tiers (Afacad, DM Sans, Fira Sans, Instrument Sans, Inter, Public Sans, Figtree).
- **Don't** create cross-tier components — a "unified button" does not exist and would require choosing one tier's language as canonical.
- **Don't** assume container/grid parity — Marketing uses Bootstrap `.container`, Admin uses `.container-xxl`, Auth uses `max-w-7xl`.
- **Don't** fabricate design tokens — no token file exists. Any unification effort must start by extracting and choosing, not inventing.