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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'f=3O4OI?}MSo~WHjR%h/A{5ky=K_4b)5k,?$NlTxAGbXfQQ}u@jy`tKmW.nT&n9h' );
define( 'SECURE_AUTH_KEY',  '_x7b;za7,{Kl[2Rz@halh,k/1-sOM2<?f~ySaY[^hJ{o|- 7&GQ_y0aN~c_~14/y' );
define( 'LOGGED_IN_KEY',    '|3?}IZKK/bz}&3G`h2TcHyt_ZKNaR>iPV%*rc@WQO(6,JyA]ZyF5g+`b;s6>frsU' );
define( 'NONCE_KEY',        '31/7uXistz>b 0zd_eCfr-2]z+G qpCtc><JiUxe:s>52X9 >mzJ0(kc[cTxQD>c' );
define( 'AUTH_SALT',        'fAz6;L-b3ICE^7qRb#S,r9`7FNi<*q*+-0Zu.(DnS,r*F@eg7<>IrjGoJJvLxrm/' );
define( 'SECURE_AUTH_SALT', '8j/FPVj.Ogc[#+{QRu/^xlGh,eFxY6/ VXIg!asb1{c%+-^m4J01v/Y*Z5<N2C+r' );
define( 'LOGGED_IN_SALT',   'yrZTY]>u7qT9| 5%t=?Ailcd:>p&I}e!&!W{Xop;rr~|Y{gQ/0Ljs6PV7[YA[:dd' );
define( 'NONCE_SALT',       '?TPxZs,_`uE2oE6r6nt.C]%j1~n7Bs!D#;dg1Nm+h<:|cR.4;I)[E/Hz:Qhig.db' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2_';

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
