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
define( 'DB_NAME', 'iconi_main' );

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
define( 'AUTH_KEY',         '3ngta4148pytrpevaxt7s9ir54jfu5qhcdbbe8eefuiuwyep2j43wuk7yiun9xho' );
define( 'SECURE_AUTH_KEY',  'pxsw2okefyz7bwjob0dczlvuwxztowde5rgnnujobt9ahr6i82kr6jmodb50vrdh' );
define( 'LOGGED_IN_KEY',    'dlofgxc8hszsnwabbdinibz60wk4pwhl11fg8vginfbgrrt0zig6oknrpthmyyiu' );
define( 'NONCE_KEY',        'dgwnwtbqsaq832kcx0f6gfd0di9kosqkmbocdnmzix7udw3heuapyo2zq6cqzdv4' );
define( 'AUTH_SALT',        'stnnjm6mlp7lgloocicfqcblzwheo8vulleplwqgcxsgdohpaq1mbhrxnakod9yw' );
define( 'SECURE_AUTH_SALT', 'spbadq3ohezefrwd5dlhkjbrmnj72mlbx62yhtd4jmajucvyjmav6mutcndcekdc' );
define( 'LOGGED_IN_SALT',   'encepsh1pypiril26zetqa8iwo4o774dw9eyhnzk8lpgc4bucgr5jarwm42yuj6w' );
define( 'NONCE_SALT',       '3xnavbusgfkkp8ce64wqdxghu1fyfvieh7dleme9pwl0uwedqsfinqkoepz2tg6g' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
