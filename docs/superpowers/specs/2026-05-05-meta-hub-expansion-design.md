# Design Doc: RADIANT INTEL - The Meta Hub Expansion

**Date:** 2026-05-05
**Topic:** Expanding the valo-blog into a production-ready, high-fidelity "Meta Hub" for Valorant enthusiasts.

## 1. Problem Statement
The current application is a simple blog. To reach "Production Ready" status as a premier news hub, it needs a more complex information architecture, a high-impact landing page, and dedicated sections for Agents, Maps, and tactical Guides that go beyond standard blog posts.

## 2. Proposed Solution
Transform the site into a "Meta Hub" ecosystem. This involves a custom-sectioned landing page, a JSON-driven live meta dashboard, and a hybrid architecture of high-fidelity static pages (Dossiers) and dynamic categorized content (Intel).

## 3. Architecture & Components

### A. Information Architecture (Site Map)
- **Home (`/`)**: High-impact landing page with Hero, CTAs, and Meta highlights.
- **News/Intel (`/news`)**: The existing dynamic blog feed (formerly Home).
- **Agent Dossiers (`/agents/{name}`)**: Static, high-fidelity pages for specific agents.
- **Map Intel (`/maps/{name}`)**: Static, high-fidelity pages for specific maps.
- **Tactical Guides (`/guides`)**: Filtered blog view for "Tips & Tricks" and "Mechanics".
- **Patch Notes (`/patches`)**: Filtered blog view for archival patch history.

### B. Navigation System (Tactical Bar)
- **Top Navigation**: Sticky header with hover dropdowns.
- **Hover Dropdowns**:
    - **AGENTS**: Visual grid/list of agent names.
    - **MAPS**: List of maps currently in rotation.
- **Live Meta Ticker**: A sub-header bar pulling data from `meta-stats.json`.

### C. Data & State Management
- **`meta-stats.json`**: A local JSON file used as a lightweight "Live API" to drive win-rates, trending agents, and current patch status.
- **Blade Components**: Reusable components for:
    - Agent Ability Grids
    - Map Callout Lists
    - Tactical CTA Banners

### D. Design System (Visual Style)
- **Theme**: Adhering to the "Tactical Asymmetry" selection.
- **Colors**: `val-red` (#FF4655), `val-navy` (#0F1923), `val-slate` (#1F2326).
- **Typography**: `Bebas Neue` for headers, `Inter` for body.
- **Elements**: Diagonal lines, "glitch" aesthetic overlaps, and high-contrast grids.

## 4. Implementation Strategy
1.  **Refactor Layout**: Update `guest.blade.php` with the new Tactical Bar and Hover Dropdowns.
2.  **Meta Logic**: Implement a Service to read `meta-stats.json` and share data with all views.
3.  **Landing Page**: Build the multi-section `welcome.blade.php` (Hero, Meta Ticker, Featured Intel, Map Spotlight).
4.  **Dossier Templates**: Create the structure for the first high-fidelity Agent (Jett/Omen) and Map (Ascent) pages.
5.  **Intel Organization**: Update routing to support `/news`, `/guides`, and `/patches`.

## 5. Verification Plan
- **UI/UX**: Verify hover dropdowns work smoothly on desktop and collapse on mobile.
- **Data Flow**: Update `meta-stats.json` and confirm changes reflect across the site.
- **Navigation**: Ensure all new routes (`/news`, `/agents/*`, etc.) resolve correctly.
