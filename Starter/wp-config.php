<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'datenbankname_hier_einfuegen');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'benutzername_hier_einfuegen');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', 'passwort_hier_einfuegen');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', 'localhost');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');


/**
* Set memory limit
**/
define( 'WP_MEMORY_LIMIT', '128M' );
if (
	function_exists('memory_get_usage') &&
	( (int) @ini_get('memory_limit') < abs( (int) WP_MEMORY_LIMIT ) )
	)
	@ini_set( 'memory_limit', WP_MEMORY_LIMIT );

/**
 * Custom directories
 */
// Custom content directory
define( 'WP_CONTENT_DIR',  dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL',  'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );
// Custom plugin directory
define( 'WP_PLUGIN_DIR',   dirname( __FILE__ ) . '/wp-plugins' );
define( 'WP_PLUGIN_URL',   'http://' . $_SERVER['HTTP_HOST'] . '/wp-plugins' );
// Custom mu plugin directory
define( 'WPMU_PLUGIN_DIR', dirname( __FILE__ ) . '/wpmu-plugins' );
define( 'WPMU_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wpmu-plugins' );
// Moving uploads folder
define( 'UPLOADS', 'media' );

/**
 * Modify AutoSave Interval
 */
define( 'AUTOSAVE_INTERVAL', 300 ); // Seconds

/**
 * Post Revisions
 */
define( 'WP_POST_REVISIONS', false );
define( 'WP_POST_REVISIONS', 3 );

/**
 * Override of default file permissions
 */
define( 'FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
define( 'FS_CHMOD_FILE', ( 0644 & ~ umask() ) );

/**
 * Automatic Updates
 */
define( 'WP_AUTO_UPDATE_CORE', true );

/**
 * Crons
 */
define('DISABLE_WP_CRON', true);
define('ALTERNATE_WP_CRON', true );
define('WP_CRON_LOCK_TIMEOUT', 600 );

/**
 * Empty trash more frequently
 */
define('EMPTY_TRASH_DAYS', 15 );

/**
* WordPress Cache
**/
define( 'WP_CACHE', true );

/**
* Compression
**/
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', false );
define( 'ENFORCE_GZIP',        true );

/**
 * Disable file editor
 */
define('DISALLOW_FILE_EDIT', true); // Disable the Plugin and Theme Editor
define('DISALLOW_FILE_MODS', true ); // Disable Plugin and Theme Update and Installation

/**
 * Default Theme
 */
define('WP_DEFAULT_THEME', 'custom-theme');

/**
 * Skip /wp-content/ when upgrading
 */
define('CORE_UPGRADE_SKIP_NEW_BUNDLED', true );


/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Füge hier deine Zeichenkette ein');
define('SECURE_AUTH_KEY',  'Füge hier deine Zeichenkette ein');
define('LOGGED_IN_KEY',    'Füge hier deine Zeichenkette ein');
define('NONCE_KEY',        'Füge hier deine Zeichenkette ein');
define('AUTH_SALT',        'Füge hier deine Zeichenkette ein');
define('SECURE_AUTH_SALT', 'Füge hier deine Zeichenkette ein');
define('LOGGED_IN_SALT',   'Füge hier deine Zeichenkette ein');
define('NONCE_SALT',       'Füge hier deine Zeichenkette ein');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false);
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');
