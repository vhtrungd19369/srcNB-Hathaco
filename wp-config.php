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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "xuong308_nhadatquan9" );

/** MySQL database username */
define( 'DB_USER', "xuong308_nhadatquan9" );

/** MySQL database password */
define( 'DB_PASSWORD', "Admin@*##123980" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
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
define( 'AUTH_KEY',         'U,pZPONoAb4@a_k>9{WY(49VNm3HR$6pq_4{1U|z+|V5X3NFNcYj/v23F=? Gg]v' );
define( 'SECURE_AUTH_KEY',  '[h $)z^jBEMc,`]u9mhtL%d&m&0p>OZ: 8qZqIVg&htRP~JUni0C0jMnx=rk)V5/' );
define( 'LOGGED_IN_KEY',    ']=354QRZRIPi7M!Neyx~dm>Z mo|:@XOI {.HJ~}ny|j3MJ]&=)F+rm&KNJh`qp+' );
define( 'NONCE_KEY',        'hdH?agmQm3G(YxT28hQ=EO9 D4V<mLe(_od%D?c~0G#qLQ{N`Bm;1bEqG D<yOG+' );
define( 'AUTH_SALT',        'M?et_HK C.dJnw[!&`+e^@fh,2#!Vec&0$2O3VYjNm3vP!HB@&?DTrO@`(.Gb 2=' );
define( 'SECURE_AUTH_SALT', 'zaK 59&$Ev@]WHQ<heZ}lD1/|p#4,Lh.p7WDvtc#8PY?)u*re+&<<Ka[;HPJqL<Y' );
define( 'LOGGED_IN_SALT',   'A S+]5z=OPr2qmQ`%)4 {lp%E<Vg#@i*~ tndj^~K2o0h ^3DSH9;e!:3L^R{C0l' );
define( 'NONCE_SALT',       '-S%rd}M}>jbUGO-2gH0N[^+LL$?adN}fM} P?&tDRdSgz0,IrcMS<K1Q o^M&72!' );

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
