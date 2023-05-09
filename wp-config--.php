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
define( 'DB_NAME', 'nhhatmkm_hathaco.com' );

/** Database username */
define( 'DB_USER', 'nhhatmkm_hathaco-com' );

/** Database password */
define( 'DB_PASSWORD', '^j5-+p{6TQ&#' );

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
define( 'AUTH_KEY',         'oJV:/l-Co j=B])I6He0Qo^C8$nQK`uE((SqLj(M&.V)7%Kz!X-xgm#0EW -y&;E' );
define( 'SECURE_AUTH_KEY',  'l~[K:`6Od|2SyC%}PI?`o!8ZW4J&}7nf@~vZn%kVLrq w/[L-vTR;2-:[szxvWy)' );
define( 'LOGGED_IN_KEY',    'IP=Yl_oH|w`=1wj~!*:/-fMxF$e|M1])r&0W?]iX$H}`m.ZoL?3ak[J)Z2m1;2-2' );
define( 'NONCE_KEY',        '(Tudk_>Z6I_b~BC6glS91{7n)g}./,{e3R/^g2|Vs:/ !0-ZR25A^ar`rv]Dr9ds' );
define( 'AUTH_SALT',        '|EC!aN-&cYp~8mjMr:URKTp>Q.^x^?sWsoOt-dyhe*)B1T :aGZWYob5QlMIBd%A' );
define( 'SECURE_AUTH_SALT', 'FmE)R7wRJZc.K1[t~G<s,8kXVf 6%y&n0:^?QAB>t10Ej]JXbgtDmC,if$;,=zWe' );
define( 'LOGGED_IN_SALT',   'Bn#av=|z4$}u~3k&FB6&q%O3bQnd3h$dd2*c_i@iTE~<)S+5N#TkffH]SP.qU}y^' );
define( 'NONCE_SALT',       '%U%J{--s-FtK>]$oFmH!7Vy(xBA`Wx.i}9p?S|l7tP_z<.o8D#dU[kCwW(R5rzJG' );

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
