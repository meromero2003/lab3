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
define( 'DB_NAME', 'lab3' );

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
define( 'AUTH_KEY',         '@|!.KHgC=I]2v<>H}o3cir]who3,MJ?)AiS`l|wkd|G5rAHHrCega|%H9crAH[AT' );
define( 'SECURE_AUTH_KEY',  'I:Tp~k:MX`Y)YT5s>lhr+}QJd@CY|<FdgtkLQjC]m$iFDG*-t) K4~C^H#x!tE1~' );
define( 'LOGGED_IN_KEY',    '*=|X4_14eC tz>]qNb}4$$v2>{Tn8k*[vYPhNxBq<&V;9ydLK2GMGO6x&72b69mi' );
define( 'NONCE_KEY',        'JZH4$4%*8T(=U1`3kkbPC0+Yh(0Y5]}d0>5O-f7m,KB*i57U#HYTY|@ZBT-0:tv7' );
define( 'AUTH_SALT',        'nWV._OUf}?p0lf[QW3CePJshb37<rFza&ORXx<-&@/btpD>G2zYPE03TNfZ]1)dl' );
define( 'SECURE_AUTH_SALT', ',-?fSa):FUS(R4i)e6mKAu2vS/cMco!`*Q$sMW_?qg>lwh!KE#7#_ ?rXBoE:KtR' );
define( 'LOGGED_IN_SALT',   ',Iy[%UEXedsYC?FS1,H6wO:e<[N6)aOhV/?Qgw#Yu0WM-KG`[_LFG:pRJ_XtCZaS' );
define( 'NONCE_SALT',       'SqkgF$%K.qr_IZ1;gNhZGcZ~:Umzt -v7:XP,Aqk=+w0dED93@96!s)Xu||&SDM_' );

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
