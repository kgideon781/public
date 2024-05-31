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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '@;%O+DHI;5#$5S,X6LSx{ZiO X0Rc}T;<6GbwA#!pXU?,IG>9)pIE}D%hA(I0Oq!' );
define( 'SECURE_AUTH_KEY',   '8#,%bv~5ks;q=zkKM**ips7yh>1B7tV36Kxay_7]-@x/o8?qnucz<bh&$9eSVb[{' );
define( 'LOGGED_IN_KEY',     's6N*kY_DpS6+W=)HGttgNt>]!P3.=:*r_d8&_XW(a[aH,ODX|N3]NO5^/Gi>+RrX' );
define( 'NONCE_KEY',         '+W=1MV($ezSO>O Mk,Cw/.ZG!}d/eaK0,d9NqVp?M{W1q@Qj3d%!R[UKRBaRxQU ' );
define( 'AUTH_SALT',         'u_XE:Ld[@wG&H$@>sT*^?a>Kb+rH.eq+]P&b#UGhGh[vDexe5tx>).#0z1fG]A,#' );
define( 'SECURE_AUTH_SALT',  'v-&|ELFJ1])OJ~lxR7l;P0dO3XUs@4JHs53xJ%3=q[-o~}Q1 ?x9dFrU*bJLtY|@' );
define( 'LOGGED_IN_SALT',    'k[+mj~lL42g]2&*/cb85=`V= NC1{0op/#7`%W@SJ;U#{X%?@c-Ju;]&l_:hcH8+' );
define( 'NONCE_SALT',        '543T)yoW6P5l7mC1{NlNfh&I+{fi%c?AG+:v/u/&t#HKNtR`p0V<fxhylLisW$}f' );
define( 'WP_CACHE_KEY_SALT', 'mC+oh=6ZYY`BCDh;O[P$$P90~h5jCc)$YQDo#4h|!4O)VLM4iJyVbw6iK0W{aQYu' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
