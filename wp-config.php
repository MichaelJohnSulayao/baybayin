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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'baybayin_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '9Fs>U;0nYMn6 I5OIC#|w0q!#u(+>pmn;Ik)C/RPvG+7V[t]wsMr7:s8?*`X$J_U' );
define( 'SECURE_AUTH_KEY',  '*j3DG%>}o;b:( mFTWRTWLn`3z|$y.GdA#v0Q3}J6)L4ye&DzxiPwk% ,UDm+@%e' );
define( 'LOGGED_IN_KEY',    'JvwnBTv6K}R^i*Rep:B5=Nwo.1?i0r%Kpgy}B/-ruVA|n<*l9Ai3(rXGk*`}26ii' );
define( 'NONCE_KEY',        '8ZqydMqVfA<dfwVdzvLO#/[d%W-T?(bc*sVt.Y/E9kz)ZjLG$N0)h(?UYF[dob&7' );
define( 'AUTH_SALT',        ' 05p>#Ckb&UOYr/qN3`5B~4Y~():t9|*Ik_j8WwI%5PHVtCS[TnCLd35{cC5W|6N' );
define( 'SECURE_AUTH_SALT', 'slZQ;jM3UeB1B8*b90Kq!H%F~wH3<g5#,Al%ZT9zhq2.VRL8Pd;3OL2f)8?YZiA#' );
define( 'LOGGED_IN_SALT',   '.$NVe?yQ1TCA%Jx2PJt=o2]]GJDCLiM ny^|#IjvD0T!2%e~e%0YZc+:8TJZ*kd~' );
define( 'NONCE_SALT',       'RNa|[U. q%qIo_TSQfq|o(ei$0l>{/<c9zMrHwL)g>M$1u,fvk4 eF9/@-l#2n;P' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
