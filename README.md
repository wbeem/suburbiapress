# Suburbia Press WordPress Config

This repository provides a secure, flexible, and environment-aware `wp-config.php` starter file for WordPress, optimized for modern development and deployment workflows.

## 🔒 Overview

This `wp-config.php` template improves upon the default WordPress configuration by introducing:

- **Environment variable support** – Safely manage sensitive credentials and environment-specific settings
- **Environment-based configuration** – Adjust debugging, caching, and logging automatically based on `WP_ENV`
- **Security hardening** – Disable file editing, enforce HTTPS, and support Git-based deployment practices
- **Performance tuning** – Optimized memory usage, autosave intervals, and revision control

Developed and maintained by [William Beem](https://suburbiapress.com) for use with [Suburbia Press](https://suburbiapress.com).

---

## ⚙️ Features

| Feature                | Description |
|------------------------|-------------|
| `getenv()` Support     | Uses environment variables instead of hardcoded secrets |
| Flexible Environments  | Dynamically adjusts settings per environment (`development`, `staging`, `production`) |
| Security First         | Disables plugin/theme editing and file modifications |
| Performance Oriented   | Increases memory, limits autosave & revisions |
| Git-Friendly           | Configuration is decoupled from environment, ideal for version control |

---

## 🛠 Installation

### 1. Copy `wp-config.php`

Download or clone this repository and copy the `wp-config.php` file into your WordPress project root.

### 2. Create Your `.env` File

This repository includes a `.env.example` file with placeholders for all required settings.

To create your actual configuration file:

```bash
cp .env.example .env
