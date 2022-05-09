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
define( 'DB_NAME', 'gccorp_db' );

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
define( 'AUTH_KEY',         'e}c^+2^R{FECf2l&5F.wD6Y!>bI6R8DQ(N{COkWC(&kcnb653p6!Q#DqsRe~NX|(' );
define( 'SECURE_AUTH_KEY',  'n?N2S%1Grd:L]bmEbsZ3Im,;83Xo xD%P,|sf7SM>^lxYB,&6fR;v%dRAoX2$<)Z' );
define( 'LOGGED_IN_KEY',    'D4ks.de&@Vs:Y.yz%~W>q+6{}zvVV1d_$d8z4Qc(4M_.FdH#!#>:ZN`BI%Vfz#pp' );
define( 'NONCE_KEY',        '|Ac!(l+kXc.}OYVw!hN0>%%~MR|(DVg@4y<oi8._)8^!p3My0yD#_By<K6SJ({ma' );
define( 'AUTH_SALT',        'm[><Px7D4% ~fRD>V@~g-[uVfqWl881Q}9(T3_nU +qC0QPFvHJ7N=v7(Zf)@>R2' );
define( 'SECURE_AUTH_SALT', 'FaXEs@2Xb@7f+>z2?tCb5!$cnyiC0]mO>DU>GyG-4OM<<2h`(<^u;4A;-K,B$K5{' );
define( 'LOGGED_IN_SALT',   '4G_.3x}k@vf~_89;~j8[WR8<D6J.5 8x?)C-;|O!Ma76mO]PkJ}}qmDgf^c=J/a`' );
define( 'NONCE_SALT',       '[kqvAZlx5<%.z^[~P|!+b**h=e}wXba2Sr)`rQe!Jgs$&UQ.m?vFXM|_s?whDGE5' );

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
