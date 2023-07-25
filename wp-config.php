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
define( 'DB_NAME', 'rutabonanza' );

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
define( 'AUTH_KEY',         'oMPJ:qsP|G#M0>jwFn]ja0<<8&5/WBwmPM]7~yZ2ZpAK{g4PrY%4f`)tH` uMi(^' );
define( 'SECURE_AUTH_KEY',  'S(p`}+C5B%u?%P;Z6h`ssoMv6:f<D?=$!?i2nI!*B={.3%el:^xel>Rdv5S/4SG:' );
define( 'LOGGED_IN_KEY',    't9TG3N&_iW>Hb7gAw_PEcc1(}hEbqrQ|ANP@[[<&$%uP4pqKz<K-US:.5@=$bPdS' );
define( 'NONCE_KEY',        'egOsGyNWvxTS|q&4NxnHMZ!vnRlW5usaf+!TQFdMw<`S4_)IyvUJ>y e<8/zEK0N' );
define( 'AUTH_SALT',        'QNG8mjDj7z%r*#Ks[ApT8 A}0mCYwxKwN0D#eyL+/hu|k]v]N O`G1%nEM.F^378' );
define( 'SECURE_AUTH_SALT', 'G:C}=mB_+>XjR1^q=DGONq8_F$s:j+),;R8sS^nv6R07de^x5R@5Wed(l#vs$2hp' );
define( 'LOGGED_IN_SALT',   'S3B)lhXcBX&SB4G.JLgXp+$^MZ>}0i>>FDp&5n!]-Eu*-Wof{nV)fCwNUQy8,.N/' );
define( 'NONCE_SALT',       '~nzkd!RBRyA{pY!}@a%LTGJl3{Vkcxq@-)qN=Ii/UdYfL/!<-$[1Q&|/g1;uNv~j' );

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
