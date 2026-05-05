# Design Doc: RADIANT INTEL - The Complete Dossier Content Expansion

**Date:** 2026-05-05
**Topic:** Implementing high-fidelity, bespoke pages for all 29 Valorant Agents and 7 Competitive Maps.

## 1. Problem Statement
The "Meta Hub" requires a massive expansion of content to be production-ready. Specifically, it needs detailed, visually stunning dossiers for every agent and map in the current 2026 rotation, including video previews of abilities.

## 2. Proposed Solution
Build a "Tactical Component Library" in Blade to enable the creation of 36+ high-fidelity static pages. Each page will be a bespoke Blade view that utilizes these components to maintain design consistency while allowing for agent-specific visual flair.

## 3. Architecture & Components

### A. Tactical Component Library
We will build reusable components to handle the heavy lifting of the high-fidelity layouts:
- **`<x-dossier.hero>`**: Full-bleed hero section with agent/map splash art, role/category labels, and primary stats.
- **`<x-dossier.ability-grid>`**: A responsive grid container for agent abilities.
- **`<x-dossier.ability-card>`**: Individual ability cards with:
    - Keybind (Q, E, C, X)
    - Ability Name
    - Video Preview (Muted, looping background video via external URL)
    - Description
- **`<x-dossier.map-intel>`**: Section for map callouts and strategic overviews.
- **`<x-dossier.minimap>`**: High-fidelity minimap viewer component.

### B. Information Architecture (36+ Pages)
- **Agents (29 total)**: 
    - Categorized by Class: Duelist, Initiator, Controller, Sentinel.
    - Includes newest agents: Waylay (Duelist), Tejo (Initiator), Miks (Controller), Veto (Sentinel).
- **Maps (7 total)**:
    - Current Rotation: Ascent, Breeze, Fracture, Haven, Lotus, Pearl, Split.

### C. Media Strategy
- **Source**: Utilizing external high-quality URLs from official Valorant/Riot CDNs for images and video previews.
- **Videos**: Ability previews will be implemented as muted, auto-playing, looping HTML5 videos for maximum visual impact.

## 4. Implementation Strategy
1.  **Component Core**: Build the `x-dossier` component namespace and styles in `app.css`.
2.  **Routing**: Update `routes/web.php` to define static routes for all 36+ pages.
3.  **Bespoke Views**: Create 29 agent views in `resources/views/agents/` and 7 map views in `resources/views/maps/`.
4.  **Navigation Integration**: Update the hover dropdowns in the Tactical Bar to link to all new pages.

## 5. Verification Plan
- **Performance**: Verify that 36+ external video assets load efficiently without breaking the UI.
- **Visuals**: Check that every agent class has the correct styling and ability data.
- **Navigation**: Test every link in the dropdowns to ensure all 36 routes are active.
