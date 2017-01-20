<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'spisetid');

/** MySQL database username */
define('DB_USER', 'spisetid-admin');

/** MySQL database password */
define('DB_PASSWORD', 'minimum64D.');

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
define('AUTH_KEY',         'f+Qngp@0%x%Ej#az;x@s%L$Fj9k/Kr$=s2=F[Nt ,@*gXY|Xj&#F5|VW<PH{ANmr');
define('SECURE_AUTH_KEY',  'i{MKfQqJ2oES{eU!!0o`dCN#z7LkG_AcG8:-}o/wF+|PG2Ov|,27Bp?7FW_GjoES');
define('LOGGED_IN_KEY',    '1T;>l~3oAeb};m7.*c-E|QY@V7*>O*VXM+N{$!+ZP~8l7A6wMymdUbiO5IG[Ra^:');
define('NONCE_KEY',        'U3F;T3?`eX3Zy^~j[cC}JWxFkeRP*!&x}^PZ/ebO@|Ag]fU;@-Ko$-WE%@K+px}>');
define('AUTH_SALT',        '2h5*)1S/U8T-y?= 8shS+@=du248]|RmI12!Gfoc&<YXe$*HtdIH@|jVw0SFKH4+');
define('SECURE_AUTH_SALT', 'Bxh0lP4npa:p:L]xp6]hJMVNhv9]+`Evl,4<Z9YD9RyEG(<h +De-cl5`SNo(]Np');
define('LOGGED_IN_SALT',   'Ik3Toj&e$ApAdE~=|jGg?2(0b&zwTt>ZN] Ze65mp~BSR.UQUW- =,S ~hWg>6o>');
define('NONCE_SALT',       'xB*[eQ+9HfQk=hc|uE`*2~chi<pdBb },,~VMP<ND2O-//8M!KhI@rQB<?sxsEEM');

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
