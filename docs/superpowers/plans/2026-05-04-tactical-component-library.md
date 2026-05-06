# Tactical Component Library Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Implement a library of high-fidelity Blade components for Valorant agent and map dossiers.

**Architecture:** Create modular, reusable Blade components in `resources/views/components/dossier/`. Use Tailwind CSS for styling, adhering to the established design system (colors: `val-red`, `val-navy`, etc.).

**Tech Stack:** Laravel Blade, Tailwind CSS v4.

---

### Task 1: Create Dossier Hero component

**Files:**
- Create: `resources/views/components/dossier/hero.blade.php`

- [ ] **Step 1: Implement Hero component**

```blade
@props(['name', 'role', 'biography', 'image'])
<header class="relative h-[70vh] flex items-end overflow-hidden border-b-2 border-val-red">
    <img src="{{ $image }}" alt="{{ $name }}" class="absolute inset-0 w-full h-full object-cover grayscale brightness-50">
    <div class="absolute inset-0 bg-gradient-to-t from-val-navy to-transparent"></div>
    <div class="max-w-7xl mx-auto px-6 pb-12 relative z-10 w-full">
        <span class="text-val-red font-bold uppercase tracking-[0.5em] text-xs mb-4 block">{{ $role }}</span>
        <h1 class="text-9xl mb-4">{{ $name }}</h1>
        <p class="max-w-2xl text-val-grey uppercase tracking-widest text-sm leading-relaxed">{{ $biography }}</p>
    </div>
</header>
```

- [ ] **Step 2: Verify file existence**

Run: `ls resources/views/components/dossier/hero.blade.php`
Expected: File exists.

---

### Task 2: Create Ability Card component with video support

**Files:**
- Create: `resources/views/components/dossier/ability-card.blade.php`

- [ ] **Step 1: Implement Ability Card component**

```blade
@props(['key', 'name', 'description', 'video'])
<div class="bg-val-slate/50 border-l-2 border-val-red p-8 group hover:bg-val-slate transition-all relative overflow-hidden">
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-10 group-hover:opacity-20 transition-opacity">
        <source src="{{ $video }}" type="video/mp4">
    </video>
    <div class="relative z-10">
        <div class="flex items-center space-x-4 mb-6">
            <span class="text-val-red font-bebas text-4xl group-hover:scale-110 transition-all">{{ $key }}</span>
            <h3 class="text-3xl">{{ $name }}</h3>
        </div>
        <p class="text-val-grey text-sm leading-relaxed">{{ $description }}</p>
    </div>
</div>
```

- [ ] **Step 2: Verify file existence**

Run: `ls resources/views/components/dossier/ability-card.blade.php`
Expected: File exists.

---

### Task 3: Create Ability Grid component

**Files:**
- Create: `resources/views/components/dossier/ability-grid.blade.php`

- [ ] **Step 1: Implement Ability Grid component**

```blade
<div class="max-w-7xl mx-auto px-6 py-24">
    <div class="flex items-end justify-between mb-16">
        <div>
            <h2 class="text-6xl mb-2">TACTICAL <span class="text-val-red">ABILITIES</span></h2>
            <p class="text-val-grey uppercase tracking-widest text-sm font-bold">Field-tested radiant utility</p>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        {{ $slot }}
    </div>
</div>
```

- [ ] **Step 2: Verify file existence**

Run: `ls resources/views/components/dossier/ability-grid.blade.php`
Expected: File exists.

---

### Task 4: Create Map Intel component

**Files:**
- Create: `resources/views/components/dossier/map-intel.blade.php`

- [ ] **Step 1: Implement Map Intel component**

```blade
@props(['name', 'status', 'description', 'minimap'])
<div class="max-w-7xl mx-auto px-6 py-24 grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
    <div>
        <span class="text-val-red font-bold uppercase tracking-[0.5em] text-xs mb-4 block">{{ $status }}</span>
        <h2 class="text-8xl mb-6">{{ $name }}</h2>
        <p class="text-val-grey text-lg mb-10 leading-relaxed">{{ $description }}</p>
    </div>
    <div class="relative">
        <div class="absolute -inset-4 border border-val-red/20 rotate-3 pointer-events-none"></div>
        <img src="{{ $minimap }}" alt="{{ $name }} Minimap" class="w-full h-auto grayscale hover:grayscale-0 transition-all duration-700 shadow-2xl">
    </div>
</div>
```

- [ ] **Step 2: Verify file existence**

Run: `ls resources/views/components/dossier/map-intel.blade.php`
Expected: File exists.

---

### Task 5: Build Styles and Verify

**Files:**
- Modify: `resources/css/app.css` (if needed, but current instructions don't specify changes, just "Modify" in the description)

- [ ] **Step 1: Run build command**

Run: `npm run build`
Expected: Build finishes without errors.

- [ ] **Step 2: Commit changes**

Run: `git add . && git commit -m "feat: add tactical component library for agent dossiers"`
