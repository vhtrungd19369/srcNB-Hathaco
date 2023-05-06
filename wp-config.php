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
define( 'AUTH_KEY',         '+`P!uoAtB,a]~JJBF$|]0mGpwKsGPstD*vlK^y-xYh|n#Epul+MNL}(tvGGF~ZG!' );
define( 'SECURE_AUTH_KEY',  '=cP:rzL`9-:)=44xG9@d4*]#DW?9?q86?3d]CF>r(&lmr(mSz}(c|r&Ot->n7{Pf' );
define( 'LOGGED_IN_KEY',    '58CoVqs$0E3I+0jEE;/IoKgVIij[ohdV?1qvphUVX?wT9H(m>?k}:3d!x14e54z;' );
define( 'NONCE_KEY',        'A`sF)$E-PMJB2#jg$LG/99}#1OALipj8n$>.ZgLF,&4Xs>>>K`m-./^*7jUKo+}V' );
define( 'AUTH_SALT',        'v +|dSl|cY.ABr+bC~Ii]*Ad!Q0_xob|Bab7=9DhOpO$xM/}xtl%cCtC[Q4!?B&2' );
define( 'SECURE_AUTH_SALT', '?7-8LT: tC6IPtQ.6UoUfxSPp9*h*_-IuZUY)2bv?blQ)T2|G1>CAl~M[`aNX^[M' );
define( 'LOGGED_IN_SALT',   '[rR8jH&f=>5qD~*]5xr:{{B1l_Ds+=x{pqOiaPk/U+LK!%6O%38.$t}./fEx7t|r' );
define( 'NONCE_SALT',       'qAmnk-8=ssOBLo$sh g/Cw)pJY{<Elf=Ym,)T}./TEm~/Dn9Lurd<y=;<Orqq6g8' );

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
