<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         't4jz~1/_J/IZ;L|F.<le~|<WI@D7^jA1TT/,([9R:=TVh)c1D#uF15^POGnXQfi{');
define('SECURE_AUTH_KEY',  'LGSjJY!&]kH)O~f49_iRcmKAZsv<Y:Z4k&]McHCdBsyR-YjE Ax:>$1 N;|fP?W*');
define('LOGGED_IN_KEY',    'm]zD;nam/aOk-L+}E!|gc+<w)133rjOi{xS2T0&L8*|F.%|drI6%~SUPlGm-Y?WT');
define('NONCE_KEY',        '}M,c6ni}B3>1HW&qY{w`NM.Gvx|TF#xH3NZB( p%?(^WRa)9lBOl(^2f0hs@}zq/');
define('AUTH_SALT',        'vY++7ZJ-J:bb|#@J|pj^j-rUp<;RPa}/9)Q.zx|_fUif5z L$P-{X7Z|eJ8EoOX=');
define('SECURE_AUTH_SALT', '0~fK#&Fj$h2@.w=a*=V|?YN6QW?vJm^C~(|GlPmx&0l2&9P%LlX3Y#nM!%<k):ju');
define('LOGGED_IN_SALT',   'umo@.~6U|%Lv&fB|wEA vIE^.?&+x*qgRb%0Vt>UJHy}b$.;f$YsKJ@$6V5m.Ho)');
define('NONCE_SALT',       'C?Hz%j0DkOG,*?zeCx-`IBNn|7svEF!;+)U$E^J(V8.Je6wFy8(`>MS_2wc&+--6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
