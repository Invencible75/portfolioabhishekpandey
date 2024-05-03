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
define( 'DB_NAME', 'Abhishek Pandey' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(&W!:zSqBZt@B!&i;?Cu8Yun[05.#f?KvT%k=45@tSFM;QE-b8E$l7,%2K`*ES>0' );
define( 'SECURE_AUTH_KEY',  '~)[D-b67F(q^:C)-6R{fFc9^w$&Y`UGbjnRmyu,a|8J)r6l5XB9o5*xRp73e-9PO' );
define( 'LOGGED_IN_KEY',    ' WzI,*Jv?<rMg#6O<p?&;jh[_4|@(r9jT7~k@(~G7}^#{ cIe44c-UA<Ei.c<gL(' );
define( 'NONCE_KEY',        'VTZf^X1t )e5J>+TS~+GDzz3_^4*~|,%e#rG~AqQf,ub(^<@tSh9sdY|MwZ2oY5Q' );
define( 'AUTH_SALT',        'L^Myn,D>Z,J|;dxPqW/nFS+![s:j`F3xn%eGC8sU4G`({Xaik;pha.*~S#~N7cOm' );
define( 'SECURE_AUTH_SALT', 'ZxiPc=S6Cdd1oR]O9$zCz6;4ip hk-N4.=/(TM}_/DsU-yfJf~&4$E]BcEvO]^XK' );
define( 'LOGGED_IN_SALT',   'sD~]l7;<?QowZ3faIzu|2}$[5.U/ois_/#(j5Cb@#?oa_Mr`SC[4tIn?wsE~}pcW' );
define( 'NONCE_SALT',       'JC9In^O#?;H&.Vt)T3$b3^W927>Q(%_kM1Xbe<|<AFBoD1b6QFsl~yfz..Pn+/1W' );

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
