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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'Yh7N0;sLg]KNbJz#(@>1tZ!%j(-4/+Sb4<`UI=$[#U0x.55NpZRb]JTf/[^uNW]n' );
define( 'SECURE_AUTH_KEY',  'e#.u4D&o*+s xl&Nuf?GHtR*3<U](qC,k<iWZ+JHl^@qY*86&*qfHxeWmJ!P(KKI' );
define( 'LOGGED_IN_KEY',    'zkTh0?-ea5_tT}mO@<]3vd5XDI/2^Q%_y:eQ-&_du!PgA $fd<M&Y-l}wmNl$If9' );
define( 'NONCE_KEY',        '5*0%i?,pM/VaSi^ewMWGZE)h}a}F6t?::HnY`7 =y}UA;Um{/o$Mr+q!9,4E%8xk' );
define( 'AUTH_SALT',        '59H $y=f$``zg-|.T$X[zOn%h (I}! W}{B,Df3XuE-UvOdKoAbe~a2v%G]V4B`v' );
define( 'SECURE_AUTH_SALT', '&Y,Mh2Y:Y2,#mV6hge&_<x*Y^l@os)$X7O5{]8[=]Xba25l5Gp2G27aNGPp@;H=`' );
define( 'LOGGED_IN_SALT',   'y$|9:+}C%k8lYo kL^QwRyr7pK>hd#t73Nw&*Ec_i%9(+/fP*rfz7~QTFe0miw]!' );
define( 'NONCE_SALT',       '?Awa(EN+c35K@A-:P;.zMUH:Xp#gTKL#20tF:?n;R@!KJ;`P84RX;V+0|/j=9rvZ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
