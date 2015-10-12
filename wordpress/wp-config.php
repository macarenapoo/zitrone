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
define('DB_NAME', 'zitrone');

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
define('AUTH_KEY',         'N9qx5hKKTjm~7AvnBu_;w]qfaGz2@XSvT0-@sNRdmofTWhu q09+F&qNz%;qS2Gj');
define('SECURE_AUTH_KEY',  'RBa@M6s]2)zyzt6A.snB}1W5IkG@]?k`!m30:BroC MCst.N%9pUDtu b}1$nn^c');
define('LOGGED_IN_KEY',    'KZ[_>:xHA7|ST$yqK_B`CB!c3q8ghlc>wlimE}1+zbr:bq38E/+:Wn=>X!Z~pw[h');
define('NONCE_KEY',        'u-mUVQ.Yd;CsvIHJj6peITu`{Z,=9t}z`/GsLCrfku?j9A:Kq|1Ct9bre.Ul4H]0');
define('AUTH_SALT',        'eESG|!;:~.9J&|qZxXg^MxJRE{)V~8Gyp#MV73Y~qgiDfM_3>aRuBFj%VeAC[ap0');
define('SECURE_AUTH_SALT', '|0>d%vQ ,ui+d;0w] fq7ydL8eurh=7pn|H+*;w=}rLH|6e2+Ij-R(H)]jn%8v?q');
define('LOGGED_IN_SALT',   'lT)CHWj).OQK%#w&{]A3(e1XahO&RU%j<ni#m%nIk%+#I$? CJw7`gu+#z}R4K#p');
define('NONCE_SALT',       'x(FlJIyzcD2_DEY[uA8$W2-e=|4bh ,3B(7S.]p-1WXx `w`}!/Z@!MfV!@!L Pv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'zn_';

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
