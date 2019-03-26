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
define( 'DB_NAME', 'arkamaya' );

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
define( 'AUTH_KEY',         'p+ZZ,yEg~Y8QvsXH(TGoPh0 0flALi@w85-co<N2/sa)R)Z+X5]Ma)m0Hyu|DOfL' );
define( 'SECURE_AUTH_KEY',  '(fE]qrqzQ@K7v,iRQL;AoZGHC4[x273Ss{9e;CGDSm?eHyuDs*v>ujE-U;DZbl/+' );
define( 'LOGGED_IN_KEY',    '(AU=$UvYVF+zzGkh6xoj X,8pV*s/X2E[%s?IU.]UZjyDb/-`N5qq#)p:NTYXVoo' );
define( 'NONCE_KEY',        ')wX.{Mn9CF3Of<es3rCVB@jg`)to@V0EhRIAQvrpIwa]]H!!{#!,+W~lTx|%`(GM' );
define( 'AUTH_SALT',        '=~o}IzCP%!q7`61n$|eux#L=B8{X5y]2VjLOOW1gG9m!CZ#[[A)btqrM?z#d?)6b' );
define( 'SECURE_AUTH_SALT', 'j0rN^!ARJX>Q|fV@plCJ#gy{,]SwNlF|4K@LHfPIu`o+hN6,V LQMNh<{hG|BoC.' );
define( 'LOGGED_IN_SALT',   'Aoy:7*%OXRx9Sy3,LB?h>SSltJ}fe{g(3sL%eR8-v *rPg?5]:e5-|B%}X_+zKp*' );
define( 'NONCE_SALT',       'A)VqcN;cvD|?W6.bizUr_AHR))ce0/2!hMb1Xw*Udb*8x!Ce/Ea]32#aB`1]r4#8' );

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
