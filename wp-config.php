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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\laragon\www\website\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         '[N,zf-k$ LC_mnRF)]$M$3=B+LR?=$4(qcWtBu1@S`<uW^X~L&,^7A!01:iW?RIS' );
define( 'SECURE_AUTH_KEY',  '0rf_UXXQAgcis?[>F)dfQJn%NMf.O{w9jk&%/c0P01S_3p|U]cF:@?aB#C`Fih~{' );
define( 'LOGGED_IN_KEY',    '!)Pr%uv::mCOaa{xAbb~Samvij/,Q-Cpq7t)ui4DnNq_^uj,K8.pE!.p{s,9`=Rh' );
define( 'NONCE_KEY',        ',`hkMK)/OnuxNo`C2M9P[8Tyqm6 ZtQu&UvmV3U*Dl.s;@t*;LHW*xvmE/`r(q<^' );
define( 'AUTH_SALT',        '*}DvTC )u1`Cx@|n/6v1 !OSNFU/Jhx6gEI0tPJJr~/zNPaVTIDXLwA{>LO`wA9C' );
define( 'SECURE_AUTH_SALT', '|h[WNsZ.Z;943+Y{W+W:p8~&sI~L_L=(ZoUtDr:-R;0>qCHT*atujb&OL,Xr-w@6' );
define( 'LOGGED_IN_SALT',   '4q].Ve}ll!=,=#W:SVv@4tESm:DMNC~OE 0!|(](OYgy}@&8tg)~8)`*,:rz.E<:' );
define( 'NONCE_SALT',       'I&{=-#g=m$)^lZyjd(iu0R&N$qIaLl3ra](M;{8a}`z&l=ck6:G{)KK[RG&QNd0@' );

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
