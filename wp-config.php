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
define('DB_NAME', 'actualmo_wrdp2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'CMDeveloper123!');

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
define('AUTH_KEY',         'WE:kA>LZ3zs$3L]cL*X|0Uik6&WdUbSRf7/1<J^1IG|(;66BXfu4D^k%sM*un@[!');
define('SECURE_AUTH_KEY',  '|4}F/Jo|_zTj!xOz0,lz].NCI+,d#Wv|^eVp9^oJJRE7;Rv&XEqAalKYIL(Y9 dq');
define('LOGGED_IN_KEY',    ';%KPtk>|&RU1d3qRF@1rQ=RZLh&HgVlJaZ:^h?uX+2X/iMUL_N we$i9<mHyKh8V');
define('NONCE_KEY',        'm=IZkz!_=$?k&RE0&!5SS3LpRBdZR/&HP^I|JW.UaQ;~,>8K{JF~1aA7p-Xo%|{a');
define('AUTH_SALT',        'ci!Z(QT+nsGeWMn2I]K??/0,|igBeSmY.?7Hj&1t?$gRJSv|:`!M@e=_|&rjc-F,');
define('SECURE_AUTH_SALT', 'RuvQdm:_?Rjkp{<zb{oO;lhKZgp0r.AOFpj2#]eSDp3QU9u2d8lNYn+$wBK@bPa@');
define('LOGGED_IN_SALT',   'cmB%UjGY]r_fZ@;(^U8z@1_t[HpM$M~>1TP$1,H_&/&v8umDk<rtKMwo #kBG<eW');
define('NONCE_SALT',       'm!B-JW(vj%Ho3?iv,&>z!=-zL{?)]Pc@i|zYb6Y!>/Z%E=`JPw:FJ~U-Il53TBeg');

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
