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
define('DB_NAME', 'theme-2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         'EMRp|bp,+KpXy(-5v4EHbkNKI%)grorM$]` =3Z+?9P>D*)_Q- ?,Wy!6LB|JDu>');
define('SECURE_AUTH_KEY',  '|#{Pdnd-S?-i{@V4pI07E|o~}Op_a><5Q<HC;HU_;2VtzvP)[LRn9VMiLCi@dm^#');
define('LOGGED_IN_KEY',    'CdaCse 0BtI& *~A>_AM};/:&8 5=X>tL5o&X8nz*&Mit*QYz&,p50{3O]+/.U7G');
define('NONCE_KEY',        ' qwkg`v0$7mrU.mPL7s*1LOrfr9a{:?7v+gbYzWy6P^cc #EkYln9|||_N1smE:M');
define('AUTH_SALT',        'W78Y-L^6i_+|F*y{+~eN^3;F+@b|~d+9p*%=dCiV#FMm+)ONz~KGQw-q&SM5O*D>');
define('SECURE_AUTH_SALT', ',fAoIRZKMetxt{`5J8Qff{eDqNLe,2EK(/]6yU^OJ*/X(kxU.I]OpuvH+q5<<[Xo');
define('LOGGED_IN_SALT',   'HI_s~y EDXsx1>_Pog$<|~3C|$3#qnZ2tgr3uKO<LY*KEk0c-(Yh2_3gZn*;f)zG');
define('NONCE_SALT',       'yPqXYY|$X0]>Ma;FDQ[7#%ytOtKn2R^ohez=ZA_QC~71TX~=>u^cV`jh:*]96_lT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'themetwo_';

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
