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
define('DB_NAME', 'physiotherapy');

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
define('AUTH_KEY',         '^VjgO2^M@oEokIr-I+4 Wq{+&^ceHKX0tU[$EJMA%-G#fD?oRpr]W&uTz*]=pv<+');
define('SECURE_AUTH_KEY',  'yxTTDSfSWmA$}o-0ajkX+.hz)&cFe`FwnOUYi^HSTz@/2ZHWdE6:/<+TN`Gn$wEF');
define('LOGGED_IN_KEY',    '_BiW>;vBSQshD*$Xd:PVF08zb?=5O),hUq6SxI|:+D v7M%y=4F6X~AS%;CH#8Gz');
define('NONCE_KEY',        '*|UTO5^<#4+AgG&a-j6[6[c{0W_mfeS|7vBxW=kv&;_z=)+5UiZ)^=(|#$1UW{|n');
define('AUTH_SALT',        'm>up_DJ+N#e_MQAM|&d5HE6V/gHF-hPnb?I=SAGt)f jo!0bbhHQ#anr+Jw0um$0');
define('SECURE_AUTH_SALT', 'Z4Q,>+!eJD$VAM;Pmk|q;[vsf5a]hm%=]fi+*+=kQeghIS<|,~UjYSX_7LOl_4GH');
define('LOGGED_IN_SALT',   '0Ot.;E+b^J$+Kn5|`6o9H*}A6nrw_QL-{+$AHg#2yWV*v ~o6gXuW7f}s]arB:jB');
define('NONCE_SALT',       '8`:,9.Mxr?4Tl+OU9t>gmy&%eTWs_<x4gt37U^a,&$3S-;KL=7.e;rhFA5UNk94r');

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
