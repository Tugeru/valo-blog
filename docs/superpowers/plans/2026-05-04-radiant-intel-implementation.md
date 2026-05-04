# Radiant Intel Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Build a bespoke, Valorant-themed CMS with Laravel 12, Tailwind 4, and Alpine.js.

**Architecture:** Laravel MVC with Blade templates. Bespoke session-based authentication. Image storage via local `public` disk.

**Tech Stack:** Laravel 12, SQLite, Tailwind CSS v4, Alpine.js.

---

### Task 1: Environment & Database Setup

**Files:**
- Modify: `.env`
- Create: `database/database.sqlite` (if not exists)
- Create: `database/migrations/2026_05_04_000000_create_posts_table.php`

- [ ] **Step 1: Configure .env for SQLite**
```env
DB_CONNECTION=sqlite
# Remove other DB_* variables
```

- [ ] **Step 2: Create the posts migration**
```php
public function up(): void
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('excerpt');
        $table->longText('content');
        $table->string('image_path');
        $table->timestamps();
    });
}
```

- [ ] **Step 3: Run migrations**
Run: `php artisan migrate`

- [ ] **Step 4: Seed the admin user**
Modify `database/seeders/DatabaseSeeder.php`:
```php
User::factory()->create([
    'name' => 'Admin',
    'email' => 'admin@radiant-intel.com',
    'password' => Hash::make('password'),
]);
```
Run: `php artisan db:seed`

---

### Task 2: Styling Foundation (Tailwind 4)

**Files:**
- Modify: `resources/css/app.css`

- [ ] **Step 1: Configure Tailwind @theme**
```css
@import "tailwindcss";

@theme {
    --color-val-red: #FF4655;
    --color-val-navy: #0F1923;
    --color-val-slate: #1F2326;
    --color-val-white: #ECE8E1;
    --color-val-grey: #8B978F;
    
    --font-bebas: "Bebas Neue", sans-serif;
    --font-inter: "Inter", sans-serif;
}

@layer base {
    body {
        @apply bg-val-navy text-val-white font-inter antialiased;
    }
    h1, h2, h3, h4, h5, h6 {
        @apply font-bebas uppercase tracking-tighter;
    }
}
```

---

### Task 3: Bespoke Authentication

**Files:**
- Create: `app/Http/Controllers/AuthController.php`
- Create: `resources/views/auth/login.blade.php`
- Modify: `routes/web.php`

- [ ] **Step 1: Create AuthController**
Implement `showLoginForm`, `login`, and `logout` methods.

- [ ] **Step 2: Create Login View**
Use `Bebas Neue` for the "ADMIN ACCESS" heading and tactical `border-b-2` inputs.

- [ ] **Step 3: Define Routes**
```php
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
```

---

### Task 4: Admin Dashboard & Post CRUD

**Files:**
- Create: `app/Http/Controllers/AdminController.php`
- Create: `resources/views/layouts/admin.blade.php`
- Create: `resources/views/admin/dashboard.blade.php`
- Create: `resources/views/admin/posts/create.blade.php`

- [ ] **Step 1: Implement AdminController CRUD**
Methods: `index`, `create`, `store`, `edit`, `update`, `destroy`.

- [ ] **Step 2: Implement Image Upload**
```php
$path = $request->file('image')->store('posts', 'public');
```

- [ ] **Step 3: Create Post Form with Alpine.js Preview**
```html
<div x-data="{ photoName: null, photoPreview: null }">
    <input type="file" @change="
        photoName = $event.target.files[0].name;
        const reader = new FileReader();
        reader.onload = (e) => { photoPreview = e.target.result; };
        reader.readAsDataURL($event.target.files[0]);
    ">
    <template x-if="photoPreview">
        <img :src="photoPreview" class="w-full aspect-video object-cover">
    </template>
</div>
```

---

### Task 5: Public Frontend

**Files:**
- Create: `app/Http/Controllers/PublicController.php`
- Create: `resources/views/layouts/guest.blade.php`
- Create: `resources/views/welcome.blade.php`
- Create: `resources/views/posts/show.blade.php`

- [ ] **Step 1: Implement PublicController**
Fetch posts ordered by `created_at` DESC.

- [ ] **Step 2: Build Homepage Grid**
Responsive grid with grayscale-to-color cards.

- [ ] **Step 3: Build Article Detail Page**
Prominent hero image and formatted text.

---

### Task 6: Final Polish & Verification

- [ ] **Step 1: Run Storage Link**
Run: `php artisan storage:link`

- [ ] **Step 2: Final UI Check**
Verify all borders are `rounded-none` and fonts are correct.

- [ ] **Step 3: Run Feature Tests**
Create `tests/Feature/PostManagementTest.php` and verify CRUD functionality.
