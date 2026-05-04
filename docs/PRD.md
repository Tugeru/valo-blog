

# **Product Requirements Document (PRD)**
**Project Name:** "Radiant Intel" (Valorant-Themed CMS Blog)
**Document Version:** 1.0
**Date:** May 4, 2026
**Tech Stack:** Laravel 12, MySQL, Tailwind CSS v4

---

## **1. Executive Summary**
The objective of this project is to build a bespoke, full-stack Content Management System (CMS) tailored for Valorant-related content (patch notes, meta guides, esports news). The application will feature a robust, secure administrative backend for content creation and a highly stylized, performant public frontend for readers.

## **2. Target Audience & User Roles**
The system accommodates two strict user roles:
*   **The Administrator (Content Creator):** Has full CRUD (Create, Read, Update, Delete) access to the blog's content. They require a streamlined, bug-free interface to publish articles quickly.
*   **The Public Viewer (Reader):** Gamers and fans looking for content. They require a fast-loading, visually engaging interface that requires zero friction (no login/registration) to consume content.

## **3. User Stories**

### **Admin Epics**
*   **Authentication:** As an Admin, I want to log in using a secure email and password so that unauthorized users cannot access the dashboard.
*   **Content Management:**
    *   As an Admin, I want to view a table of all existing posts so I can quickly see what is currently published.
    *   As an Admin, I want to create a new post with a featured image, title, excerpt, and full text body so I can publish new updates.
    *   As an Admin, I want to edit an existing post's text and image so I can correct mistakes or update outdated meta information.
    *   As an Admin, I want to permanently delete a post so I can remove irrelevant content.
    *   As an Admin, I want a confirmation prompt before deleting a post so I don't accidentally erase my work.

### **Public Viewer Epics**
*   **Content Discovery:** As a Reader, I want to see a grid of all published posts on the homepage so I can browse the latest news.
*   **Content Consumption:** As a Reader, I want to click on a post card and be taken to a dedicated page containing the full article and full-size image so I can read the details.
*   **Navigation:** As a Reader, I want a persistent navigation bar so I can easily return to the homepage from any article.

---

## **4. Functional Requirements**

### **4.1. Public Application (Frontend)**
| Feature | Requirements |
| :--- | :--- |
| **Global Navigation** | Sticky header. Contains Site Logo/Name linking to `/` and a discrete "Admin" link routing to `/login`. |
| **Homepage (`/`)** | Fetches all posts from the database, ordered by `created_at` (newest first). Displays posts as responsive cards (1 column mobile, 2 columns tablet, 3-4 columns desktop). Cards must display: Image, Title, Excerpt. |
| **Article Page (`/post/{id}`)** | Fetches a single post by ID. Displays the hero image prominently, followed by the Title and formatted `content`. Includes a clear "Back to Posts" action. |

### **4.2. Administrative Application (Backend)**
| Feature | Requirements |
| :--- | :--- |
| **Authentication** | Static Laravel Auth. One seeded user. Routes protected by `auth` middleware. Failed logins must return standard validation errors. |
| **Dashboard (`/admin/dashboard`)** | Data table displaying all posts. Columns: ID, Thumbnail, Title, Date, Actions (Edit/Delete). |
| **Create Form (`/admin/posts/create`)**| Inputs: `title` (text, max 255), `excerpt` (textarea, max 500), `content` (textarea, no limit), `image` (file upload). All fields required. |
| **Edit Form (`/admin/posts/{id}/edit`)**| Pre-populated form. Image upload is optional during edit (if left blank, retain the existing image). |
| **Delete Action** | Form submission (DELETE method) triggered by a button. Must invoke a JavaScript `confirm()` modal before sending the request. |
| **Image Handling** | Uploaded images must be stored via Laravel's local storage driver in the `public` directory. File paths are saved to the database. |

---

## **5. Technical Specifications**

### **5.1. Database Schema**

**Table: `users`**
*   `id` (Primary Key, BigInt, Auto Increment)
*   `name` (Varchar 255)
*   `email` (Varchar 255, Unique)
*   `password` (Varchar 255, Hashed)
*   `remember_token` (Varchar 100, Nullable)
*   `timestamps` (created_at, updated_at)

**Table: `posts`**
*   `id` (Primary Key, BigInt, Auto Increment)
*   `title` (Varchar 255)
*   `excerpt` (Text)
*   `content` (LongText)
*   `image_path` (Varchar 255) - *Stores the relative path (e.g., `uploads/images/hero.jpg`)*
*   `timestamps` (created_at, updated_at)

### **5.2. Routing Architecture (Laravel Web Routes)**
*   `GET /` → `PublicController@index`
*   `GET /post/{id}` → `PublicController@show`
*   `GET /login` → `AuthController@showLoginForm`
*   `POST /login` → `AuthController@login`
*   `POST /logout` → `AuthController@logout`

**Protected Routes (Middleware: `auth`)**
*   `GET /admin/dashboard` → `AdminController@index`
*   `GET /admin/posts/create` → `AdminController@create`
*   `POST /admin/posts` → `AdminController@store`
*   `GET /admin/posts/{id}/edit` → `AdminController@edit`
*   `PUT/PATCH /admin/posts/{id}` → `AdminController@update`
*   `DELETE /admin/posts/{id}` → `AdminController@destroy`

---

## **6. Non-Functional Requirements**
*   **Security:** 
    *   All forms must include `@csrf` directives to prevent Cross-Site Request Forgery.
    *   No public registration endpoint can exist in the codebase.
    *   Passwords must be securely hashed using Laravel's default Bcrypt/Argon2 implementation.
*   **Performance:** 
    *   Images should ideally be validated to prevent massive file uploads (e.g., max 2048 kilobytes via Laravel validation rules: `mimes:jpeg,png,jpg,webp|max:2048`).
*   **Styling Consistency:** 
    *   All views must heavily utilize Tailwind CSS v4.
    *   Custom configuration variables must be set up for Valorant Red (`#FF4655`), Dark Navy (`#0F1923`), and Off-White (`#ECE8E1`).

## **7. Out of Scope**
The following features are explicitly excluded from this iteration to maintain project focus:
*   User Registration / Sign Up flows.
*   Password Reset ("Forgot Password") functionality.
*   Comment sections on blog posts.
*   Categories or Tagging systems for posts.
*   WYSIWYG rich-text editors (standard textareas will be used for Phase 1).