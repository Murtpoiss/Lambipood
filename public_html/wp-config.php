<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'np10580_lamp');

/** MySQL database username */
define('DB_USER', 'np10580_user');

/** MySQL database password */
define('DB_PASSWORD', '********');

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
define('AUTH_KEY',         'eiQ1$v6w.3ehPOR~hAkC?+*BN-fh3aH36O8B-B:Ri`YTgf^WmMH5 Xu:*!;D?+By');
define('SECURE_AUTH_KEY',  'D=h6wA EU`*`XAr/.!oPoPmlEO2e1mzDIm]QZyL/L/x(6~a HP-5vuU%~zF%Fw_0');
define('LOGGED_IN_KEY',    'vAt!dL~MUV?o8P|xN874TkXY@Z6)Z_7-HV|} >mgaC(@OCf  )+x=32Z]PjHB0B~');
define('NONCE_KEY',        'LIG> /:BJF7)BsCcSWDhpg+evuap>Y&+2vKy%@h4WXFE%^lKou~$*qA-o*a(H?Bx');
define('AUTH_SALT',        'Gt1,3]|-EBq{GWWF9/0sg8O.-rKbK2YEv-[bVMR``-N$q6tt JKi4gie[wv0uE9+');
define('SECURE_AUTH_SALT', '+u[#RS5.ZEAJ6B.{s&_(v{B*,+32FB>oL+-W^>GgcGxVdv)<6[.p/}yp17U|Mau+');
define('LOGGED_IN_SALT',   'a6ga{|*e.x/zH}j-E:VE4,zxq&DZ(X<g9nrA$NPtq@F,`fa#79FGCg{Cx_5h+9~&');
define('NONCE_SALT',       'Sb>=h0V/`v|r?to]SL6A1;z7X|Mf1|0TRjK<+74!@v-+mMatp@*+S|UcZ_3|r1u#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'et');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
