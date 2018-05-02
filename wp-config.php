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
define('DB_NAME', 'dbfurniture');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '*3+VW[54zMM(f4P|OA^mLuF+ovyv;D6Dso6aG~o3./)E_Kq xu|Bn-pu/hDfN#%g');
define('SECURE_AUTH_KEY',  'BB8ZmR8|nU4QUO|P^DXdWhx1myA>APJ}gfk9pOmm}YXE66!vkP~{ zV)rOC~u9XH');
define('LOGGED_IN_KEY',    'BfUv+)}}]`#THo1>H2ZGxa(6gr^[6Xp!kK*l2pI|LMy{Y#i0,2!&?V&(,pUQLD6l');
define('NONCE_KEY',        ',w5X0.}Ay((,0U.yq7`96SAa$>:M6):R:^[KyfP/lJmdf?fY~*kL-iOPwvnxc]@]');
define('AUTH_SALT',        'S;1t/&Xk5esk18<;y8c-.xLmErXZF~IE7#zcq,n|zA{[Vp}TXStoM*ZZ;D?7I;;}');
define('SECURE_AUTH_SALT', 'gcY[+ sc_#pou^7WgM=WVI#Vl3$5@fhc/|bU9Lz*=cNL&95YS]@qz*zyWO*lL#(X');
define('LOGGED_IN_SALT',   'tY%?|pU=5f_cR*xmeW`K9K0n>39C&uac%f^PjaVq`vb{=($XCwy8,mFxW+)iC^hp');
define('NONCE_SALT',       '>DfFno(H<$:hlOY^QeK;Ba3D&8pddCjDqzh;APyrRZ2#m6f,=uwZFAi=9)p2^Ja4');

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
