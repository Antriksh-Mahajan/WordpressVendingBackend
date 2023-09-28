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
define( 'DB_NAME', 'vendingmachine' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '}rR(*38^g9hOuB)cN@bt0-#!U%T4f<;!=(p)4#e4NXvq:GIPzU?O,a=c!.$,N/6H' );
define( 'SECURE_AUTH_KEY',  'k[<}V!-#c#(fh4k$Tun+C3NFp$A:U,WE$aqYqe)T5pi) !tPc[C!i>o3_`<b_&iL' );
define( 'LOGGED_IN_KEY',    ',.G|Le;A<8k@p0`qxu<-iN<$J1RG#[L{z][ q7wlFjDP*F<&.ibd4>{ tKPm5x#<' );
define( 'NONCE_KEY',        'd71}jaZF_Wtibb7,M%Uw2lnq3x=[,0&FPw0r. 48g8L>qwp%U fjo.{F?dxf$ jz' );
define( 'AUTH_SALT',        'BA?R26>1Pe7*9>ueo,mzjbtm*Z9m2W0~qAL~?=U$[,e+{(fcnO>WQ@d{JgoX##9S' );
define( 'SECURE_AUTH_SALT', '8ZAeY$.x@yAg$LY,hQ63A-(q#$Rgl1/[Usq&IW->T ZA^cY*L2(suKzH5R_SrZ]f' );
define( 'LOGGED_IN_SALT',   '<[#* 64`D`]lMc%C):S7*O~>L{6pa$2<6 ]h{M8k.<#~,,BulN&VNQgYADDX!,Ju' );
define( 'NONCE_SALT',       'V}=SM?Cha_G6ktTx=EK!@H1(k]2dL8vJ_U6q^uC2HfwUgTs;?Kc|s3EY~SLv#4#;' );

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
