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
define( 'DB_NAME', 'wp_db_usbba' );

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
define( 'AUTH_KEY',         'CCF2m9eKEHY@A(rb)nshJ1i5w~Cp6F|[R5D/~!kDU`2:WIhAhq3wY,Mw@m*#j3lz' );
define( 'SECURE_AUTH_KEY',  'smIgdRm/p[vZJ{D01z5zFC<t4]c3of5@@9V`cxO},z&^F4;%WGAXkOSa3MP4X|V8' );
define( 'LOGGED_IN_KEY',    'ruUaDp9O() +>job_>(%9!8:u;DDasay4_/9x`aJk,8%23i(Q#][V(XGm:&2({ P' );
define( 'NONCE_KEY',        'R%P`X8 @+|XO}*M_x+>#;a}E!jwTDBEf9XY<s:@K2y5rtUS%]78.3UC{9<w[PJHm' );
define( 'AUTH_SALT',        '1,MhJud7}4VM~-ZRshNfB2*w1Y!Nc-t1TE1S*YKY@?Sjf25v?R^t.MMo=I:GLc.%' );
define( 'SECURE_AUTH_SALT', 'zIdJ?! Bl+7wn~]!H3B!hNXwXan&p(OZ=eT&TF81#ELDH)96g$g&MBpN%><EAN}^' );
define( 'LOGGED_IN_SALT',   '6V.#1|K8/(=z3TiDyGD*[MAjH%mT NN-omqr2fubx;zgL)+b-_Xu6D%CjG:01]Mp' );
define( 'NONCE_SALT',       '-%FSXVn^2p^6AbyIOj)dR!qCXFx<N/Db~/|{+mqlC^v2e4_kE9NWp0?%ToafC+h1' );

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
