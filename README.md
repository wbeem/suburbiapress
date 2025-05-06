# Suburbia Press WordPress Config

This repository provides a secure, flexible, and environment-aware `wp-config.php` starter file for WordPress, optimized for professional development and deployment workflows.

## 🔒 Overview

This `wp-config.php` template improves upon the default configuration by integrating:

- **Environment variable support** – Ideal for secure deployments
- **Environment-based settings** – Toggle debug/caching settings for development, staging, or production
- **Security hardening** – Disable file edits and enforce HTTPS
- **Performance tuning** – Optimized memory limits, autosave frequency, and revision control
- **Version control friendliness** – No hardcoded secrets or environment-specific paths

Created and maintained by [William Beem](https://suburbiapress.com) for use with [Suburbia Press](https://suburbiapress.com).

---

## ⚙️ Features

| Feature                | Description |
|------------------------|-------------|
| `getenv()` Support     | Pulls secrets like DB credentials, salts, and URLs from environment variables |
| Environment Modes      | Dynamically adjusts `WP_DEBUG`, `WP_CACHE`, and logging per environment (`development`, `staging`, `production`) |
| Memory Optimization    | Increases PHP memory limits for admin tasks |
| Revision + Autosave    | Limits post revisions and slows autosave to reduce DB overhead |
| Secure by Default      | Disables file editing and plugin/theme modifications in admin |

---

## 🛠 Installation

1. Clone this repository or copy `wp-config.php` into your WordPress project root.
2. Create a `.env` file or configure environment variables on your host or deployment platform.

Example `.env` values:

```dotenv
DB_NAME=your_db_name
DB_USER=your_db_user
DB_PASSWORD=your_db_password
DB_HOST=localhost

WP_HOME=https://example.com
WP_SITEURL=https://example.com

WP_ENV=production

AUTH_KEY=your-random-auth-key
SECURE_AUTH_KEY=your-secure-auth-key
LOGGED_IN_KEY=...
NONCE_KEY=...
AUTH_SALT=...
SECURE_AUTH_SALT=...
LOGGED_IN_SALT=...
NONCE_SALT=...

Notes
	•	Requires PHP 7.4+ (recommended: 8.x)
	•	If using a container-based deployment (e.g., Docker), define your environment variables in the container config or compose file.
	•	This file disables plugin/theme editing and modification by default. Adjust DISALLOW_FILE_MODS if needed.
