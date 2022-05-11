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
define( 'DB_NAME', 'ecommercewordpress' );

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
define( 'AUTH_KEY',         '`!Np{4&r%cc>+BTsctS$~xS3:sjsA!>3>uR[5}~-%#s(w0]R<9q;gloieb( KnX6' );
define( 'SECURE_AUTH_KEY',  ';<0=*Z&)|#b#u/IS[@H{vg>SL_x?x|V4-5<Kn+Dw]1!YCvP tPctmG1;m|Y<_yur' );
define( 'LOGGED_IN_KEY',    'j=KPJ#-aN0}e>_E>FJ7/3kmO7c!T?_yv&d@_^o/V;?;rr3&Is)(rfuFX>VHh6acJ' );
define( 'NONCE_KEY',        'P:%5dWO8G/KQYh7I#L_<S`T.IwTq?JG?,Ok|^gE8D )B[s4]:L|Vz3SN[ dDK6J/' );
define( 'AUTH_SALT',        '.&{cIu4ENFZhrU((BP%/3#1;]zY#CNfP?-}k8!i(GUll%Hp(Ta8e<a<$a^!6Wj5R' );
define( 'SECURE_AUTH_SALT', '3m?,eKYh^YS1Jo?,0b)[RRegTwVrR@rnulcEep&np4B$F49mYsv7$J2$.8{g#kn+' );
define( 'LOGGED_IN_SALT',   'U8i~Tr*(pd7 zwa?b76?/C<jC>O~]Uv;/m6zQE>7(~]/20N.}A6zX=.L`]+a%ZhV' );
define( 'NONCE_SALT',       '%~$PK*|mj=f8Mf#W(KG*kg~}=.wHja&(QN?s|i~ov8L;ReRV^aZo:=+?6-l-UV:X' );

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
