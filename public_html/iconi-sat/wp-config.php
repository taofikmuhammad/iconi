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
define( 'DB_NAME', 'iconi_sat' );

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
define( 'AUTH_KEY',         'gzps9fhvn6uge5crbzwvp8g72glgxaa5gwebtdj9ipgmb8o6zlgaicqluu7zqgks' );
define( 'SECURE_AUTH_KEY',  'ozhranx72rt5c4hu0hkwyvjhzez3enkrwfderl1l7yjkhkzspbvxbf09xnswqmek' );
define( 'LOGGED_IN_KEY',    'c0lm3zf7gek3gkdolfodnufhaka3z37gfshx36zpf1hmovvve9npjyexh9q7wlxt' );
define( 'NONCE_KEY',        'sjebcn1xnm8ibvqkhmr8gxg0bpinrcwhjlc8n5b3xi3b8fcccruqh2n4q4uu1l2m' );
define( 'AUTH_SALT',        'j9pgzihjdy8h7cifulmjmekxniyalwp9wcfzpsrdtpdugrydxmepioh3pazrqyap' );
define( 'SECURE_AUTH_SALT', 'whdpwaaquobas3t8wqqmpvesepnsnfvxljakcmztiw0nj5vpuughcs9xtsjquapb' );
define( 'LOGGED_IN_SALT',   '2dom31uoiapi0kmzq24hmjzpwmdsp72qksjbfvl62a9u9zhqjqyauampvdlcjbrc' );
define( 'NONCE_SALT',       'zyovj09voudthyfq7zpmhze0tefikyxjekog3x1yad1uc9mh2s9gfpnnfnrkiasn' );

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
