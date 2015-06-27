<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456789');

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
define('AUTH_KEY',         'MM`>g8SZYM*>.T!a [p4C|k%Uw#)AXb}K?hC|Rgi;[K2ut0VBNCJg,2eDpGT>|N]');
define('SECURE_AUTH_KEY',  '#+34%#s*<Dg-EjkjNx9/+}l(PeDZNyu:(73o0Bqo.oU|U8u#O-&S|yr:P>cLay}_');
define('LOGGED_IN_KEY',    '?.lXMcD2 1_1L^/%t3,`}(xW`dRMo[KuKnau0;eRF-Dd.Lq6o9UwM&9!o}c[k!y-');
define('NONCE_KEY',        'o<cno$7:x<X*pS4EE*).P+1t+-s 4~M3lfuS-;}+8,]Fx?^JXn!-n*&I1h9 kM*Q');
define('AUTH_SALT',        'k/.`EJ`NEZPk]d?XLj[fY4.yW#cV/=dXvtu*o$H{o|c3t#$..-2*n-s]:`c9Y+it');
define('SECURE_AUTH_SALT', 'Y>^+~BJ|q[_d,S$T-&VumGa~8&)*[Ab3dC_1|`6WZvMXyZs%6<gc)4Ice1:1Irt#');
define('LOGGED_IN_SALT',   ',Pc2QN2  BGpPY0s~F4`#|+Oi)<y0C3F1YIJoS-YL.fW9cEk-=+X NS6p+<y{/|K');
define('NONCE_SALT',       ',EQ2B=+QF!LQS!H{H^9j LT+&[Z<KVoE!;$5q?cTI#jbmopJh{|_,Sf+0f3@$Xs~');

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
define('FS_METHOD','direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
