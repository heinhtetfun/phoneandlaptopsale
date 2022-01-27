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
define( 'DB_NAME', 'test01' );

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
define( 'AUTH_KEY',         'Vt!U /o(LNt!w5t@&;0~s{:WV/-_itqKx|+(5W j?A@~Y&vJX]|E2Y7V|)UC0n..' );
define( 'SECURE_AUTH_KEY',  'V:1zgu6-sT0 O7#U{+dBJnJ3$M~$s 1G#:Q9fu:/Z?NRlcR@l@!G|p}1X]rqC.en' );
define( 'LOGGED_IN_KEY',    'Ox<Iua5!z4_TI3)5LR6SSItIL@eR5*($_Kgr^s/vaJ<Kmfj4EKs20pQ`Z^DNr?rs' );
define( 'NONCE_KEY',        'R4JumuyFiclRtJ7sG@6CM/vTfW>=M=Pr0tuD4D=ed#M66qh=ryquQ|NA4%V4YWEe' );
define( 'AUTH_SALT',        '&H(5 W0h-$;oY3oQR4=H>Aj>MY<s9woVDNx%SVD+(]{I ,EvZIfgC`$1e;4i<Q5N' );
define( 'SECURE_AUTH_SALT', 'ob]^Pru0UK@Z0,s+}+O^q0(cu),`Te1G+zo9R^e9Cwl$)x37F(y*u`/T@.=a++A#' );
define( 'LOGGED_IN_SALT',   'Q0YtdM[_MEJeSGI|9>&|ZAIlR6H]:bRTGVUkrIl4})P97DhBbk0k>_%/6O|tl0aJ' );
define( 'NONCE_SALT',       '=*8`.G&kh^$Oz| n|x7:?sR1-%S+*VyTY`t  []$Ow*3<weKLCwS@sJDOm^B%71/' );

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
