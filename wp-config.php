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
define('DB_NAME', 'professional');

/** MySQL database username */
define('DB_USER', 'rmking89');

/** MySQL database password */
define('DB_PASSWORD', 'Hockey10');

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
define('AUTH_KEY',         '<8N >zK.<<oxz+a%>$R36$@Y` Pj4@ZED PC=*vgfcQOx)#AL}c_u?fePZi_6HzK');
define('SECURE_AUTH_KEY',  '%L@2AB)eQ(7[;T*zir(sqE=Q)Ih+v>bm@Xq.Qm_>+0tsn5$5)}ffu} P :^^+DT>');
define('LOGGED_IN_KEY',    '+5(T[82i0x[b(;]NBw!o6UTkV|=WpOc8)MaOzD%#XYJ<ty,,vo]Pb~L2pr7rh& e');
define('NONCE_KEY',        'N1N{u5khGI{yqFX-vxFT;9;[&<OXl-6YX9xF?DZ(1jyQWZs#q-}[Zdx*o>=%Wyu7');
define('AUTH_SALT',        ';u_xhX4l)[hC}X0OPHO 42CA}&Lkch/JP2R_-;_dFGyCoOms#E[@zaChG749U]~4');
define('SECURE_AUTH_SALT', '42r&o?dE& {`aaJd=t-O@RYd0i)n!J;)))`J?<srOcX02~[YSAQ/mw5VzGhj&ku_');
define('LOGGED_IN_SALT',   ',I*SxJ[Y.SD)Qq1;^zOk6?ZUOO]+,#t1,N{GNCkN<aE$V9}joIOcy9w84bd3-W:s');
define('NONCE_SALT',       'mDm k1=}/K:6rha(HwTaKk6X#wdC!M)Yv6AUCWg;K,R%v_Xqj^v9:RTQVOI%n08v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_2';

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
