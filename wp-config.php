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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'examen_cms');

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

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OC_pI#5}(7Z6($?I@at4Z3?h_ ;MTW+`])-f;kc2v6vaeU~V,7ez@U49CFbhz8yp');
define('SECURE_AUTH_KEY',  'S&1WI#UJoK2&`-HfL9gak7QgP(m1&hj1tW:,^+@[IE[J`au QhbneK9E$1FtSgnj');
define('LOGGED_IN_KEY',    'TEF3J_jq^`C2m?A{+@[10-7mQ12R{9GwqU+Ej>XKH|{L8|1uH6s|So6+}&|1l-`?');
define('NONCE_KEY',        ']=gfoc@L)7<z6%[?zM+-?ga@Q^o+|ly`d|w9]DB!Su}=)4Z1#BqRj |xKYCSFVbB');
define('AUTH_SALT',        '[nYk]7?`:,G|<5-:9S9?b28p#p6e]_[b+e1VYr} 7lHGg 0giWob#bK~fp+@6g68');
define('SECURE_AUTH_SALT', 'CB?BFa*]/4}z0k/))j)k_Go=tmqQ mVUN06+hOcB8f;!&3%C2cBP/_.))sHy9YtQ');
define('LOGGED_IN_SALT',   'Tl/_-oqbrJ#2^ Kki)pSr3hn3zBjI22jy&_({5A9VY+w.Gc~xq7>BY28i6EpwZZA');
define('NONCE_SALT',       '.$d4krXU-L$A6Wn^T*Xs`~kf/@gW.Mh4e8`@t_]3swUXZf7S*A8+vz/$ Y`ga$R)');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
