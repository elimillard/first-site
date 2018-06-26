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
define('DB_NAME', 'em_db');

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
define('AUTH_KEY',         '(GOG}&5r{P#@ek,.KW9B5)`KW=U?-zu$Rj*6IivGt/tZ(.2xO|b11N>0d*&!Fy{/');
define('SECURE_AUTH_KEY',  'wx)C1RTsk~K0K0*dXGIctQ/Ifd{AT*|+m!@h=]Dtku>HCAcSsSN,^|8^MSJ#-7N7');
define('LOGGED_IN_KEY',    'cn=V4|l1*m$5P_M+[M=LHq7w1U&<,,m + /J;tbE$oQ]9 )fEytY)J%Q?~r^?Kyt');
define('NONCE_KEY',        'iFaD>HQO?jJ]8,`w4f#+`]9JqvF<^6fHah$L?Av<K<7p?Gm`L[*,WrZ78AKs>X}r');
define('AUTH_SALT',        'm@=%8~1h1xhwUQIlPKp~QwGTP+ v&OAJa=m-hqz,DzDmo^Xv%E?N>dMqvT}1r5[p');
define('SECURE_AUTH_SALT', 'aUo_7uTWt ~X!+Lq.mU~,{vfWEG/|7CJp@JS.!Mvr?W`HYaCiLo>ho~0_a`BqziD');
define('LOGGED_IN_SALT',   '#eKrNfmg_}!6@0{oy*vx9;P|Lg4zMQ*7.8f2l#F;X<c;WKJ!ct:?j?g4+Kfnm1mK');
define('NONCE_SALT',       'v=&w*j# 5AiL%|_/xUEz^ljsM%K1IM;=Zq.]SD$qg}{{QjNKM.%[1OKT#DWL75rv');

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
