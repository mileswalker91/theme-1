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
 define('AUTH_KEY',         '?2^sT{mCv?1zP2j0=4j7Z7MYcx+^PF8ZSUw3jDS?rSt/sE pfmNCl.?OlOTY9#zn');
 define('SECURE_AUTH_KEY',  '&)K4>G2)=TE7|N0mysZ<tlSf$EFe|~zDTU[nL)(<w^If>VMU,H3 hHmws[dzC=4f');
 define('LOGGED_IN_KEY',    '$E;aKuPa;!Pj/vBkWlJnu-|^P%-:b6:MkK|HOB5Es+fdi?QK}*`VU]:QL5`r`iPP');
 define('NONCE_KEY',        'SsOD!E)oOX=#qMp-nDt|sYL+w*-9iNVG(nH;*[/XHS5y{VrXs:nkWlK 7})-=KRR');
 define('AUTH_SALT',        'IXt)yl?B}tJQN2x~4H|H.[o?5?h10}4WLA 1_Zi:HiOLTHR5&a2h6T;iW}J+WRZ`');
 define('SECURE_AUTH_SALT', 'D3feZJ:F0>vi{KKh3TEw+}2}=e!|CV3xHbgwFJ)+w?Af-???.rZ9tT}J:<ax;-Bq');
 define('LOGGED_IN_SALT',   'G%>KxRF{YFs_3r-`p|[aM_+SXC@G2l?t}ZEYhd]JHQhJw1=%;B15<2jSvoQlzh^v');
 define('NONCE_SALT',       'Qm94K+u.A[guUUu9r+The[WStphgrN;n|n0o|td!W!|r=-l%|l?{ZwcIW,3M16y_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpmar_';

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
