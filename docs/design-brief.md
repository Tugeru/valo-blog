

# **Design Brief: "Radiant Intel"**
**Project:** Valorant-Themed Blog Platform
**Frontend Stack:** Laravel Blade, Tailwind CSS v4
**Design Goal:** Create a high-performance, visually striking interface that feels like a native extension of the Valorant game client.

---

## **1. Core Visual Identity & "Vibe"**
The aesthetic is **Tactical, Sharp, and High-Contrast**. It draws heavily from brutalist UI trends combined with clean, modern esports layouts. The design should feel energetic and precise. 

*   **Keywords:** Sharp, Angular, Dark Mode, High-Energy, Minimalist.
*   **Shape Language:** Hard edges. We will completely avoid rounded corners (`rounded-none`). Elements will feature stark borders and occasional deliberate asymmetry.

---

## **2. Color Palette**
Tailwind v4 makes it easy to implement these as native CSS variables or custom utility classes in your main CSS file. 

| Role | Color Name | Hex Code | Usage | Tailwind Suggestion (v4 Custom) |
| :--- | :--- | :--- | :--- | :--- |
| **Primary Action** | Valorant Red | `#FF4655` | Primary buttons, active states, hover borders, alerts. | `bg-val-red`, `text-val-red` |
| **Background (Base)** | Dark Navy | `#0F1923` | Main site background, Admin dashboard background. | `bg-val-navy` |
| **Surface/Card** | Slate Grey | `#1F2326` | Post cards, form backgrounds, sidebar backgrounds. | `bg-val-slate` |
| **Primary Text** | Off-White | `#ECE8E1` | Headings, main body text. Ensures high contrast. | `text-val-white` |
| **Secondary Text** | Tactical Grey | `#8B978F` | Excerpts, dates, placeholder text, inactive tabs. | `text-val-grey` |

---

## **3. Typography**
To mimic the in-game UI, we will use two primary typefaces (available via Google Fonts):

*   **Headings (Primary): `Bebas Neue` or `Teko`**
    *   *Usage:* Post Titles, Navigation Links, Admin Dashboard Headers, Button Text.
    *   *Styling:* Always uppercase, tight letter spacing (`tracking-tighter`), large sizes (`text-4xl` and above).
*   **Body (Secondary): `Inter` or `Rajdhani`**
    *   *Usage:* Article content, excerpts, form inputs, meta-data (dates).
    *   *Styling:* Clean, highly legible, regular weight for paragraphs (`font-normal`), slightly relaxed line height (`leading-relaxed`) for long-form reading.

---

## **4. UI Components & Interaction Guidelines**

### **4.1. Buttons**
*   **Primary Button (e.g., "Read More", "Login", "Publish"):** 
    *   Solid `bg-val-red` with `text-val-white`.
    *   Uppercase text, `Bebas Neue` font.
    *   **Hover State:** Invert the colors (background becomes dark, border becomes red) OR add a slight upward translation (`hover:-translate-y-1 hover:shadow-lg hover:shadow-val-red/50`).
*   **Secondary/Ghost Button (e.g., "Cancel", "Back"):**
    *   Transparent background, 1px solid `border-val-grey`, `text-val-white`.
    *   **Hover State:** Border turns `border-val-red`, text turns `text-val-red`.

### **4.2. Post Cards (Homepage Grid)**
*   **Layout:** Vertical stack (Image top, content bottom).
*   **Container:** `bg-val-slate`, no rounded corners.
*   **Image:** 16:9 aspect ratio, object-cover. Black-and-white or desaturated by default (`grayscale`).
*   **Hover Effect (Crucial):** 
    *   The image loses the grayscale filter (`hover:grayscale-0`).
    *   The left or bottom edge of the card gains a thick, solid red border (`border-b-4 border-val-red`).
    *   The card shifts up slightly for a tactile feel.

### **4.3. Forms (Admin Dashboard)**
*   **Inputs & Textareas:** 
    *   Background: Darker than the surface (`bg-black/20`).
    *   Border: Bottom border only (`border-b-2 border-val-grey`). No borders on top/sides.
    *   **Focus State:** The bottom border sharply transitions to `border-val-red`. No default browser outlines (`focus:outline-none`).
    *   Labels: Uppercase, small, `text-val-grey`.

### **4.4. Navigation Bar**
*   **Style:** Sticky top (`sticky top-0 z-50`), semi-transparent backdrop blur (`bg-val-navy/90 backdrop-blur-md`).
*   **Logo:** Left-aligned. Text-based "RADIANT INTEL" using `Bebas Neue` in `text-val-red`.
*   **Links:** Right-aligned. Hovering over a link should trigger a red underline or a small red square appearing next to the text.

---

## **5. Layout & Spacing Strategy**
*   **Grid System:** Utilize Tailwind's standard 12-column grid system (`grid-cols-1 md:grid-cols-2 lg:grid-cols-3` for the post feed).
*   **Container:** Constrain maximum width for readability on large monitors (`max-w-7xl mx-auto`).
*   **Whitespace:** Use generous padding (`p-8`, `py-12`) around major sections to let the heavy typography breathe, avoiding a cluttered look. 

## **6. Imagery & Assets**
*   **Hero Images:** Images uploaded by the Admin should ideally be high-contrast, action-oriented game screenshots or official key art.
*   **UI Icons:** Minimalist, sharp-edged icons. Use a library like *Lucide* or *Heroicons* (Solid), but avoid rounded, friendly-looking icon sets.