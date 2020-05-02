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
define( 'DB_NAME', 'salafiweb' );

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
define( 'AUTH_KEY',         '.6kH9UNZy]!OE3FlZ =hI}96p0]5Yi8PSoERn]>rz=YEO7}m@|op#~C<P~oUZ|0u' );
define( 'SECURE_AUTH_KEY',  'Ll|6%g}%o(S{dn#72@Ka1-;-!r7_U]sKjg`?QXtM4Xem9`90$-AcoCkTZ*AEMZ<=' );
define( 'LOGGED_IN_KEY',    'E=0&j[r]L5ktM9Ctj|1Af`k9jthhWU_iRC#-je`sscHsP(sJ}W.)R=6O*>Hfu8}L' );
define( 'NONCE_KEY',        '@AN !}, g&GOaYqUIkt;gsXw H-BM6_m.#~%Uq q:.P^<s:s(T-b,u-iMY{E[J@j' );
define( 'AUTH_SALT',        ',:>kjXjN&}e(<UIFg|+3R_1T1&TVlkgkpm<j=~2g5X*zYe+hb`A$HX+Xmc2Q17J=' );
define( 'SECURE_AUTH_SALT', 'b3>#S69k5F] W/1?BA?<Q:0Ma}KWlEZvi6X,3X6OTSHJ1R]nbuP>W-&00zvyPqVF' );
define( 'LOGGED_IN_SALT',   '#y4)&XWEZ{-x4N^BvR )imdvaGru3BF21 d$.TvV34|//S`2Eh5 sT5Y`u8sm2n;' );
define( 'NONCE_SALT',       'I>o8dKf(%R64yCa}W[p1!VQ*PRN1lm)Eg9!|-s#c=sxGmwj)H[AM`_S&3Yz35>#w' );

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
