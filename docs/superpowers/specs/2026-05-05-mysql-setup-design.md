# Design Doc: MySQL Setup and Environment Configuration for Valo-Blog

**Date:** 2026-05-05
**Topic:** Transitioning from Windows/SQLite to CachyOS/MySQL for local development.

## 1. Problem Statement
The project was originally developed on Windows using SQLite. It is now being migrated to a CachyOS environment. The user wants to switch the primary development database to MySQL (MariaDB) while ensuring all Laravel system requirements are met.

## 2. Proposed Solution
Implement a system-native MariaDB setup, configure PHP with necessary extensions, and update the Laravel environment to connect to the new database.

## 3. Architecture & Components

### A. Database Layer (MariaDB)
- **Engine:** MariaDB (Standard on Arch/CachyOS).
- **Service:** `mariadb.service` managed via systemd.
- **Access:** Local-only user `valo_dev` with access to `valo_blog` database.

### B. PHP Environment
- **Extensions to Enable/Install:**
    - `pdo_mysql`, `mysqli`: Database connectivity.
    - `bcmath`, `intl`: Laravel core requirements.
    - `gd`: Image processing.
    - `sqlite3`, `pdo_sqlite`: Kept for testing purposes.

### C. Laravel Application Layer
- **Environment:** Transition from `env` to `.env`.
- **Dependencies:** Full refresh of `vendor/` and `node_modules/`.
- **Migrations:** fresh migration of the schema to MariaDB.

## 4. Implementation Steps

1. **System Packages:** Install `mariadb`, `php-sqlite`, `php-gd`.
2. **Database Initialization:**
   - Run `mariadb-install-db`.
   - Start `mariadb` service.
   - Create `valo_blog` database and `valo_dev` user.
3. **PHP Configuration:**
   - Edit `/etc/php/php.ini` to enable required extensions.
4. **Project Setup:**
   - Move `env` to `.env`.
   - Update `.env` with MySQL credentials.
   - Run `composer install` and `npm install`.
   - Run `php artisan migrate`.

## 5. Portability & Future Deployment
- **Portability:** Data can be transferred via `mysqldump` or recreated using Laravel migrations/seeders.
- **MySQL Transition:** This setup prepares the application for a MySQL-based production environment.

## 6. Verification Plan
- **Database:** Verify `mariadb` service is active and `valo_dev` can login.
- **Application:** Run `php artisan migrate` successfully.
- **Development Server:** Run `composer dev` and verify the site loads in the browser.
