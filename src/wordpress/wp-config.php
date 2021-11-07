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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'q&Iff[jwvD8GI.JsP.Sy$!xKR]0~H}u6Ashwp*I}j/ygQJN<{RrQ=ry~0BH=ug[q' );
define( 'SECURE_AUTH_KEY',  'uMmuai_EN8k??LNo6~KDZxPQ]jI#xMCsnI_*/x#mZ`n> $5~}!gZ#yoXb6ANlZ91' );
define( 'LOGGED_IN_KEY',    'Q1jf!+cTQNs+=nmtKBgj1{U@EIsk$p|Zz%yWJbuaov1@E|8?VizsXD/CaqW<8Y1s' );
define( 'NONCE_KEY',        '`{f% ?+v(>P-@YGKQI.;xl0L/x(#O21,7c(}==@y4rctM9JUZvaK9Q3I*,Mt(3Sr' );
define( 'AUTH_SALT',        '>aQDwzZ1u#);[hz`M<$(&9bt7vgc]tbyb#/2RHPX<f1aKRv{#Hu*D?LRB~^fNS:,' );
define( 'SECURE_AUTH_SALT', 'e9Ao[T>WBL#+mwj^9/p2I?`e(t-D0g2z7/FQ&0*Q)t0p(oqIOh*X1%}8^bUZu(R^' );
define( 'LOGGED_IN_SALT',   'yv!8tjy?#+} .Jn7KP07|XO+q%3z%0SSJOXJT%nD1EOnML)qsxG$MOuA,B?{Gb_9' );
define( 'NONCE_SALT',       'HcEd-/P*s`}~_*[H}duTA22d`Poyr,O3)[Ei[(&+C=~`!)E;#^Za+Zg `@yL]o=y' );

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
