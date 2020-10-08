<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'iconi_sseat' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rootpassword' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'irxnab7nyxcfpygcwk1yttcqgfds90frbnemnfkylr0adhrpuczd4lrqqr90rdjb' );
define( 'SECURE_AUTH_KEY',  'iionnlm7v07xa9w0jdlop1mf9pmeepczngl0omsyqu1bbcin0jfu5xmwlnmozma0' );
define( 'LOGGED_IN_KEY',    'alojntzjfazsxxhyv5pvg0tqxyz19c1mtvnmgxpnsdrfxywif0z082jgn5i8os1n' );
define( 'NONCE_KEY',        'realec2tqmvbdmd81ekujhdvmsq5ely3je9hssxjlu9mshaqq8qdlfestrnhbtix' );
define( 'AUTH_SALT',        'dzxfcexxf0eei0fkhwuo9iyae0lzpeebxumdjdkrgoflsctanbvy2hq2oepukszy' );
define( 'SECURE_AUTH_SALT', 'lowuoiz5b36gc7qzekq3gv1rfb2pvj92eqpaeqwkt7bzyzf3puyyt6ssh9msfckp' );
define( 'LOGGED_IN_SALT',   '855wzmpavo89bzf8wi0ievf18tcyszgqhnofhhoqgbs86zidq1qic0mesouryhrr' );
define( 'NONCE_SALT',       'dqgd3xbwlg4gr1ujf6rpplazlwojvyevwqyqtoatnminkjocgwwk1ymcg0zhiuk6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pvj_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
