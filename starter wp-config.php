<?php

/** ------------------------------------------------------------
 *  MySQL Settings (use environment variables where possible)
 *  ------------------------------------------------------------ */
define( 'DB_NAME',     getenv('DB_NAME')     ?: 'database_name_here' );
define( 'DB_USER',     getenv('DB_USER')     ?: 'username_here' );
define( 'DB_PASSWORD', getenv('DB_PASSWORD') ?: 'password_here' );
define( 'DB_HOST',     getenv('DB_HOST')     ?: 'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
$table_prefix = 'wp_';

/** ------------------------------------------------------------
 *  Site URLs
 *  ------------------------------------------------------------ */
define( 'WP_SITEURL', getenv('WP_SITEURL') ?: 'https://google.com' );
define( 'WP_HOME',    getenv('WP_HOME')    ?: 'https://google.com' );

/** ------------------------------------------------------------
 *  Environment Configuration
 *  Set WP_ENV to 'development', 'staging', or 'production'
 *  ------------------------------------------------------------ */
define( 'WP_ENV', getenv('WP_ENV') ?: 'production' );

if ( WP_ENV === 'development' ) {
    define( 'WP_DEBUG', true );
    define( 'WP_DEBUG_LOG', true );
    define( 'WP_DEBUG_DISPLAY', true );
    define( 'WP_CACHE', false );
} else {
    define( 'WP_DEBUG', false );
    define( 'WP_DEBUG_LOG', false );
    define( 'WP_DEBUG_DISPLAY', false );
    define( 'WP_CACHE', true ); // Enable caching in production
}

/** ------------------------------------------------------------
 *  WordPress Core Options
 *  ------------------------------------------------------------ */
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true ); // Skip default themes/plugins on update

/** ------------------------------------------------------------
 *  Authentication Unique Keys and Salts
 *  Generate fresh keys at: https://api.wordpress.org/secret-key/1.1/salt/
 *  ------------------------------------------------------------ */
define( 'AUTH_KEY',         getenv('AUTH_KEY') ?: 'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY') ?: 'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY') ?: 'put your unique phrase here' );
define( 'NONCE_KEY',        getenv('NONCE_KEY') ?: 'put your unique phrase here' );
define( 'AUTH_SALT',        getenv('AUTH_SALT') ?: 'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?: 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT') ?: 'put your unique phrase here' );
define( 'NONCE_SALT',       getenv('NONCE_SALT') ?: 'put your unique phrase here' );

/** ------------------------------------------------------------
 *  Security Hardening
 *  ------------------------------------------------------------ */
define( 'FORCE_SSL_ADMIN', true ); // Enforce SSL for admin & logins
define( 'DISALLOW_FILE_EDIT', true ); // Disable theme/plugin editors
define( 'DISALLOW_FILE_MODS', true ); // Disable plugin/theme install/update if deploying from Git

/** ------------------------------------------------------------
 *  Post, Media & Autosave Options
 *  ------------------------------------------------------------ */
define( 'WP_POST_REVISIONS', 5 );     // Limit revisions
define( 'AUTOSAVE_INTERVAL', 300 );   // Autosave every 5 minutes
define( 'MEDIA_TRASH', true );        // Enable media trash
define( 'IMAGE_EDIT_OVERWRITE', true );

/** ------------------------------------------------------------
 *  Memory Limits
 *  ------------------------------------------------------------ */
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' ); // Admin-side limit

/** ------------------------------------------------------------
 *  Optional: Disable WP-Cron in favor of system cron
 *  ------------------------------------------------------------ */
// define('DISABLE_WP_CRON', true);

/** ------------------------------------------------------------
 *  Optional: Set trash cleanup period
 *  ------------------------------------------------------------ */
// define('EMPTY_TRASH_DAYS', 7);

/** ------------------------------------------------------------
 *  Absolute Path to the WordPress Directory
 *  ------------------------------------------------------------ */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** ------------------------------------------------------------
 *  Load WordPress Settings
 *  ------------------------------------------------------------ */
require_once ABSPATH . 'wp-settings.php';
