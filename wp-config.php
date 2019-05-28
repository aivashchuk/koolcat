<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'koolcat' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm6n:bwte]LFhGBzqrhq}.+Y)uq4i:u.(6ISUh8}N]r{L?(?id0iz$CRQ#7A[q63,' );
define( 'SECURE_AUTH_KEY',  '0BES(BG[ dJdJ3Ld&k-v=|)4ttJSF=B| nBS)Xz<z:qjXJr^9dksddPdhIrlPo2*' );
define( 'LOGGED_IN_KEY',    'eWXOnlU#GBIs.)+mWWub xK&*1bXy#ctb,<<ErYU(:Ia1vN?@A.H4tm0llKg`Wz%' );
define( 'NONCE_KEY',        '@Lt0=zYPc0)B#EDkk/.Y}^Rmn3rLv~k>gKXasP/%+b^0Mz&u[ >k/Ys;d:i}m<(,' );
define( 'AUTH_SALT',        'r^K((z(1>4D-{<!s1orer?K%+1Ef%;suaQxQG%{QWfyhfNr^oODhSz3@2s)EeLn0' );
define( 'SECURE_AUTH_SALT', '5-X/w1t_6vge<pWwplS@9RwbF}EU;efb#X#)a7dWWrZXTA>UQUN4hpx=)_9&x/7d' );
define( 'LOGGED_IN_SALT',   'P841x[Jf[hF5Cj|<1XOK/U@2{x}=nSa|4Q?<GN)V!JqY7uWZVC8iS[Rt3|1eELG,' );
define( 'NONCE_SALT',       'X5!&3mn9La3Y,aMFk2sua$1MYmj>2ZiY=o@:{ZN@pO}`T|6Q!*dN&_/HB RH<A9c' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
