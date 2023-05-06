<?php
define( 'WP_CACHE', true ); // Added by WP Rocket
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
define( 'DB_NAME', "xuong308_nhadatquan9" );

/** MySQL database username */
define( 'DB_USER', "xuong308_admin" );

/** MySQL database password */
define( 'DB_PASSWORD', "Admin@*##123980" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'BFBGSc=?GRFFNwDmB3]O5^I_vE%EmI85(Bm[z8,E1J|25uL3(eYOb)bV@g/u@P22' );
define( 'SECURE_AUTH_KEY',  '8Tx%];,V[#5nRNG2yf[,D1[4Dj>Cq%_q$>J Ga]Cb#fsW=1hTYk7./ap)e%KQB.k' );
define( 'LOGGED_IN_KEY',    'a~7q*;i_FLjl~El-jeigwt#dyav$:e5c~FWR;S&!^_;;kCOL~svEH27AH)D1^0<1' );
define( 'NONCE_KEY',        'YsZNs`$|{d=~NXlyQ]?Q%l8f^Y?[Kq|J2 zJA&y.s-E|}G0t0C?CCV/0J6@=`>|%' );
define( 'AUTH_SALT',        'R~Tv8I$&2Dg``/Ue7}OUC`ec%i/14~tY_d 0dS89P$ykDWq|3//{1Gl[*#L7#TPo' );
define( 'SECURE_AUTH_SALT', ']hF!#acm$Ez8+4o>VH4WvK<Mz!{F$3#9q.X]gJ-c/j}1XpSP2>vzNnjy8N~&rmIr' );
define( 'LOGGED_IN_SALT',   ':P|O:CxGTX^q@{f-,f<iP7i4YYXiwi`b,g<h8;5Zw`,>G6sG.cDY9&f2fvCz;e[d' );
define( 'NONCE_SALT',       ']ntO(sgR!jM[9?W@@#[<PQ=!RtY3ZX-dx4NPY2)3gF|<7XUmfCK8rfTW#payx_7j' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nbw_';

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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
