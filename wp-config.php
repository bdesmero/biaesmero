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
define('DB_NAME', 'biaesmero');

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
define('AUTH_KEY',         '|iQT])?oqVL.V+`C+^KI-2r CoZaU9L7*V;+t;WV+lYpV5PxD#H6JB>~tUq/@(&k');
define('SECURE_AUTH_KEY',  'G f,zcDwA.y#3#|rP$2deJ2LN-j3BF]GDKqExWBD4-<B<Hc&%v,0bWhGAXTg~xIt');
define('LOGGED_IN_KEY',    '|)iE-9}]sx.,vL%;@HOQhSZo rQvoAB~/!lb~)p53-9+!E-QwGTq2m|bStZ~8? s');
define('NONCE_KEY',        'enQPr?[&DOm[*nzj$/kopl46*s--T~~#8`Hs<WI^TH+Y$):[qOKCeF+|G^f-+1FN');
define('AUTH_SALT',        '%6T,z-]+^_con%QwU@<-s`6zO)uvX%0TO||#,OK|!yTG,c9WQ++zvM@u{3^,|jY+');
define('SECURE_AUTH_SALT', 'lJ3l+^CuOpRy&-rIy|<k`NWSy=Eu[X5tRbE:v4S-CxBYw!cnQAFm=-4`j:~9Ap95');
define('LOGGED_IN_SALT',   'erE<UD8eyU9z#dHY9f^_{2LEz%h$tSI]J1Yb#= av^k|px/NTJgN)Tcj^|WZ2k+%');
define('NONCE_SALT',       '5mUCgkM4y9:.QM;>_2>ENv}b?,,*dZ*AdO=)/Wzp,S#qsKg;LK9BA414HLP~ F2q');

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
