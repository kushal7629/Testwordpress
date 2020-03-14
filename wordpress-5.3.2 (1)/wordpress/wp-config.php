<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testweb_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3:/]5^k/DI2;_vq!j%ccW`de:#_RNAR@%GY?>bExDk3kk_Yp*`qs^*`-T/=4=#@:' );
define( 'SECURE_AUTH_KEY',  'pxV|RywZ{u3c$4P-stq[i>n2Jr&KNJ8/o5if,Tf?!WCM@0!ddJrUO(Fv=e>d,X_R' );
define( 'LOGGED_IN_KEY',    '@lkqU88@},i>( 3r=ZK(R2`2k~uwIb|uhRA_lBo0xZj5e?Xubr?8s2ls>p;%:79!' );
define( 'NONCE_KEY',        'itzY.Ma^rk_<F=hY`ya.HId >ZzI sqD(K~~bXyz{aASy%>YMK)j<0W-4z0Qj)z5' );
define( 'AUTH_SALT',        'n?-usbK&{xnMz/XV=DC ATo~raD_@XwVuuVgB$7<?9[LOHuolWg0<6^x,E`]!oJM' );
define( 'SECURE_AUTH_SALT', '<FF|At`fn19IZp>#x{:7D/S=T27B,V>XD q|g%WX;:=)w:h15m.:{W-*KHTy>Uu,' );
define( 'LOGGED_IN_SALT',   'iiiU2U&{W^i9?|U,x4+4nuu}hpJiy!iFGwbCsyx/1CZ75G46pRNqxyZ#4_0ujkGw' );
define( 'NONCE_SALT',       '}MjIm/,Jt(yVSTk*[]T7y&-~f^tWUmY/Vc|wh,AMFs$@l69?`aFk6rmlyoSq#8D)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
