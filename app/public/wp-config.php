<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'brFiwGRji2ZL9U+nr49WBuVcGT5eeNufaACFPuOLB5hGH+xOgrY6Cmx/gm/WDFzw4OA9MfEliOUoT8Qj72vWNw==');
define('SECURE_AUTH_KEY',  'xOFdVcKL5zARLyKmEu4qgNYh+miey4IPdFaMLn+pSjY2pyHkMPL+koMcESNUfyNDzhk2khaGBw5ZZDZt/b4nmA==');
define('LOGGED_IN_KEY',    'NOKodN3KbI47jatKUZN04kDX9aOpkpmIAuMxpNNljV6Unaw2RbuyMYucV+30kxIBeM3JdwhtZxo2O8RSD7GDfw==');
define('NONCE_KEY',        '5hJURX89szo5qOqxn3Tok4bvzqDAmONJQOO4agJS91PJ5umYNybiiJtlibGWWUHoqflNisgvJBMTmN7aTqDmUQ==');
define('AUTH_SALT',        'uPG0dMdZcRJT0TXJq0GZ3myYbkushqT+NfHTSvKSlHY4hR58NjHjTQv/QN3Pg+lXTbwgUfd2YK+RekO2eDLVWw==');
define('SECURE_AUTH_SALT', 'cf3gKRTsqY0ybX/UZLI6aEfIUGZy3apDZp4ndSUknh/lHrpfT67M6E3+I70ih5IjSzXyTwRdh5lyOdBrIpFUoA==');
define('LOGGED_IN_SALT',   'opZXBWd3N9WlWMMNebf9lpbbT0BfIyFEODEjONR5JcJ5xG6GLkjdA99UnvC+jt9QOczPjmRk4DLu1k5eaM13Vg==');
define('NONCE_SALT',       '0j4vqPmbBZJ4nqLIZpcbUzl+AIk2W72odG4iU/AxiDPxSW/O9srlS8g01PceekONOEOU54IvA8qEboxMvrvTXA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
