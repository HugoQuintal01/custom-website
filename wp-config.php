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
define( 'DB_NAME', 'uniquerugs_db' );

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
define( 'AUTH_KEY',         'D.D7ZA,#B-k9ErHEBvgvyy}V~gV,s?~&nE|7]tB~=qK`xN?a4eU;Z.=3x]RVvcjr' );
define( 'SECURE_AUTH_KEY',  '5 .aUNo${;URDMcFYt3Qm3a+W{*x}8NskWE_J2y&(1-c)UUOtN!=Dx)]`^<9]ah9' );
define( 'LOGGED_IN_KEY',    ',!>Ag=QSn(&Ns?@-)XluCu#P% @92j%^;fgKn5G:Oa^qTk^T!3lcjfoiEDPV89HZ' );
define( 'NONCE_KEY',        ';WmL?2lN(NO+@a)UuHqfZL@M/E[-%l26p-bH1eC[=nSw%np4Lyj$;3d;ec yB_+H' );
define( 'AUTH_SALT',        '`_mwSI{RbtFlZ%@+0/[)ECJKeqkS`98kTF)Y ^/Z.O^H([JclNFgSG?mu0p&|9?z' );
define( 'SECURE_AUTH_SALT', 'T%=6wAQ1 ^QMgjg.Uy;0s-Q&|h-fj#Evlj:a@BHQr .%vo%qH$V$d<?F1ZH&#|0M' );
define( 'LOGGED_IN_SALT',   'Hz8)i#F6gh4j( %]8tw<H~n%onaK!?,&87}@xNy83V;^ ^pm@E9.zV_^F2r.){Vn' );
define( 'NONCE_SALT',       '=O6Hi+;c!Xbm.V[U=*BD8Qd!*j[`lGi-OgT}wnZYmF4x4tBxSoSa5odE}+D~w88<' );

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
