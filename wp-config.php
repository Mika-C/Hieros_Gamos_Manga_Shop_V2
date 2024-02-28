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
define( 'DB_NAME', 'wordpress_2023_project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '<w#w=OIO87/a}<TXrd57-!Kq]=6y4)$#rWxqK0.>DmMyHjjQeb_m.[9[UHz|a=4(' );
define( 'SECURE_AUTH_KEY',  'ISbkBZ Xp;jy:SlMYxOc%p|3gTB-Z-f6wzJx<`5j4n:RkudyypB$dhfiC;OdHt,1' );
define( 'LOGGED_IN_KEY',    'qOWi$(Y4gSMG3e_23gVBEq#fx$M:XCvHyAv,n8C~#>x46{Rb|phpm@cz^+Xr2}@6' );
define( 'NONCE_KEY',        '#HxAx>zmwz<XUY|A_}r7~|j.PVswY|KG#Lz;]HX0N[95g_k![-9o9D#sHX<$i3Gk' );
define( 'AUTH_SALT',        '1MrncYg^dl;]n2~9yMybJk/oLK273(5DGO(o@e/^gGzbxHFM}@o1vi[t`2K,7PV+' );
define( 'SECURE_AUTH_SALT', 'mfHRm8f-pv5fL.+)J@&soH*X4>bc@?AxD o6oTkT47wZ351^$~D&*/+B]^AM/_S!' );
define( 'LOGGED_IN_SALT',   'j`RW*zOMF#^73>}.N2ovU-+p@=w*}w~97dVFTc{2jI:D(Q{c}q]NKm^X?)exFj.*' );
define( 'NONCE_SALT',       'YhEZ [*m=BkLmS=IpL3$*,(-]1.b@Y2s+,IX}&,Eg45XO>hhrGp:)s4nS&g%#_YW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dksg_';

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
