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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ptL8ngMVKa|.Ae>U(c3;YqR}~h7_kwqhL=8Y4f|9:>.Fhw=B>,+*zc,xB7>h?^dI');
define('SECURE_AUTH_KEY',  '-QNxfyXO|7t>h!,<JwMe/LuKaVM!HKFD*-8n$w1g%h!s0u#T_7 Tl~mjOa^bpK3l');
define('LOGGED_IN_KEY',    ' 7{o}e8|ZS4cwX8Ue_0oI=D&+QY4)@.0v|CSZlY|^n,KKIdsz4ve:I(5By4jL0tH');
define('NONCE_KEY',        '4bm:Nv>CnR)~~Mb|tK(-#HbC|C@yxY}`)oqB{o,{b*R-<oRJ+}.-^w|d&b-iCI4Q');
define('AUTH_SALT',        'P!nz}y8GixJ=T-;,]`|`OJ]KFeER,=UCt-p#v~0XSG;VY$)Io]+w+P$2~t~(8|G+');
define('SECURE_AUTH_SALT', 'p}h.Ukf#8$i5bmuuEy`8O|WmcO.mWrB^vKwZ&i2>x[YgtvO;j$z}n7{QZN#%C|38');
define('LOGGED_IN_SALT',   'Bma[y9 ;*K.eoTwOq2iB&fEINM4HFl;5+r$(I&AicscS@8q]|!y|FG=)*+I6{m|}');
define('NONCE_SALT',       'lWs8|qiw[ziaeC&7DB}R|$WQB@f-d(9<D2ugcT<y*6-myhj=&_s|:fyq .7[PG2^');

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
