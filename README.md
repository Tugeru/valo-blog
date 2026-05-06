# VALO-BLOG: RADIANT INTEL META HUB

A high-fidelity, tactical meta-tracking application for VALORANT, built with Laravel 12 and Tailwind CSS. This platform serves as a central hub for elite tactical intelligence, agent dossiers, and map-specific strategy analysis.

<p align="center">
    <img src="public/images/valo-logo.png" width="100" alt="Valo Logo">
</p>

## 🚀 Key Features

- **Cinematic Experience**: Immersive full-screen background videos and a "Tactical Asymmetry" design system.
- **29 Agent Dossiers**: Comprehensive high-fidelity dossiers for every agent, including specialized 2026 lore-accurate agents (Waylay, Tejo, Miks, Veto).
- **7 Map Intel Pages**: Detailed map splashes and strategic minimap integrations for the current competitive pool.
- **Live Meta Ticker**: A real-time header ticker displaying win rate shifts and trending patch intel.
- **Admin Command Center**: A secure backend for deploying new field reports and managing tactical content.
- **Dynamic Intel Grid**: Category-filtered news feeds (Patches, Guides, News) with high-performance hover interactions.

## 🛠 Tech Stack

- **Framework**: Laravel 12 (PHP 8.2+)
- **Frontend**: Tailwind CSS, Vite, Alpine.js
- **Database**: MySQL / MariaDB (LAMPP stack optimized)
- **Asset Sourcing**: Integrated with `media.valorant-api.com` for high-res tactical assets.

## 💻 Windows Setup Guide

Follow these steps to deploy the Meta Hub on your local Windows machine.

### 1. Prerequisites
Ensure you have the following installed:
- **XAMPP** or **Laragon** (PHP 8.2+ and MySQL).
- **Composer** (PHP dependency manager).
- **Node.js & NPM** (Frontend asset compilation).
- **Git** (Version control).

### 2. Installation Steps
Open your terminal (PowerShell or Command Prompt) and run:

```powershell
# 1. Clone the repository
git clone https://github.com/Tugeru/valo-blog.git
cd valo-blog

# 2. Install PHP dependencies
composer install

# 3. Install JavaScript dependencies
npm install

# 4. Environment Configuration
copy .env.example .env
php artisan key:generate

# 5. Database Initialization
# -> Start MySQL via XAMPP/Laragon Control Panel
# -> Create a new database named 'valo_blog'
# -> Update DB_USERNAME and DB_PASSWORD in your .env file
php artisan migrate:refresh --seed

# 6. Asset Linking & Compilation
php artisan storage:link
npm run build
```

### 3. Launching the Hub
```powershell
# Start the local development server
php artisan serve
```
Open your browser and navigate to: `http://127.0.0.1:8000`

## 🔑 Admin Credentials

Access the Command Center at `/admin` using these pre-seeded credentials:
- **Email**: `admin@radiant-intel.com`
- **Password**: `password`

*Additional lore-based accounts available in `DatabaseSeeder.php` (Brimstone, Cypher, Sova, Viper).*

## ⚠️ Troubleshooting

- **Database Connection Error**: Ensure MySQL is running on port 3306 before running migrations. If using XAMPP, the default user is `root` with no password.
- **Missing Images**: All agent and map images are pulled from the Valorant-API CDN. Ensure you have an active internet connection.
- **Script Errors**: If you encounter execution policy errors in PowerShell, run: `Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser`.
- **PHP Extensions**: Make sure `pdo_mysql`, `bcmath`, `gd`, and `intl` are enabled in your `php.ini` file.

---
*Authorized for use by Radiant Protocol Personnel only.*
