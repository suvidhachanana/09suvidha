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
define('DB_NAME', '09suvidha');

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
define('AUTH_KEY',         '?y,UYa9-vkOCC9N+C~EJXVm>=5]T`Sg&t{r)`&ym0##&Xz6ew]%hrDYf4ku7a@$v');
define('SECURE_AUTH_KEY',  'Id99gF[P4:-XOm}TfbiJ4{rG|trNJmS Y]V@os&z|+JwMZ8tOr:E:m<D=<x_K+fG');
define('LOGGED_IN_KEY',    '6mDjwj<!bpjr8J8NXvQy!IIGwBQZzPO,?CVN:HJu=6~2k?)r8H*$,r8`.-q*Bb@Q');
define('NONCE_KEY',        'r7$b=R7:>v*w|JA`?b=QE7i{nVHJrG,B}gg`C0fz__CnlFy0OQ!r{R}|CjmP+d9h');
define('AUTH_SALT',        'A:k$CuT#u1h aYoh_Kt);6%Q*S4Ax_|Xdz%soD*XKxBpls`3PSwbPc,/PEu1=NR2');
define('SECURE_AUTH_SALT', 'ptRiP63KAlQ/r*[AR^beksE@ANg^2W^C^1YGj{W:do`1sd!K`@n>sN<1m:X~h2Ji');
define('LOGGED_IN_SALT',   '$4G100:{u_pDfFxB98183L2B:PBN;:iSp]P.nOu)Sxzx.j/0.@?)RO][nKai.utg');
define('NONCE_SALT',       'bv]r=hddT%*tpd(2O{BP.BLq5j{5$HM3l+ PF5Ta?M)qsBAqPD0[A$2~`4k<HACZ');

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
