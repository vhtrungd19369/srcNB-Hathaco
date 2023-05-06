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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nhhatmkm_hathaco' );

/** Database username */
define( 'DB_USER', 'nhhatmkm_hathaco' );

/** Database password */
define( 'DB_PASSWORD', 'BOS_JD,W**[+' );

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
define( 'AUTH_KEY',         'VvZ]7oaN18jnv@`cJ|Wm[u*NC9UVe]Z4|R[TAo{>xVp~F<N|9Yer$V9#m=<x=UZ~' );
define( 'SECURE_AUTH_KEY',  'n~feN!rP7H}`QY*W@Be3`/.6AmS+@oH/0DB{+ahfxP7mezy&rTtM9]t%8vtpPG$}' );
define( 'LOGGED_IN_KEY',    '6(*aM*?%Ek *:Zv|7)sduKMa1>FXv@Sx3jI_EocLNT8&[l8Fqdou~_3}=^A7FyXn' );
define( 'NONCE_KEY',        'v{vVSyJesiXOW&lPYS*n1Fx%jE?}j^n>k4gIU/3}c?,u/CyQJ9f|C[_75@Fc_@$<' );
define( 'AUTH_SALT',        '<Fw;e#xTBXD*_B<WXizav95]ACxO_aGPJgTJbhl0vz?Q@R#$|x,0|`t?<1$ntNZ.' );
define( 'SECURE_AUTH_SALT', 'Q(Xwv3|n%oJXJWuc,WivNc:XJ)~YPF_py.iGpO2uKXoKYqHI=b|DVLR[?zHDjydd' );
define( 'LOGGED_IN_SALT',   'Ct|O2OAtBD|M>]9ZfaC9wn}xb~NF&63Y|)0d/Ku[abe~{MJ@z(lifF}4&85). LE' );
define( 'NONCE_SALT',       'O]t>zpg0Ktac>?xth=oh%Nxs [gIx)Wc&#p?}$RC^gj}2l<-970oOV.V]W#&G8|O' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
