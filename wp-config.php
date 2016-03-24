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
define('DB_NAME', 'viviansgrace');

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
define('AUTH_KEY',         '<GvN;cn-#H*cu+oE U<a?|{H^B>Tpb|6CyNLW=b9ikm1-y6CF`l~H{D<pqQDV)a`');
define('SECURE_AUTH_KEY',  '+?i5Y]QS~dx!rkEEMdRkm(+@mB%!rCqplLlFL#C5`kE*jy+|<8V7C]O#)%Yt!&]x');
define('LOGGED_IN_KEY',    'J.@3:n-MPx__I;}SWr4GXYGu[8Jm:z0Y2>)U?rLF/OF/dMbz:h0I*+lhL7:WrZtN');
define('NONCE_KEY',        'k7u?#u~#jEW^fY-:aHZ?`u>4B+T;la;-($wka!e9z0d7n_wQZOef.vBy+fGD5Ii`');
define('AUTH_SALT',        'V[_-,Ee[LH`{OTU.{=F4QWj&X[oX6F>dm&TM5Sko+RvA&F)U9BYjy`RZ`5]3NXAQ');
define('SECURE_AUTH_SALT', '++()W,~ifeLlDukL~::gGIMiYnP<xImO]ZB f:I>Z:eL:TJ_jiZ$O4;t*F_?g-XP');
define('LOGGED_IN_SALT',   '1+qcy4/fdDzvx45f@xs?9;v_P##0HyKx4W>^!YzBJ/!+;+}tjZyrfr+T:x)r4D_z');
define('NONCE_SALT',       'Q)i[O1E;b|2l~6W?O+U]$=^/k-;D%P--^SH S/7;8Kv(*p+YhkQeF8R_M@z#9vk|');

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
