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
define( 'DB_NAME', 'event-organization' );

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
define( 'AUTH_KEY',         'HHlMUd[J(JH?0%F}bW#ulppPFu+N5S^v!bD}~1|6a/x];^wU*:FZtD5p4@s[~3].' );
define( 'SECURE_AUTH_KEY',  '`|&Ki!E@@J{@hDpjq&s%l2$z[p=tcqvNh7O3>e{:VT3l;#O5glOf!kIdJe*pDvmQ' );
define( 'LOGGED_IN_KEY',    'pILI:]`8,uhqp44Z,>N_)dGsYK)fwB %y5.ssVI+O<Uj(CN0z&EsVwGAn. nWkit' );
define( 'NONCE_KEY',        'Q2B:ZHSR59v<T!e7M*T:e&H3/^@M2Cz0|:RgPPu:,j_tI|dY-KiU7@~S=7?;z<1k' );
define( 'AUTH_SALT',        '&GNI=%s|IOIG&[3rGE}V}Fpup3GO:=e~P.C#v=RBc8(U+6VPdK_WW@uDUt*KY|MW' );
define( 'SECURE_AUTH_SALT', 'y^BSm#})B-b+5&b+:=bE 9O%@.wR)u|IZ1TNF.tAJC~0*N/.zG-aLRx|[Wv4sP`$' );
define( 'LOGGED_IN_SALT',   'x<{XJ(! v[TVS[d5O#(kF!Vnz@8Zlp6m-E|*Wi;pq(e{[9(21%%45p@xdkY`{),&' );
define( 'NONCE_SALT',       ']c:g~`Ip:xtVCLQqO9lrK0hd+.>VvN8}2 tV*}oPm0b6r`e?&;mdDrWMk9aqfGT(' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
