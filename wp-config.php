<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kin');

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
define('AUTH_KEY',         'fZ1SaA7HJU5IML**LsuLEdw{ ^PquYAbL~Q$Asz/-.AEeElFa+=qMm.]>%jhceyS');
define('SECURE_AUTH_KEY',  'dCC)u3&tK0,eW<%+PFu4B$F8{2~Uve9;1XLssO&|Ye8/ +&|H@}G.PCh_|[svj_R');
define('LOGGED_IN_KEY',    '}V=+!*OlO:_h|aD~WfFg4:bdrM((j-h-~DjZm/0EnAr_l9`+%+N!)d 6*]<=(;[M');
define('NONCE_KEY',        'A+a>kX<8n1/-T0-Zm5A}4dypiwLn^-o_=WSS.I4b$tTlI{YM.s1S~toXyxxgP!ug');
define('AUTH_SALT',        'mhPuoN+[X>I{}<[$eH^ZqWJ&*|{vu4pLBF<$OVV,)-8Rf?WIXydS817V+MBggBX-');
define('SECURE_AUTH_SALT', '-B^Sqx2,``1%`k&UK^E7=s24N}L)Kr!kPt2?#a=x3Ec.g]pXIU/N%N7jeGcDoOY5');
define('LOGGED_IN_SALT',   'te=WIx#d3gVy|4z?&+28$HuyVjA;jBC=t%?P6hyEMimeR&L.U@S1w<tHY%I/PW9l');
define('NONCE_SALT',       'JCrxP>BQVRPMDI0|.T/[hVMY+neH$zzF^.w~r8zT}%]{`IrVeE4x:q|=`z;Ruim~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
