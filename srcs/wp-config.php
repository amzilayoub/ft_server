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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '%lu107<RlHG|-~]UxpPRlX^.%Y3ZPW3x0$j`IeDS]WbVw$4so&B>}G~xt;%)sPbb' );
define( 'SECURE_AUTH_KEY',  '/p<eA(p9EuD)bq^e+.Qwp`-ZIx~}j.]*>-TY}F+gl58*=v cB)` E*,+DKF8e|/f' );
define( 'LOGGED_IN_KEY',    '|Ng4|hKUw/4:=<*Db^wz/)Cz_NSxb=kW&;wti3^/-P@SymS=kP:yyx ,}@r}*&&>' );
define( 'NONCE_KEY',        'FL19^!19YC.UOKt _2q{{&]%x{Uv,L/9ROm 7z26wV}lMUkz_KIGK.ZeL=O/&=?1' );
define( 'AUTH_SALT',        'W&XowkH*|Dw5<V:Dp^B70%&7jEw;E>q3&h1K5TJd|j1vFq&?E*xZ5ugrD[BP?OPY' );
define( 'SECURE_AUTH_SALT', 'rZ]gT0ET}/+%il6(l~tc`JVNnt+LJ;]m_J&+l&O.0mI_w)y@Yze5}gd*vF XGR~H' );
define( 'LOGGED_IN_SALT',   'n$LH5,2J=L4j2H&y7+qOFcdVlF3M7G;K+vQOlY<&W>`_M6#E}!eUIC<PC_P%~09^' );
define( 'NONCE_SALT',       'X[nLVmT3f):%j=Ey{-p@,l-DzQ=pgOQY2[Tx7OVe9$D9xx;9):wfVlq]})v.a6AA' );

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

