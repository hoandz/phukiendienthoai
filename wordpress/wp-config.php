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
define( 'DB_NAME', 'homestead' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'xFM>zf<N(R&ez/$Bsx^9FxleaR;eI$sL^;sc&2I@=kV ?_#{xr$eW}VPK5mf)=:@' );
define( 'SECURE_AUTH_KEY',  'lh`2A.{*mZ,.H)7,Vx|@>ipV&-pFUoH}fV7 kU/_$4E>lY&~&`~2xxVe6ANgPG7c' );
define( 'LOGGED_IN_KEY',    '6c>OR:^;4-Rkfd&M9^DbtDzl2YC+v,: Jw`wgSOky>8q@hD(5c(Y!d:!N0ln)qTm' );
define( 'NONCE_KEY',        '=v:mJ))b#>&9Zarj-,:O%[7,P~dP<~0Z^VHe7*2n7f%L5WnKW6a#RK?5B}WDIwZ>' );
define( 'AUTH_SALT',        '4GHEoW;s0(/REEc!|.z{`/TIm72%{~4k_J{W=DR5cCb+bs@[ ?^(=_}Y`[V&xy5D' );
define( 'SECURE_AUTH_SALT', '!/vCwM#lMiM{H9%:<U}pLjq-uwcX^o_);!GFLbs6]dfZ($oT/~z|>yKgv&ncZ>jM' );
define( 'LOGGED_IN_SALT',   'qPf41~V1aR@_3fG$>k Rq3,* [a/je+IY!}KcpqJraQO~t&(+#cflzf0Og En!7~' );
define( 'NONCE_SALT',       ' anKq%>:dFs``Pl[!9k3ogFsc}ZOt=kn$Qs!ctU8xWi@8Uj~#f/0NZYu!~[A7,,7' );

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
