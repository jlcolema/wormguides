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
define('DB_NAME', 'wormguides');

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
define('AUTH_KEY',         ',RzYA&,3wp2T^Yp?*O:d^Mh.}B{4[qIepjVN:Ti8]u+Z.}^&:=l*1m/anEB$Z^$+');
define('SECURE_AUTH_KEY',  '+3(aXE_EQ*KL5!-IUzC,VG<[(#rO;*7xN7SAk*zKxtvG)/3u~F9{y<rKk%7cd$g&');
define('LOGGED_IN_KEY',    '@$7ki/WXI:k_f{j!-KXYu7dFm%+ac/f1 M1[:L#jO|KFv!1M)nz)Mj_I{xy-koTZ');
define('NONCE_KEY',        'B^-5y%G%[dhpRJ`?j*LS,<kd6E}lN?oOkF2#Z|<@ka?r4?pw9#HM#{V6E.:y*e3}');
define('AUTH_SALT',        'v]>q1ri1>?@|*+A~3YYJA_*b/%u3B,|%aOO}DDIN,CK5_v:3Fvc1SAR=R$u5KKu<');
define('SECURE_AUTH_SALT', 'M/]`pFLT@mB=Pz?a6t)w;~V?(J=S.=+!m81s~1dZc`LGb[Nz6^-&47mHLq;V5$y$');
define('LOGGED_IN_SALT',   'fHb+zXZ, e3E4]%#^aIy~U3m&r$L))w$)RSDE)J~WQ52jS}q+UvGckv|$7^b:~UG');
define('NONCE_SALT',       '}B!K)|ij^%%*}_2%AA{@$,apym):*dmNbti)y9a{9oq=[X6tqU6vo%h_A<.-3*l6');

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


define( 'PODS_SHORTCODE_ALLOW_SUB_SHORTCODES', true);
