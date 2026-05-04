# Design Spec: Radiant Intel (Valorant-Themed CMS)

**Topic:** Full-stack CMS for Valorant content
**Date:** 2026-05-04
**Status:** Approved
**Approach:** 2 (Blade + Alpine.js)

---

## 1. Executive Summary
Radiant Intel is a bespoke CMS built with Laravel 12 and Tailwind CSS v4, designed to mimic the high-contrast, tactical aesthetic of the Valorant game client. It features a secure administrative backend for content management and a performant, visually striking public frontend.

## 2. Technical Stack
* **Backend:** Laravel 12 (PHP 8.2+)
* **Database:** SQLite
* **Frontend:** Laravel Blade, Tailwind CSS v4
* **Interactivity:** Alpine.js (for tactical UI micro-interactions)
* **Assets:** Vite
* **Storage:** Laravel Local Disk (linked to `public/storage`)

## 3. Architecture & Data Model

### 3.1. Database Schema
* **users:** `id`, `name`, `email`, `password`, `remember_token`, `timestamps`
* **posts:** `id`, `title`, `excerpt`, `content` (LongText), `image_path`, `timestamps`

### 3.2. Authentication
* **Method:** Bespoke `AuthController` and `LoginController`.
* **Flow:** Session-based authentication using Laravel's native guards.
* **Seeded User:** `admin@radiant-intel.com` / `password`.
* **Security:** No public registration; all admin routes protected by `auth` middleware.

## 4. UI/UX Design (Valorant Aesthetic)

### 4.1. Visual Language
* **Colors:** Valorant Red (`#FF4655`), Dark Navy (`#0F1923`), Slate Grey (`#1F2326`), Off-White (`#ECE8E1`).
* **Typography:** `Bebas Neue` (Headings), `Inter` (Body).
* **Shapes:** Hard edges only (`rounded-none`). High-contrast borders.

### 4.2. Key Components
* **Layouts:**
    * `guest.blade.php`: Public-facing, sticky header, responsive grid.
    * `admin.blade.php`: Sidebar-driven, optimized for CRUD tasks.
* **Blade Components:**
    * `x-val-button`: Styled with `bg-val-red` and tactical hover translations.
    * `x-post-card`: Vertical card with grayscale-to-color image transitions.
    * `x-form-input`: Minimalist bottom-border style with red focus states.

## 5. Tactical Features (Alpine.js)
* **Instant Image Preview:** Real-time preview of uploaded hero images in the Admin form.
* **Custom Delete Modal:** A slide-in tactical confirmation dialog replacing native browser prompts.
* **Interactive Hover States:** Tactile feedback on cards and buttons (shifts, shadow glows).

## 6. Implementation Strategy

### 6.1. Phase 1: Foundation
* Initialize SQLite database and migrations.
* Configure Tailwind 4 `@theme` and typography.
* Implement Bespoke Authentication.

### 6.2. Phase 2: Admin Dashboard
* Build Post CRUD with image upload handling.
* Integrate Alpine.js for previews and modals.
* Implement validation logic with tactical error styling.

### 6.3. Phase 3: Public Frontend
* Develop Homepage grid with responsive layouts.
* Build Article Detail view.
* Finalize "Valorant Client" polish (animations, transitions).

## 7. Testing & Validation
* **Feature Tests:**
    * `AuthTest`: Verify login/logout and middleware protection.
    * `PostCrudTest`: Verify Create/Read/Update/Delete including file uploads.
    * `PublicViewTest`: Verify homepage listing and article detail rendering.
* **Manual Verification:** Visual check of "Dark Mode" contrast and responsive breakpoints.

## 8. Out of Scope
* User registration or password resets.
* Rich-text (WYSIWYG) editors.
* Post categories or tagging.
* Comment sections.
