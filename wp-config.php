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
define('DB_NAME', 'wp_blog');

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
define('AUTH_KEY',         '|i@Qb(__h(eVHxL^w<aH0%f]8|7j048sG)e7AH8H(O!Uy+oT:+#Qnj/MTl^N{T23');
define('SECURE_AUTH_KEY',  'M9*iK2uCu31jaXv|K2:yI}D]a6Wm(Y/v  ^~c_,U5f)=b2`XpR[=q8sz?WXYG:,!');
define('LOGGED_IN_KEY',    'OsDlj-yQY ZCS.(7vOX!7p0NXH~tXRVG.lt-M$MBa3w{Fdp},{8vp=|M{ yyEM|A');
define('NONCE_KEY',        '%FcLxV$oF~#Ce8?{b?9#*0#,J2,,!`,[$>KR//AT<!M>Dd0z5~#K(c+E2r${Yv?M');
define('AUTH_SALT',        'U+&[NZ+;-e``bM<fb:?I`CAHugQF7UIUhP{rLePR-}+DKi6^F$6Y;{@Cyi*~Y,>;');
define('SECURE_AUTH_SALT', ':cc`hG~JZOV<NsVG:sk;Ix;(bPe_1wL9*QJxvC.cLbC|eXctQfPb&O7@vd5E8N`_');
define('LOGGED_IN_SALT',   'D=Aq3qr7 6e_fEDlverI0:g}TO>!4:_cHl_Wsu2e7t=7Fy;BQMmwP}D,E*f#N+p-');
define('NONCE_SALT',       'M&F[l*(Lg* ObT%$&dp*EYw4KO4?e*_4?83R5,6PS0J}+Ir}o]cA.1nPmS*yzsD3');

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
