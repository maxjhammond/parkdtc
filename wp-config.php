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
define('DB_NAME', 'parkdtc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'TL_/[1F9bSqSW=$0/~Y=lMhxbDRFHTWZG!m[t(}wtIZ!ULkIVz%K?:F:U0Shl<C[');
define('SECURE_AUTH_KEY',  '4!%4Lj_fLNw.boodiGfD3K~IRueVfao!ljNTazjH5(7Fk+v4A2OE6j8g38dpNq`f');
define('LOGGED_IN_KEY',    ':nF:Gz*_X0TplrxtL e,d8axH]B]Q+YmNonq!tlWaPg)*5T#xc>.n^}O-07L^(xw');
define('NONCE_KEY',        'hKK0-a+~gD*jc >&=ojwGHJi$>M0Fz+5;D0@:D5DusZ qFon` O^55DDT:5m%ni-');
define('AUTH_SALT',        ']LF@&`_G{z!Ata_K:2<&^aO,Q1~G<Ra|SvI-i<@L:5iRH[?5.m363qiUN>1}3J2%');
define('SECURE_AUTH_SALT', ']V)1C7C*@QUWsB!!919J*/_E|q=;>FT`6DCaNk9GSgDe$.CznbxUn|cR3IBOkP<[');
define('LOGGED_IN_SALT',   'm0wXwdHH2L>C0*FWJ4!W;+6L@b;#u/G4o-8ZVy6%p5[7kf#GGZq2t6#F.5Fne`?&');
define('NONCE_SALT',       '3gr&HE?hjsG.xzo[OH|G=J1w<8#8s~($8GsM+dv7)K@::3/6GH4>f;9VgGcKMj&A');

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
