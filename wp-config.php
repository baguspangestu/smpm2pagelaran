<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'smpm2pagelaran' );

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
define( 'AUTH_KEY',         'x{3pP/pogdGEtdalDN>(Gb3`G>P*#y-]syFv+`^.F)P)AeLb8.TQEH1jurt$CTT&' );
define( 'SECURE_AUTH_KEY',  'pn O7E3>&Hz!Lq00&pdoX{Aya(=_E1KS]ZgOP!^.kOBvAe![Q<}z$_8Y`TP*`td1' );
define( 'LOGGED_IN_KEY',    '?BG8vG6._oFlD9C@T22:X0KTQ>j14JaDZ8WZwfOXW=evi3(FDpgi0vSW[Y+F*G$!' );
define( 'NONCE_KEY',        '{s h)U!]?q85V~k)e=Pn(jvMN}xt5iA4E5HIFI><2Ug($[pD[?~-(2ZWx,[abK<&' );
define( 'AUTH_SALT',        'Go|m9b 8dQN6ULRD))jC2t&`<ke#H+Se:k,4t_`ZLueqGf,THEK2Sv^@:;,T2F/[' );
define( 'SECURE_AUTH_SALT', '?ZKNR_+iJS(E{pmKy>=H!2dghh+BNIeW22-hxTB0TSl?-/:(.dP4x@+e~i7TF*<F' );
define( 'LOGGED_IN_SALT',   'ChRd;$}yXdIY_LIu~cfvZH)}491GIWhLF*Gi2hno*<4a]81]*Seyb%(ttf;wy9U=' );
define( 'NONCE_SALT',       'f3[(wzI`hoPVj(WXV-/<Lgb]3_]SbcDt%PC$!Qn@E];aQ5%DyzLyjE{Hv94?FGP/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
