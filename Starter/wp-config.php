<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define( 'DB_NAME',     'database_name_here' );
define( 'DB_USER',     'username_here' );
define( 'DB_PASSWORD', 'password_here' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );


/* MySQL database table prefix. */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**
 * Content
 */
define( 'AUTOSAVE_INTERVAL', '300' );
define( 'WP_POST_REVISIONS', '3' );
define( 'MEDIA_TRASH', true );
define( 'EMPTY_TRASH_DAYS', 15 );

/**
 * Override of default file permissions
 */
define( 'FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
define( 'FS_CHMOD_FILE', ( 0644 & ~ umask() ) );

/**
 * WordPress debug mode for developers.
 */
define( 'WP_DEBUG',         true );
// define( 'WP_DEBUG_LOG',     true );
// define( 'WP_DEBUG_DISPLAY', true );
// define( 'SCRIPT_DEBUG',     true );
// define( 'SAVEQUERIES',      true );

/*
 * PHP Memory
 */
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );

/*
 * WordPress Cache for WP Super Cache
 */
// define( 'WP_CACHE', true );

/*
 * Compression for WordPress Admin
 */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );

/*
 * Cron Job
 */
// define( 'DISABLE_WP_CRON',      'true' );
// define( 'ALTERNATE_WP_CRON',    'true' );
define( 'WP_CRON_LOCK_TIMEOUT', 900 );

/*
 * Updates
 */
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );

/**
 * Default Theme
 */
define('WP_DEFAULT_THEME', 'your-theme');

/*
 * Admin Address and Site Address
 * reduces the number of database queries
 */
define('WP_HOME', 'https://your-site.com/');
define('WP_SITEURL', 'https://your-site.com/');

/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
