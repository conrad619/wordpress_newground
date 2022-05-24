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
define( 'DB_NAME', 'twwp' );

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
define( 'AUTH_KEY',         '@QZrEA}Yob6$%kKkNDMpv`S!xNG7r>LkV?=/0NKE0rU>g]*>>ArG{V-:z^sG0Q&K' );
define( 'SECURE_AUTH_KEY',  'mykHK)M( $%DCOWv93hB1#}Xt0=7>F#^f(EJ`Gf,jAKtfN<1D1Frf ., L@EmHDj' );
define( 'LOGGED_IN_KEY',    'afj|GVB+e9=05I%r7a@#!`E]z5CMbAQRf%8y}JG5[=}M8JW82cI;|<.5Xu@:$|!U' );
define( 'NONCE_KEY',        ']fP[IT.w#mZoni.7hJ+`{lOEW0HQZ8`K:G|&?2:8d)u+#GS,BMy3XM9N&qn{KD1/' );
define( 'AUTH_SALT',        '>hQvt=Xj(QEO*75Rg?{tu~1cI,Od!eeg-mpxZ+9F9w8B8;kN0s40E++Qh94i47G_' );
define( 'SECURE_AUTH_SALT', 'o/I*3o/3VcNAE_=m#Wunu]$AwM{}V_W1t:gMI.70r3JNFmDp0~14TGR|J04oyA[$' );
define( 'LOGGED_IN_SALT',   'mh7k:Fo:Uk,8VRqt@/%gv2Zw ~@wC0_jriDB;9w=k:&qN.-U8QD;? acY<~Y|DzL' );
define( 'NONCE_SALT',       '~: ~B7wTCrMhveH!Xqx>^t>S``Vy.h7bBOed##A2cxf, N?zzgg([yU7FpuL9awN' );

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
