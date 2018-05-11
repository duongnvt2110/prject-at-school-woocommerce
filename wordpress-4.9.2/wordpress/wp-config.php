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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         'I99=5mA7*LR!kdm%c%CY{o0*m,}py1~)^(h;-*b,u|CmwKB[MCfzo,TB!E*AnkSq');
define('SECURE_AUTH_KEY',  ',+<mlh7l`ZX(Or@!6|i8lw--Y2lD8@WfEDcjo*I.G<^k,k9^I%W?uRdOxOsw@Zb8');
define('LOGGED_IN_KEY',    'u&R{ZY%v/q&O2|NE38&(z9fd/fJ]Z%>R97KcW.14t]TS%A_?DG.*l}=r|PJx8wNZ');
define('NONCE_KEY',        'HVLDPx{)NaU8%zsEEjc0AHh/mR(0UP*QCbc!^/qAL?e@wH5<O:89Bsj75M+If/+R');
define('AUTH_SALT',        '`cy&Ach^7}/MSgvTttca=>AQ>4n|PK__WhEj}N{}<>?E6[tah^Dl,:d@.Mm4zw(a');
define('SECURE_AUTH_SALT', 'Df}NVn/L;RBrAU@t~!=m3-BF:=;=]bUW{AtLd4Gmxv8/no%]&C)1DdlTGl:k@LVn');
define('LOGGED_IN_SALT',   '7$@7+!]gR6ysaE]?Ef+j5Ww?*YH-k6oj?neaF!KhYs2s/YBoE&vqK(dKZ,K1[EKP');
define('NONCE_SALT',       'R1jo^};b#zcqB.nE%+b*Z6HZ0x8^oz4=S}]agC0-Uuix1i<(4& ^.sf0InZ,Xw}{');

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
