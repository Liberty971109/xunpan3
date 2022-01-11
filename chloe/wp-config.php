<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo02' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '8}m,#1fZ!w,}X)H#k{<@H[PAvUgaCsV.WjFEVE&)y.dI3<4]S6v/e*Ue?-X=_1y2' );
define( 'SECURE_AUTH_KEY',  'ej]%KV@YL+x$%J2{kErLf5gXr%mya,HZ& _T_6p*i-do%{]i``Y,/8-0xOR%RXNr' );
define( 'LOGGED_IN_KEY',    'Yfk!)+ub|)b;VKi2n^{-/]|qms-qa2 F4s/@Rw3s8x3F9uO*c;@ty&eHH6j[}<|5' );
define( 'NONCE_KEY',        'kI-k,iA}8a4y>5d)NdUUCy$h3shm?JJl]{;~`?8M2Wjvi(_-t68|XKP4zO}_Lq#>' );
define( 'AUTH_SALT',        'mj;|}$:l}X<E;)#$VYPaZT8>G#puTe1iA_1!T$fZ2RbC.AT8)&{@=Sknu[qGDZc]' );
define( 'SECURE_AUTH_SALT', 'GUY$KL|h~P+]i])XQVdgAfq?_;M9BOgEo02&f$?HDhXe6h3Ui)J2zE;0D~MJvg/|' );
define( 'LOGGED_IN_SALT',   '(O{NFqf|Bqs]!^gjg%DJNjvH2zqjP[[dxchL+r*YS#(s|K|8buK-N*(*81)z=PQM' );
define( 'NONCE_SALT',       ')Ko?ZJr2k7by}<OP?2QT{>u0RZZ2/H&W4A|Yo$DO>n1Ok,7Fi|TwooT2ks5q6hhx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

