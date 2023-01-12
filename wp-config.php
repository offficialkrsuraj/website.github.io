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
define( 'DB_NAME', 'new web' );

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
define( 'AUTH_KEY',         'Hw_I!+m<Rjct,U;Xfi8fAC9#4^Lyl#){EvWIB?Cfa^A+zzGw26;Y5c?f~Y; -kMA' );
define( 'SECURE_AUTH_KEY',  '{d{XOzKeE{DdDczZUBO_8s ~#@,CpF(6!9}%BwSDYVtn5erteY{Eaj} ^h1uDF(E' );
define( 'LOGGED_IN_KEY',    'TL8u@nlsMPT$*m7_cfO|*EzZN:RghluvH5M~N6X]fmOq:L(#`uKIQI(ki[}^_Q5W' );
define( 'NONCE_KEY',        'pRyCBjsORXl ER@@_d+y&z?gi+u FS@K8O*xhNMZi9iKQq^Z?gX6sBWJ^eoof0v1' );
define( 'AUTH_SALT',        'OklBPS.; afBCW5w}|JC4602}PMNfi3X5C6A2K!!F0)H@kCALY|{.rrQI^>eFD.P' );
define( 'SECURE_AUTH_SALT', 'Y%rL~Z]b5WrI^0m..tCzP_pbP9NB6dkPeXEQ]Snm_S}&HA0D5;VZ{}uqs*8pm*H&' );
define( 'LOGGED_IN_SALT',   'mXPHnxb&r`WXA?OG3YKq?pBpzA/&kt|jH0zu/qF)pPm7UCKT3}m6}/:m/Zv:2T}L' );
define( 'NONCE_SALT',       'SDp19:/D)SPrbqtgGN;Wu2Rm0aB;,>#;NXb/Y]VBnIjIoZ~yPg1dO`>j*/Xa}jvr' );

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
