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
define( 'DB_NAME', 'wooCommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Fooly@1251' );

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
define( 'AUTH_KEY',         'ym-DTW/}33M3qP+M`.`ogj<Aj<A??G:nj3_#c_b5 =dY0z$|~pH65*r/BhjT F$6' );
define( 'SECURE_AUTH_KEY',  '2x.OZ]~gbc W!PMM~ IF$W:9VRt4q*_Kpq6:;M!y4pI$`u*Jkh2B@[Bi#4p*v$6,' );
define( 'LOGGED_IN_KEY',    ' 6F+)0o3D51s]f08U_w|`XEv4Q:_apTHYt/ks}cW[W7yV+oN=o]f:+&j?nU;MU|V' );
define( 'NONCE_KEY',        'ZrSOT/N!N%%Y|8@qX.D7UQCw6D#b{H5t5-z*ST~Wqa@L.[ZA?bAhF4$A2_5Wpk@q' );
define( 'AUTH_SALT',        'SC}GO&hMH%Dk9^3oDOa4K&7<^$xOBf?Iave}lcqT2xh{`XTCp}:0Ji&:f9M&3v(&' );
define( 'SECURE_AUTH_SALT', 'M5yV3!){G_CL~n&eu%oGz?[Yr*[{A2OS:kY}`z/[i&hWQb r^7>?7,YrRj/.#gBU' );
define( 'LOGGED_IN_SALT',   'fYc=7xjs-s]K;sxeoTXrdW^r>nzAyr3Vf$<~{0Z7Shi}O(xmqe^4wrv/QmjFLT:a' );
define( 'NONCE_SALT',       'H.x$qiuG0n0vXm~OAN!)r|Utuj}Jcw!L81UKMzY$k}/J$(0;:vv^zpwP5Uos *b$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wWc_';

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
