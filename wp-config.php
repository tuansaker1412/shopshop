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
define('DB_NAME', 'shopshop3');

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
define('AUTH_KEY',         '40%NMC7T9]adn~&T_u@j07ly.i{cQCPNv~[/ =_6MQ04UH/a9,y{WPnnFYyuy)c_');
define('SECURE_AUTH_KEY',  'C`|@NJ|{x@CIv;1g;Moc-R{aw7Xc9a]rBv:*iIJApm:Z4 >M0BLsy2vP`V{V+e-n');
define('LOGGED_IN_KEY',    'c6>6ZTMxqv|Oi}h EO)xB8P1B7aj1-:Wjcy;uPuiy,N:Et7QBE-ChaR.AX8RKS`V');
define('NONCE_KEY',        '{>z-Bywb2EaDI<ejFP{>aX>!_^qjLUNm/,)0Si315yu{ -Qp3%r<OQNjOXO84!Jl');
define('AUTH_SALT',        'kI.~:B-W{e=:A3T:>-3Hh~i!TPcV=ai3#BE*Qb+d |vcfKV>>/l$WH{h5^V]~iSZ');
define('SECURE_AUTH_SALT', 'e_vT z@P{$DMmJ]NKdfL _|xZz-2^u#LIspq%BYrnrKyb9t=&4N@<56l[|Q&D;C,');
define('LOGGED_IN_SALT',   'l0_`9 8Ix*kWlG}uPr#d**)~9vvbwz^v&kb|N{avr[qKN-z/Q*:<%|5qGk~xvynb');
define('NONCE_SALT',       'iD8~LUP^8|E<@~0oZHE:;^J^77j/.>ECnyqnTa@-VeVWjG^,om:/ihO0|jM3u1Og');

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
