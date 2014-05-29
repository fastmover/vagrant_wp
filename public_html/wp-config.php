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
define('DB_USER', 'user');

/** MySQL database password */
define('DB_PASSWORD', 'pass');

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
define('AUTH_KEY',         '(*{$N?`=El[HMkjt|Eiih,]|TcU+{g-S|0%iLpwEJ_&[~JAWXJ{?iG9Cd(v7ExJT');
define('SECURE_AUTH_KEY',  ' Nhjkh{CD+]<BAq?SjX[#c4!`hI+j+Q=>S{ Je(x}bo.O/m<uKBv8hR/p&2O9((S');
define('LOGGED_IN_KEY',    '>ZwSuwhgvYm[ip[zyCz?65%&A9[-ZbYR]m459d*4}RY_Bv[S,1uQ{+N0M;O)F@Fw');
define('NONCE_KEY',        'O,9yg1/C>s>5dqCiWo5(:r+_sa~ (f~$gF,ee#p-HQR%?$M>PZ||j{fiVK+)+-/E');
define('AUTH_SALT',        'zt.<$01.-TkxUoJv<k|M1@.D%MHtKx2&B&&#fcU9_A%zH1ZoYF7u0 PM3:_BZ4IO');
define('SECURE_AUTH_SALT', 'c}H6P`|38`x/A),7d`)NwUKVH_,@cbhrSw4L]?m(z0<x?.%`0m8Ik1TORC qwc] ');
define('LOGGED_IN_SALT',   ',rvpP$*l39{c?7n%-&9}l-FEK2+~Ykd]e8K(CrzGM,$cwrc9wA5v|q@a*A7F1Atz');
define('NONCE_SALT',       '/UBG4Ij/xJf4vtMIqaS||n`<~1xj|`v#678**4#1$:s]7K#$5BAh6fvsSUvISK>D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
