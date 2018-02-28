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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'andres');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'f1Um-2tg#>c2EwhW] ]n5G{GfXg02pEo}E5$pC8A30 NE&.8Ao<-I4Yk6@mNy>_)');
define('SECURE_AUTH_KEY',  '8F7q;A(kr&Mutt?u^W!B5Nf ibML%G-aT+ !s~up`/~2IiwoNkJgTb97?H*+r])+');
define('LOGGED_IN_KEY',    'M[Iu6eBjQU{ Pf?8B|+(M6nIM{-kU{(aV8blxkbrQSi`hDjvDIOBT~l%gfM--NyI');
define('NONCE_KEY',        '(1q#DpR!c2FZ8KDA33wqAI/%_AD#A?j~8n7M(O,RexD0p cln6Xsx){~ejH&=_#N');
define('AUTH_SALT',        '`/fn6y<=X~6PH8P_M:IpxM)_/w>2SQ5ZkM%x:wQ{E]CU ^ CYaQ,6|6 0$*Tr2!1');
define('SECURE_AUTH_SALT', 'I9j)heIV^?cQ~Q~0jt!{Io3xN)eDSt242,V^:kW+sln=MNRP=Y!;Dsgx^3;V+J3&');
define('LOGGED_IN_SALT',   'f+A,$*$s:ptsAY&w&dS*wT.iOk8)EDZ4!c~/VndJ*wt$60ZSb@lMj$88l%wrlk;#');
define('NONCE_SALT',       'iki7V3A|KNx(5wMWRZ3-/71]>J[qxB3j8+P/Y4PuE(mOl}$uY}ez &t8;dNoP.CX');

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
