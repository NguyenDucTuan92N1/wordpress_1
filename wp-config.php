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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yapxhorbhosting_admin' );

/** Database username */
define( 'DB_USER', 'yapxhorbhosting_admin' );

/** Database password */
define( 'DB_PASSWORD', '5]Te#TB)8*&o' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '*A9U853:B(vrd2ZMchH05%#D5:4Sz2gX3Dt(p[iw9(l]LRrdY6&25c]v~27~][:O');
define('SECURE_AUTH_KEY', 'rSB%Af~:B-3Lu*#hLXs5*]v1X4x(#5Susz2yq60D:0036EV&E2wY76Q8*H);a5nX');
define('LOGGED_IN_KEY', 'VwQ-wuihJ3m~651mfiF:geK;UGregPNpN/c:33dnHdd@@c#90]vJS9257/SkL1tJ');
define('NONCE_KEY', '05/PFHd|y1cmRx8o87rG4A(8MbExW29*4!YCJCu%c&xM@y+Dinz638248e48H[4%');
define('AUTH_SALT', '#]2mT/43k/#r2U0]!q]!a5%0[G~be-gq/26lGlS6l_Bzk_UBM~/M~jl3Y3:#6-YM');
define('SECURE_AUTH_SALT', 'b%WaH6h5+NMA2-+R|:RdKwk1;:-8PIS2p1g+llo2B|lbSD*7tJMb(P9~ca-8Zb-@');
define('LOGGED_IN_SALT', '(F(zN103]s4R&d+3;#B3)9KGHfi5HX+Y+]m2%7Om:J%sB9ARzg6x[AOpt]2UVD;l');
define('NONCE_SALT', 'trA(04p(4r088r(WRn/&J15s3x7uz2f9~5];4x;K~3Ks5tgyq5_708F9SdVE/mcf');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Z3utX19I_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
