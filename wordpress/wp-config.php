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
define( 'DB_NAME', 'ThemeBuilder' );

/** Database username */
define( 'DB_USER', 'Bit_academy' );

/** Database password */
define( 'DB_PASSWORD', 'Bit_academy' );

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
define( 'AUTH_KEY',         '5}Y$DTUj:ev!bE1k^nX**1P6#cguHe@%d+@Jk0L>FCT iI;9R7s9M7ZK-uy !ka{' );
define( 'SECURE_AUTH_KEY',  '(g4UVX@|~%!Q`RB&@]t]e@Nm9WXiQP;xnA7r;,%2k$HeW~xbi&C1r`!q@e(vfkLY' );
define( 'LOGGED_IN_KEY',    'Z5[l}etHcul%x]=DCV94dpNTkHZn%@qZIXkqhQ%yMk%Ev9}a9ls_UND[qKkFu}QQ' );
define( 'NONCE_KEY',        'R= 9I+BR^v+xg.0C$Yycr){j4&bubB&#lSlhA</>C/Y~G#XYYt ^EVWTdwi#j|~r' );
define( 'AUTH_SALT',        'I;9Dy+cROqz>B]gf{kX,Ltx1] @8)[xDFJyk&Ey>FufvJ+v1tyTo;@vExmImow1t' );
define( 'SECURE_AUTH_SALT', 'dh{F6}Kq ={70.xkZ5g[flyyRGqiGh)JB[Y?)_~PI}/rVHeyqWn3C03AT6JyK8,{' );
define( 'LOGGED_IN_SALT',   '{-q[)2K2T6}$vaWrHCW-~<//nv3}WKJ/m<S.sz_K>S2<3EnTw7F8D4(kCGL>0@8Q' );
define( 'NONCE_SALT',       '+,9_i1G3>j*.%b3os0A(bh->06hDeBNB]O*ch=X/F<,/_4_e_GFO6LL8n!}b;x 6' );

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
