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
define('DB_NAME', 'novalija');

/** MySQL database username */
define('DB_USER', 'novalija');

/** MySQL database password */
define('DB_PASSWORD', 'novalija123');

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
define('AUTH_KEY',         'D}<T+Jkj0@)VG@=C>urA(sUrrqiCT_SZ88CPmy$fm~Aj]5CdkjS>B`^m_=P;`Jql');
define('SECURE_AUTH_KEY',  'i6.PXK[{)2(=/Fmo;`LF{_fsU)QB!LV|1(WgV&=_*+D.c[P#K1r8+=ch/Vtw07pv');
define('LOGGED_IN_KEY',    '/vM|^F-^JLu?i2s:)B2(0=2(nZ##fN{&~B5(^*#5^z<x(2wtq@IR?PJOVq+ua_S[');
define('NONCE_KEY',        '!Vrm7390b.=X6K=^(b7`R}{|ky}Y_7r)ctikXNjE]uCP 4)$aLy+)i3QI3e^#K+G');
define('AUTH_SALT',        'TH_JGh[/vEEr3q_s$4F].?6N&KCOx02:O5szZtCBNn^3^_2Mn%H2QUhS_4_Tc!`N');
define('SECURE_AUTH_SALT', 'NM^RC`;,<(Zu[Y+LQ@goeT6mka%vB=ve*nW-Xe.bC{H9(qfXRIqBq=&{|{4wvTu4');
define('LOGGED_IN_SALT',   '&p.pOX(V#b. hZv+dT@t9%*pFhl| v&:2Lzx n---4Y^Ld^%LT&(XSmjVZMK^}<8');
define('NONCE_SALT',       'd!{+oEs(/sA7u^.m-]XLT:KbN{-nPR]}3(5TjD`Vo>RAy;~jV`2t<s*kB]UA]F*]');

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
define('WPLANG', '');

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
