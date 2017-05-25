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
define('DB_NAME', 'condor');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'senha');

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
define('AUTH_KEY',         'Pu)Ke,_X0HfnMBg5tR7a_aXab+7~A?JR_G;lmln{{T!FZ).X~2i@#-59h>qyk/Tv');
define('SECURE_AUTH_KEY',  'MuT-=uEg9:Uu4R=XA%0l5f=a&GI0]eaSa7V?EUt}|h,JX~aubR}$Wfi~6Z>vHN<p');
define('LOGGED_IN_KEY',    '#4aOT=pF%{5S,zO^s;kO/:[g)ll1#.hoB_fGv:xE3eJji,vcNPP(<C RLGgp_TBY');
define('NONCE_KEY',        '>sA|K=&wK`S,w]|gH]43H5rs ${cAfs-|$MT6/-XW~x,dexF6H|T02Gy>&a+yY^2');
define('AUTH_SALT',        't(j/2E&VIw^/yf?b~d=sH8&,!^qX=|<&HQ#~{,F~Ru.2TT[,vVy}EJJRh?bA%TIO');
define('SECURE_AUTH_SALT', '!,M}*>qZ28WcK4:Iqg;$f<w`%){R8e^tg-t&pEo|,4&)8,CZ S1ug*6X=<k~GYk)');
define('LOGGED_IN_SALT',   '.Xk-%,8iop_k82d6<yBc8){0Av8f+wU]>_V38 )-84}J!1>NdLPX&a,Gony1iQCK');
define('NONCE_SALT',       ' G-t=>X`FvoDk/@vDAX}o/gd8j3hyR-R,R-95Ae;I@ ==e)v$2w4sj`BFlg29%?d');

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

#VHw!sZ!VmcDjp$n#Zx