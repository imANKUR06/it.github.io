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
define( 'DB_NAME', 'wordp' );

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
define( 'AUTH_KEY',         'Q#i3Fl/Yxz5j?0tPU>:rao2{Iv7#(I[Qpstku#^o%+|KP*3MtbL}oY|GOiCRu]:.' );
define( 'SECURE_AUTH_KEY',  'r]1?51RGt,{oY(4 [I9N}J8IM8A^i&5% Gxts3=RYm!6D%{l9ij[,.2{)kswH?a^' );
define( 'LOGGED_IN_KEY',    'lQdM}2fd0[P4Y`cA9ZJz(6~)bYVG1ld3qis|kVi1o&=GNQptvPa/^Z>yHj+CeD$0' );
define( 'NONCE_KEY',        'UyuXiq%i?!OS:[]0gKV1m81Wy QM7giJv{_-14.85S#6g{0h{s}3A)/E$Nm:kUzw' );
define( 'AUTH_SALT',        '>5)XZKX:]7MyGMZMFsAwe4h3BUKpit3+}#iQ@gFyz&qYJ/>V{muHCsI$!{FCN#jt' );
define( 'SECURE_AUTH_SALT', '`nQ6] .IYvi0R{tbtE;D B+2OD0FsMgH6ZH,<,#&9H1?J5]1vI)Z0_I3s#Vvf!hx' );
define( 'LOGGED_IN_SALT',   '6xhIJ=C`}9HyQshTjTjr;D-*&D/+^jph)`e78XtX4vQBDZQ1AB6+<%9$R^[_*e0O' );
define( 'NONCE_SALT',       '5dHX wAx]l}z0D[p6zavtpcYXjXc2[lT<c|/JO j|-eI!=N80Urj!dm_!:P>$*Rc' );

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
