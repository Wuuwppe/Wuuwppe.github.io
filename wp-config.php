<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'AUTH_KEY',         'mW7XUH%Tv*qukSGOmgB9bl,g:VH,Ws=aIFBWM~|vMvfY@v/p4v*tMmNsn&}SJ>}c' );
define( 'SECURE_AUTH_KEY',  't/#$.:W[Eep{j5BF84ytwgwoFS*3S.yT0dW|tn*)lU)f4|C_XGojQJgANUUu&Kau' );
define( 'LOGGED_IN_KEY',    'zorTXMGm.[L6iI>kpZ,hg_%],nrR]xN7-I{sagJKAT{Gv6xG5;=IFBo !uR{iVWu' );
define( 'NONCE_KEY',        'z[zZw7Gp|Y3Um%UW2;1(,)vu{[E~(K3hiE|[3?jzF=ED19P6n7$5qu2@r5T+3HvR' );
define( 'AUTH_SALT',        'xiIoiXwi 3k-BpG~W~PhM it3f4mX),U[ZIQKno`-gob(@N|7oN~.FVts^Q;w:zl' );
define( 'SECURE_AUTH_SALT', ';gTILB-NB4AexzXBd% paJ+MxJQN:*f[J/X/Mv=6w330k#a=y_^U3gF041UXsZXb' );
define( 'LOGGED_IN_SALT',   'o|Uu;y8rMaecDiPT~$o=`~juh_/|rY,#{5] X}|R }8[Mb{[=iEie|5kIU>Q}7Y~' );
define( 'NONCE_SALT',       'GlA9Bt,9Denmu@!GIUrLBQN@krqKAg[,bI)Kt$_Brke$QnR^PttteJ= E&p9(UR`' );

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
