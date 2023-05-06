<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xuong308_nhadatquan9' );

/** Database username */
define( 'DB_USER', 'xuong308_nhadatquan9' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@*##123980' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':Ur_6S~&A#KB(E7Zi*LJ`I/3E/QwB].;~5{tB97XX*-}YWEG&P`vo~y*]/zNitbY' );
define( 'SECURE_AUTH_KEY',  'G;nAHP_-f~R{YIZ2-fJ)25uV<!:_;EvM9<(}`=SOx6F5a!tbxRINB?a/=*5Iwaoe' );
define( 'LOGGED_IN_KEY',    'cRS9|Of+HvhEyh)bxIFi];.|*K[6iF/.WLvale=M8 /8/?BVFtt6KCIfs4q*T`bw' );
define( 'NONCE_KEY',        'mvjW!IGBI828-1+T|Z50&kvTSMz.}a X,Tf57n@7mOvgCUz4pMe-k>>3,ehjA}_ ' );
define( 'AUTH_SALT',        'AUv3<_~ijBf`au3YHMl%kvQi7 AK.FRhZIaYTt6e:Sz&Uw_QLFF=n~V7)LL5GVS#' );
define( 'SECURE_AUTH_SALT', 'L9.Vh5fa~0l-dWfB ;i[>4XyZYhg-5+~Ne!orL.+a|mq`n3FP M8}(c?zNzUAK_O' );
define( 'LOGGED_IN_SALT',   'Ou-l sl=H5Td3bXBlUUEPOoL9lzC9wdEgEc$*4c/UsQRT^8#pom7C;il[q~V))A?' );
define( 'NONCE_SALT',       ':BO-2U^wfCewpRe5eS,; N{%.,D=)_%42?1M|GZe@np@OQ2!r^:_iBs$f gx4cq1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
