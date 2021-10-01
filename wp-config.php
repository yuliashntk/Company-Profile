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
define( 'DB_NAME', 'webyuliass' );

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
define( 'AUTH_KEY',         'VS.>xWuW^{4>9EJsoJx/<B+7HH@ax{p^J?q=UU14ol%Pa_!@k1|WaeT2uLI)+wEs' );
define( 'SECURE_AUTH_KEY',  ')fg7?oYT7KG]}07HLjckZ$gT*l5nHW5qv?KPY ^R@>WN?+Ay$4w0znxu|5F/B*SU' );
define( 'LOGGED_IN_KEY',    '{PHjPFn;F^NMuhE!|w9lWOx90g?HJfRpsxQ8%|%IYw/T~_P +m3wvF4)yIvBr(f+' );
define( 'NONCE_KEY',        'Y_?]DJH,T5:HcA;[q(Eq8OBX+_?qDox0$/]s1.0B[r9e0@xd698?i9#S`4^}JD9>' );
define( 'AUTH_SALT',        '|:ljHf^R;FHCL&j[KZZ~,Oel8nh^<Iwj] Mg}<a6%NRb3}a}(%vF&#f^AT_/gr![' );
define( 'SECURE_AUTH_SALT', '3l58iHa;AO53N?z{Gb*S<iobd2IUeyq0-x:Ua%yz63`SafW~pmC;VJ+wo}/SxuyE' );
define( 'LOGGED_IN_SALT',   'J~L0&u-8w$d(v/3xI-IqAHVfyXt~K{O`]B87sHmJPn!p7awKr&d<o[ZXi|<c)/*l' );
define( 'NONCE_SALT',       'NDf]K;y`|w4r^wL9OrFJ=4 Kxj-%5I4vI_46z}qiBDq5N?e0;{DZM$Ic!HpKudgr' );

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
