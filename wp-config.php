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
define('DB_NAME', 'EssenseTeste');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '$T%:V{FWi9BOZlI~lEkBl6azM#u^]*W/-B8vX<$0_$(KF|?UpVfDZ rcLQG^/E6-');
define('SECURE_AUTH_KEY',  'v~q&X_E{$%mH*3zYB-|SPj$oh!rU6wFY<0EIK1/nxOT6.Dx*4+aM`OGq~W?nR49*');
define('LOGGED_IN_KEY',    '-9N%cup:0R:~v}-.os@2s!c_|pL(OLeFS3BhF3ZIe%}VR?Hh$KBGN^e{9A5#3[0x');
define('NONCE_KEY',        'T5xB*w71{w%A;ovvgANcbkZhfJG&oCS<-1aF+1a.od.`G)-;lxu6F6kvD?..R$!Y');
define('AUTH_SALT',        'f-3EJ^R%P=u+}(U]E*tvgXv+X,Aw,ZXYt<t9yuB-VC`q@WjTzr>ED.j4d/L<!v]|');
define('SECURE_AUTH_SALT', ';Pu=15M3B_-fsr~Mm5Z2X/89Fa6N~-eiA<>!1U/oqeJhq1`4HilyEk7YhLvGH70/');
define('LOGGED_IN_SALT',   '+!V-|gqTh1bzfCKi!`n*-CZ$W:pt}~=/&d+nksj/vVt>)]&Gm+2vzCV|C2Si6:?.');
define('NONCE_SALT',       'B#&sE`8UYFN7E+[2t.g9Soxk&u{i?k`BP_{R~]RP8gr3;$s8>j%3W^&6QadgpU*G');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
