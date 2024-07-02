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
define( 'DB_NAME', 'Stomatologiya' );

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
define( 'AUTH_KEY',         '&DyJT1XXKIezMzz-j@e&YR,z9T>{0zmVa>DOi?D4hyup6$XA}jBh=PM2RXv7^qC#' );
define( 'SECURE_AUTH_KEY',  'D+2Q]3{(WP{3/N.MqV[T)$iX~CWu$+:BXgEKd+,,fJtpQ}zQ~iZuX8)=Nl~|xs>D' );
define( 'LOGGED_IN_KEY',    ';g!5xW-tc[LDl#IWpE*SxBEr>sml^YwKLu8<4nt-h91j.,hZpi3^pVjFiu_6&z,#' );
define( 'NONCE_KEY',        ',fA1<U|+,e2zPLuJWu@VB7F__d/s JbYuBaa{;86[qp#9?J<vhv/nnUo7#/71.!W' );
define( 'AUTH_SALT',        'VQdBJ9- 0H=[9l^)UD?jR{igVMuef&-8vi 5,mfX!/7NV]oSh%8?y]+,,GE`5tF~' );
define( 'SECURE_AUTH_SALT', '%Utq2EV<[vEFK>^~2^^ZAV4oc98o&7`IV|6mIB_]2[HNMci@E.mC^:3ce3+uw?2O' );
define( 'LOGGED_IN_SALT',   '6**8&%+-;}8gj_g/hJ}nHGctj=UG1<p(;LWv9gP%Xl+Yr%{<=2a;s:MZZ/k50>Si' );
define( 'NONCE_SALT',       'xE7Go.~Q&}#/&fO?I-n0X35K$|;<4kTY)MV,4sxYvcZ{yV=|hwnBaWOtzTAjTK#Q' );

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



define( 'DUPLICATOR_AUTH_KEY', 'Ujp2-FC+y:s:=s(yc:ODR-)m<*fa8*NfCpzDlmgW=[Dr!w7d5jKT~I8;7r;j)F_d' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
