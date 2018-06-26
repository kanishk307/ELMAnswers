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
define('DB_NAME', 'qanda');

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
define('AUTH_KEY',         'Z9Ub?7gN&i8-TOJ}(!.&I[Qny{T-{D8~zH}P:|:.I/y?Ey7gLm=~Dzx!6TqX]Hs+');
define('SECURE_AUTH_KEY',  'O qQA?&ABtN#!>bQe.G){Ew[*~/KHGLoFM&sCw-A1N&c,_Z|g)yH }K.pF/ldIKw');
define('LOGGED_IN_KEY',    'GfPU@%hv[J/&Hs/3^;G9)<z k8eK1b,DGJn.N8=TDjzH~M+(k(^p-z~o|U>iW$|^');
define('NONCE_KEY',        'L[wO(/FMJ2zO|v3I!Dd{n$RC& w=&1XN{E41E[t.jp=md&dJPV9KMR}q0o#]b,(;');
define('AUTH_SALT',        'H,)G[_zB_]E{Fp`7[%F3O>5MBX.VG@PH|xX~Ue50]r9Q.se4f$kS8XX{M5G%sf<#');
define('SECURE_AUTH_SALT', '0m3DFK#u&_NCo.QP2e2fPG2HyKi)cu]RTkZ$:pauC:kFYq&eb+yBY<SG1PAL46_k');
define('LOGGED_IN_SALT',   '=mdw$|x6kMg]a~~+dVd?`=y6a%`b^Hk=GL`ZK&u``*BI6u+24mBbC)faD?[7IcZW');
define('NONCE_SALT',       'R&dVMnI-WhGnpu1Gg~qV{-4/_`1bzX7C}:.,<F?z09}y3^ibF[.`Ior$7`RL4`9{');

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
