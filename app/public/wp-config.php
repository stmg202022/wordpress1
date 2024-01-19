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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '!DaKB?EUM72PC=4LL5bbXQ.Wniujuxd|vP$>)g?/M_%@7d8K*1ueyfYdxl*}g=WA' );
define( 'SECURE_AUTH_KEY',   'R2ipJLY0UE$qy;!ahFnA6_d<~sE8>PNJS01NwMN!x)q8]9Xf?cx~y<$}9C%(%KgU' );
define( 'LOGGED_IN_KEY',     'FB}I_#W=+3f]b&Vukw,IK0m.q+wpa_-IQW$X^MuVmMID]#ZEDP1BFMbA$LC@`l>f' );
define( 'NONCE_KEY',         '1 b-=qX }w:/9!ak~{6q;i:Wp$iI;(fW[4M3O^tXF6G*FI)q`,C(fJH}!H}KXe8=' );
define( 'AUTH_SALT',         'QB/5ruFQfS$|Rm3#wLl##J!Z$m[Y^Q@3h@:el3.l;q>-A#Hi([z#ytDpw0_=;)V`' );
define( 'SECURE_AUTH_SALT',  'Jr>o;T58Uy:f2T5qS750F}Pp#/,R7E@oPFyM+|;L6j@jD7--{>v|I)>W6U/eW$mg' );
define( 'LOGGED_IN_SALT',    '34@pQLZG0*;!y5{(UJ@M-sL9n}4B.YqVH!=fZ6ObCD8=?=|LA6!xm1SZNcD!FgNT' );
define( 'NONCE_SALT',        'Sc?w933lE[c?sK^I=9 >.q*rXMl0BdXTYJn{_#KR)IyD mswkA^A+%E5WUaX^ff?' );
define( 'WP_CACHE_KEY_SALT', 'KgckL<5O gf~2dTH5]E&PflB/wR=w%JMK/k>vQt1o)YOy?Hv`,mIw^xx87=*gv_u' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
