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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'mq4`!vNE9n;^3G4~)niv{NFZGT1rMr}B%j>ycB2(`^Uk}T1Su#I;#&;D?o1l=*Ye' );
define( 'SECURE_AUTH_KEY',  'o_DQ/>C]btO:2mbiuVg;60f^9*ZD>INW@klfz_o?`y@c+V+(>|d*Z%M?rhP6+||~' );
define( 'LOGGED_IN_KEY',    'tf9k$je&<5?f&W;DCLkO10JzWTjE?u@`@>PsYj).UPm]O@<-ArBbHk79*QV1v^<e' );
define( 'NONCE_KEY',        '`}y~a:g;hE%Xw=YkdVARn+?Fy<^NP?GG|n_%GTe[zBfpnv0{7P@#](,0EJ)TGwrw' );
define( 'AUTH_SALT',        'v$II*|!W2Np[Z6l}/d|_0G!i&OYHK03BQX,kwaox%@Z}]K//5Hh9g`CJmr2KU.w1' );
define( 'SECURE_AUTH_SALT', '+S!7O.HnH/+/ZxBVDeH;]cs~JP}$j:QG:F3BWWz!IVGOu+/qb[gQ;{pE~uvl3iC%' );
define( 'LOGGED_IN_SALT',   '%K.$]nheh<:ELiJR=A)AO,{%)&;0drdwj&k,|4,Lv^x^Y?3Yz,E3&g!oH9*kn/1v' );
define( 'NONCE_SALT',       'LHgA(gp nXI@k=J=fSk?@vY0}[TTj2Q`stRdcTB}BW1~%UI D&>s{5{ktG?Cf,3t' );

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
