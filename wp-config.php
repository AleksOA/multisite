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
define( 'DB_NAME', 'wp_multisite' );

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
define( 'AUTH_KEY',         'gKU,W#VauBIF WIC`oJVU>sGR27^l!6<rc6+-z@pso0Iu=ca6k}ju bip*w$]P#$' );
define( 'SECURE_AUTH_KEY',  'GY=?GJc.YNdtudr>OOPVjsFX9{[[ws%ItfB8w8i7CD8sUYu pDiJ.[?%So(aV4<A' );
define( 'LOGGED_IN_KEY',    'dpO(Cn=a!zZI{O<3DFRUkvW_i]<P73Y`l,!0M[$}M. $(5UI?XkW8hq h<8Qzhf2' );
define( 'NONCE_KEY',        'QH)C*24,v($w,;AM>J?1fi7xC!Vpr0YcQ~6H*+YFz=|0kMlKx!1hl4 q+fQ:q,xV' );
define( 'AUTH_SALT',        'zC%O^2NC`zQD{UcrC^G+[NW${=Cf:FR4snTVK@TS)Xe[TOrXIu^^}Dw|GO:J;I#&' );
define( 'SECURE_AUTH_SALT', '&c{tUL|sTRL0~P(8fn<YK=a{oe5ABp7/IBr[(w2[toXN{n,55)BR;h=STm&c,uQY' );
define( 'LOGGED_IN_SALT',   ',LLB%=W*G%.1wc8<UrO?#dG.x1VJ+Dy6]x_&y@>ri@b+u*c*7_a[c=7+Gp?|=S9h' );
define( 'NONCE_SALT',       'QViL^=Z/yzV1~+w{p}<:6q63*;,v:AIK]~tcOP1ToC=%MEhjxrZx|}/UJyG3,KVV' );

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', 'multisite.loc' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

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
