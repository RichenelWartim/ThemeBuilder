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
define( 'AUTH_KEY',         'TN@&NKv%o[4G/d-2]qW6I^O7XT5uHua&8}tw^lg5Ev0UV0REIEx-xK,%:MkSP9<G' );
define( 'SECURE_AUTH_KEY',  'isb%S| b@Cr2iF@s2;T$slc>l|LT0d1I&CY{)#Ob{JZ3vJ:q$+r|J ISGl}Tpujs' );
define( 'LOGGED_IN_KEY',    'C&5aC5#<j5)NXp8TIKZij>h&$+SrlH?=m)WJN^+l!`5/[J/1uVsG$>+6CXmk1p_J' );
define( 'NONCE_KEY',        '5PjA55tuVM1)=Suc,EH3>P+{/m/XPNcH~9;&*Z3FvDwzf?*f=!Peh#yiEiE^f;nY' );
define( 'AUTH_SALT',        '[6RW831(X%?_x:[U%0TAXU[$b2>Cplst~Fphu8V$.F&Z*Kt.<X(aA!>P|8[(()eW' );
define( 'SECURE_AUTH_SALT', 'Uif{n`QXkIYsG!i)/- ]/cioI?2irH_!zliynd~c>yZ.ybDzu1Y7B?} DU1WQ!$]' );
define( 'LOGGED_IN_SALT',   'UyOG0WihXmvxsl[wc<vVo+M<~ah;OJJ2tGTLg65<LS|1#![kal9]LuQe(r60 MkR' );
define( 'NONCE_SALT',       't5KQ?!WT{DmWZ88Pb^+hF{wtK$*Udd:5r$L?otNV)J+!/G>E+LT>l8N@)r.hNCv/' );

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
