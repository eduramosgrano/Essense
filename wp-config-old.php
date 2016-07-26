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
define('AUTH_KEY',         '~(QIfmZi{XqJM#L?Z_f&%l7y~M|2Rd>P<!5=g7_Cu[h*W?C?ScjthZlqn;~&n`ME');
define('SECURE_AUTH_KEY',  'r{N@MIO0U7*!}<u2aP3YhOQRstO/qK(jbE N|}p 9(iYq#O5_#hA=>`Y;Zb;w:7Q');
define('LOGGED_IN_KEY',    '17:tc3?b}7X[o-!b990GV)v4T5xkTWF^vp7QvT?dUdyu)?jgVD+3tKm,DRSY`3^:');
define('NONCE_KEY',        'Rf#SMaMkt+)?Rp22 n]<Wp-x[|4`Cbf<WR:;H}+.kspi1W*_a+f^#&}o$s0X2L!I');
define('AUTH_SALT',        'D|=#5h}e!f,tlx4SQJgw*FJM4;!zbx>G*?kQm`P|tKUDCO#)QD*{tpOH 4-@: ^M');
define('SECURE_AUTH_SALT', 'uqL|t1 bxL~%w(6?#mNaom^Uqv<Hgj~$y+% +VAMz}t6OO7($zN:SJe~=scwOG^f');
define('LOGGED_IN_SALT',   'o9?FVeji@%=;a{zjLHh>0H|N9bT?MzLBZ^%g}W@pb@Z[W{3#v,#j1Gy`T:oWqhP%');
define('NONCE_SALT',       'VS$U<(Biso]~Q/@]k`]|^tge g?>3})#qj .8)SzNqtEzz)h< H2618Sq^,Rl]SN');

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
