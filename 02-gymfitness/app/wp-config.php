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
define( 'DB_NAME', 'gymfitnessdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'myrootpassword' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         'W3yTCe^$Wx0z*$z2*>`(Kj}=:zk>hI=21*c)44sIKg=V?+)8-6yWqy15q6Je)9ig' );
define( 'SECURE_AUTH_KEY',  ']@JIRKLLGVZQ]pOpIw~)Xc)u!H/nrV;aCP*!rO|5vRIMI^iK}Ch*S0*cdpx>u|n6' );
define( 'LOGGED_IN_KEY',    'NLea^Hz)ioPRcQ;Xm}i8<f^s^`dcab}Hn;0Pg M/E+eztsIMsWx=f_$m{6eWg 6n' );
define( 'NONCE_KEY',        'GwlSo@>c}GMW59DcY|`?3nu)zMhYf8#]I4l9U|YQmQgNOGVXE+Q=|;[*(/[rJz)#' );
define( 'AUTH_SALT',        '? g7oo%.B!B]EkR.D7-f9/47oxf_IPgl~=^c]~(&OK&xhS&[(VzX(}|yZ5c,a_D(' );
define( 'SECURE_AUTH_SALT', '#z{K0$$)Ct&UvIy%&#z]VD=3ZH^`Cm~2WcJkTART*<K^cM>;7-q2Fj8ywN5/4oD^' );
define( 'LOGGED_IN_SALT',   'l9.hgez7bI/Bhq4Q)PkNis&VN#eG!}?@%.KqZ9A!M<V``Kebz0)*VJ0/q?e ^/Yi' );
define( 'NONCE_SALT',       ')OuA?E)AfNqTWqFKLQD5@e<*)3bN5rC&xz2}0Nhnz5faZ@c#8&1HO)|XpI@6tqA(' );

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
