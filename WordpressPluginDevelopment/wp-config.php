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
define('DB_NAME', 'wordpressdev');

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
define('AUTH_KEY',         ' O%?+~]/IIbFy4G_]g@K#[pLyCKs}-|9(I|,V]^BaDR>}rZ1TF{|.^C+@(u@zWxP');
define('SECURE_AUTH_KEY',  'R@Elent#TLPvZUvUI)Eh o)T{Qf,VyWa(mb&=zVuIs?5!jH+qM96i P*kz0&]PmN');
define('LOGGED_IN_KEY',    'D/hM|32On<:JjfWU|E~evziee{+&872Qa=a!ojF-dwA.13%tK>)4a&J2[bSG3-cH');
define('NONCE_KEY',        's|/9+]_|YN}-ISHq]:0[,Wj%7z@P(;.H1%.]+EAX6*dot$v 2m1&ppMQ%4Gq+/sQ');
define('AUTH_SALT',        'Dv{LQOHsuW#7x[JQu+Pth-[M*B7,q+bCg1J|>X?&3K}(A z!|tjFugu>G[6qukgE');
define('SECURE_AUTH_SALT', '!!m&7zEm!(ec*%u1T*L29>$x8g+F23ui4c p^H0_%V2?lbvGveh(%zNxQw9X+!aR');
define('LOGGED_IN_SALT',   'R1^DBwF*u-yZh:c-h3-Cg`+ok:7 Qhett4a^<>,z+X0N{E+i41gjf%!+H4]@h^jE');
define('NONCE_SALT',       '9=[%,?*t9k8 `e}_WF7|9TZ2&.GS2[ZP`B_^ >/`v)-f$1tLX7-F`~9{r;?g?=zO');

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
