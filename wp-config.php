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
define( 'AUTH_KEY',          'GdJIE55vj}%^YcQV~gmN?%DX@3`)6lPuMH#n/hnQsQ{([#ej/yYkse#p>|T2gaFO' );
define( 'SECURE_AUTH_KEY',   '{l}(HUMs 2>0|[[.(0da@*pF%(Px2Gi4Z(NB8ZE+s^T])O~V5,j9H|V.al%0;1|R' );
define( 'LOGGED_IN_KEY',     ',V%SL,Zq)^yteNZd*MMF8%q&$S8`NHwfwz^e@`o,$1}1UnkNqVl_(rb2`8E`PN4e' );
define( 'NONCE_KEY',         'x$b7NtzL326mI6xpGMU]TCx_VG|Arp!jyX^AL!G7J^)M9r?=u:$>Fs&8a?#IP1qc' );
define( 'AUTH_SALT',         '0TM*RTG/N}0-w7woZ^nSgAeF]6X7D,*42JVS`00d$X?338n/u[D.o%1+[v:{?H g' );
define( 'SECURE_AUTH_SALT',  'FIe%I~4RNsZy+#d8z%C$7>HEQQ>zY]C`I6:t#;)eufma785AQ{^e@Ln|=I>wEgZj' );
define( 'LOGGED_IN_SALT',    '2mb`%g4Q>ClmI}F$LzS>L/AX5[=7yCZla&oEWA00tKZ0zq4nq6I;pK9rCA=PRcsm' );
define( 'NONCE_SALT',        '+bRH}zUI!w.J:a%OkG[t#XU!++1=N[+~*fazH>%uj.2};dr8VY,UTs1Yh[!>D%`~' );
define( 'WP_CACHE_KEY_SALT', 'nbUrZ>[2L1[a2]Bl,5#.Ug?lTFLI4Q-7N]Fm,B}.R%wl(-.n4[joN_}Rf+-dm4h#' );


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
