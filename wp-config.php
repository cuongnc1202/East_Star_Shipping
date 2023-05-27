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
define( 'DB_NAME', 'east_star_shipping' );

/** Database username */
define( 'DB_USER', 'east_star_shipping' );

/** Database password */
define( 'DB_PASSWORD', '/XOsm[fmgUGoTEq*' );

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
define( 'AUTH_KEY',         '+P_#[1vmvUwC#.mpw<&My6,&6sSRs>tY`#.*J8UX6k-&1}vaR%S>sY$?#7=7ZO+7' );
define( 'SECURE_AUTH_KEY',  '>~z8I$k3kgs#_S<lt>Cnrj_NfM8h_:Qg>0`}xYM,]1sm7$h)0;8X,4zX`%={iY]/' );
define( 'LOGGED_IN_KEY',    'Ob8Du/oZsp8=%<Pj&xi1RJ&8WSt@<Af,D+%xzwja)!PQY(s_`V~mIe/1;0Cm]WSb' );
define( 'NONCE_KEY',        'jBL|&B(K*ijNyfQ`q-(TF.!+YN`DoQwW=W0x>sreKp7px#1K-TX;b!:{3:lZpc*#' );
define( 'AUTH_SALT',        '3&<?Bl-!04&z)CoH,(3o_rVxcy[BLN9^c|iSR!Sq0`UJVH=s&V0^#WFleSSuG1!X' );
define( 'SECURE_AUTH_SALT', 'mcXyVGBmN^aL)hA@2jaut5G~w.+E5oDW=fpX`z$g#S)J,S-Pd)^+?VI(k|*/GgvO' );
define( 'LOGGED_IN_SALT',   ' d$%c]y`Ggp=UN{nU4+b;jv^EeW[>84m0oR/wybBMe9U^[%ZJ_J4]79}RwI0kyuE' );
define( 'NONCE_SALT',       'vjA._x?N$wwB-?2PSi/<*L{YzNcq?FpLV$`8qo#N*8Z$l}y=C7pu]&.uq0WgBL%d' );

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
