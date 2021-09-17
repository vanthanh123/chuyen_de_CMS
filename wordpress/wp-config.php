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
define( 'DB_NAME', 'wordpress_581' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'c2(Q?}AN 4xFYU{v2[PLhH@5&$JL{e.9D3e5r7yrAT;hZoqL0Q^+HcK+6)D4af$|' );
define( 'SECURE_AUTH_KEY',  'U`K#rMl9grLqa@(yfZ&}q79d/)h>P`+%)Br -y.i#;?i9:,yVcYK!R[&e/_Q+lVK' );
define( 'LOGGED_IN_KEY',    'vmy4u2L~Z6EG@!Q$P0.R#6g6K4|VItG2&;3$F#j@>4-@Cj(R6dWJN_DD5H9BETB0' );
define( 'NONCE_KEY',        'GmdaI1j*&GR2>&qd>}4L65_ f|T>la}qc$2@UA9LA`~+M6sfuHYeRc/&%+WY4H:;' );
define( 'AUTH_SALT',        'jsvB9%LIW94):|MInMGVR@c#=08B^HYxvjTU{dg=T:>>Lw$%6{2#79-MHs77!jVu' );
define( 'SECURE_AUTH_SALT', 'u_sXVBg^+GO9;.zIHj#7KqGw>6gKq8w}d;|B&Z>7.F{TeyAl#T~{T4CS7O)B ){6' );
define( 'LOGGED_IN_SALT',   'Cl0m[XIO_wQl|p`<:(B>/~RrbZrL}fQOj@^8y<6DDS:o%_2;}d0ou+V~6E4E6eP8' );
define( 'NONCE_SALT',       '9xW<%r&OPy*4e~nIrGL+,a#D2x1[+`1$ps5xw4SI*C[=Q8qmBn#)fit2wZ CdU}C' );

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
