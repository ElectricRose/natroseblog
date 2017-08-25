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
define('DB_NAME', 'natroseblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PzBt.Xjq=4 Po,Y`Bg<*l/?J 1_:rc7hG~=kR@vT#&X3<}nUH+uvJjBa`aaZ@c6r');
define('SECURE_AUTH_KEY',  '=Rh3j;!>K61yf>]|!xq(:$/8&h[FhH5o&HVhyy$f6c3qI,p)ylP^2P2UiBysxl)e');
define('LOGGED_IN_KEY',    'B{2pT;y4`dOxj(5&X0M8`!r]Syn+gu[0Br]Ne0^(RpY,&hE#;(Qf2!C/?bOzYAnK');
define('NONCE_KEY',        '7%:H|H}{;$M-k9-iQ.QhP`H/5^?a@FHYg( <.R<b;[sPcC,+Kq~G8<PIqW`rqWW<');
define('AUTH_SALT',        '[2Uw-T/Yo-1ZM>tJ/!%{R*bI:ic!/EdCS6oL_ nPb5)WDEMXmpp4*q/j^KCVk-eA');
define('SECURE_AUTH_SALT', 'r(aOQ=[4T%~S|nsP)<(#vY}`u6~XSA,LK XfJji]1SD$&42L)b/!Jvl2X&J5Ni0w');
define('LOGGED_IN_SALT',   'u)I;0^ck=n91=`WebE8o+3d_7T.dwt-F<lNAGY+kvp%G#^@5gK!GywUi)b%_Q<xB');
define('NONCE_SALT',       '1Oq{cR$ud{]$pr@PZ]d|D,9e-jFkvz+bQw8DI!&9Ld~RTC1T|,dFjpGX5D_[jlrV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
