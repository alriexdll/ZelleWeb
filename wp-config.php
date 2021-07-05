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
define( 'DB_NAME', 'zelleweb_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'm)4h/F{ZwtkH}dxX1EuHDRa`%p}W3~Yo$Li]8/%Xw99/D*XEg%L$=u< /q:o:/QB' );
define( 'SECURE_AUTH_KEY',  '>HdT!G{OTL| mvXI3x@.LGr^:T8N(vAW:q%FMs[u:%6d:AN+VE,s:_<^^[3>RCo$' );
define( 'LOGGED_IN_KEY',    'waEdPoj-BgPH^u$:9 TkBRVTsUCGl}7)u6W)#]KA5#fbUa)UCO+l(3[I>o4>Qebg' );
define( 'NONCE_KEY',        'l6!!4=_EkLV05z2FCV+#!wn,@D[azzx=@yI]=I<FBnAT?P0t(,vm[<rtPwDh33lP' );
define( 'AUTH_SALT',        '#jXx$2T,^4l~1$c0IX,3wcDiSrf*.v7DuUy42N6O|*_7GMK IT80)N0}i@$v7K;L' );
define( 'SECURE_AUTH_SALT', '`+;QNr$1&7.4t&fPLGIZoyjRiL1it/B%DJKgLu$U*<~3Ms:D,JFW^=IygEW17d=0' );
define( 'LOGGED_IN_SALT',   '}//8O;x#l7:ZUSPK`t&cUa_V6GO==)zRS~/4Q(h)M86v$g@QZGv?Ti6]S#gf=sYA' );
define( 'NONCE_SALT',       '|$nXE[9=o<9<vlGD2FwLox9|kuQT<ZX/b`EL|Ia)!3wSHx:jD>T* O$bSUv-68?g' );

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
