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
 * * MySQL settings
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
define( 'DB_NAME', 'fresh_2_home' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '0/-5._|HIO=8Eym(I2 eo_6M,V$acKn4f8#Eyx_HZ(;Z5:lVu62=o_z/qZ38+Ji:' );
define( 'SECURE_AUTH_KEY',  'RmdXsWAg~6@GY&+0Rqv+3~*%)3a4=kqFJrIDL>MQMW+4w~C>wU&)RZd<Y)g}zV(8' );
define( 'LOGGED_IN_KEY',    '!sui_-nYu>-{MCuP!U2VNYM:/<.L*;x%3R_yq[5G@j}_2|l*kyo(%NL7b-6kqCy&' );
define( 'NONCE_KEY',        'IG(en0]>O~=O}$N)!*N2]7{FGm<OeH}<H]2 XjHoC#j>ugzn)=c}p-dYh}iYzK)A' );
define( 'AUTH_SALT',        '.vEqCyQXB|0PJ+~b*dd1~e_]cpqb;:<~w-O@26&Xh:A]sXkt <>Jh,T+fSuX1zY0' );
define( 'SECURE_AUTH_SALT', 'E2r1Xa-e!Gy; )7lhn.s75-DY8=E%r@pGi?&yY?kAyY4cE>3*W1|}xCGn2q,!/ue' );
define( 'LOGGED_IN_SALT',   'a4&=d}^|Q!HDjX_7)c,0%voQDYR}:oh0sEOe;<ic40qz5.h#VMLm+!d}bTk88wlL' );
define( 'NONCE_SALT',       '&IMADiE54Og2Jx`u G7*2hf$D>zu<Jz2cdVa~7!|CW }f fg/KqOLWTAEk d[]:Y' );

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
