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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_restaurant' );

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
define( 'AUTH_KEY',         'MZG-)axi+g.Y;]F1kaq`(G`j^!5,~^u1P#:_Od2 bhsl#!/s+T8G;!r~>ul</E:i' );
define( 'SECURE_AUTH_KEY',  'iS~Dk:dSr=G5+Kjvglw1`=aCv>YY3*,wme+Yz Q=Bi^)Q6exDZD~wsxcHE:CKv>f' );
define( 'LOGGED_IN_KEY',    'd<3/S_l-V;TN7<~rVZAW^; T%IXuWkFu=)Qm94/x#sf?n!>:6I2^!9|JI33Lz4];' );
define( 'NONCE_KEY',        'o=lMyS,T ,)o@Q}3|=*sVcQ;;u`pdYf85b$T}!qqLDo elFT#Kuh_ym@r[uuurm[' );
define( 'AUTH_SALT',        'FUvFf^::n=N|eeC42L/z8$L,NZ?qGflTQ4p/2 X#ds5RuH?LHz68:P>-/B-{ Eya' );
define( 'SECURE_AUTH_SALT', '164|PC X)~,* W2CJiHKb,&to3M8%B2gw!Wu!)uTJkh^rR:ZZx-.|7U{WDRjNi6:' );
define( 'LOGGED_IN_SALT',   '>dl[Rb:kRB-y;aKEICmG]kO`:taC,S>8w(^<@Rlns&S(Q`tvRL!k97oF*SyAvivE' );
define( 'NONCE_SALT',       '3UFgUksX, eYU4tJmNh}a_BS//,m.3:GeJ^_hdW%3~$b|/h1]A /`O!0w{w,t^w&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
