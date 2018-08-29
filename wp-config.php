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
define('DB_USER', 'Tahier');

/** MySQL database password */
define('DB_PASSWORD', '08310831');

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
define('AUTH_KEY',         '9A;4J~x`0sgQWzcsuS1B(y~I(Wr9L+=-c^@.A>B8hpZy]Ji7YM:A9Vd(uFpEebHI');
define('SECURE_AUTH_KEY',  'E}EZQoDUXXy9c/x9RktBPG+l$Ix7Dlyrz-Y(gq@zNsf(7[c9St!Pp]7~aLw{5 P3');
define('LOGGED_IN_KEY',    'Paz|J&cnrRr0D|/$YYHTcK,i!QrJe9L}Lj3Wx(?g14=UUs6 OX{&)sdO@(o)sGUK');
define('NONCE_KEY',        '_PouPg,uFZ ~Cw{vCB;I*d32Ge%G9i?_*x8.5^ OiFq:xX2a9xR?yt9&XZqFGtt=');
define('AUTH_SALT',        '=z8m|{=}0C93jk!_q&VPv5&drc]co`?%F@zkfHF3#<w1rsz!1Oy[v?WYs:%>~[r!');
define('SECURE_AUTH_SALT', ';qkWcwm16JI}dQ$/Q_CKs?2-9c5|>5`;vhnw+(9n^.?Ma61E9@[3M,7z +MT&&:,');
define('LOGGED_IN_SALT',   'v~TUEfJ={  E8[gbDa&g>HZe+.z`SUrNOSW3rL4Br;C-?f&u_N5t>T~tW>/49E3H');
define('NONCE_SALT',       '{6_:8]apR7xD}-B-%Zc#(Tl(|>C0Oq6z2plBwii}Xj[]uuq(T.,jT!B,(FK eTkz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_db';

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
