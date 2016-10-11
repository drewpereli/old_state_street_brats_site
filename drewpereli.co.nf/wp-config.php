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
define('DB_NAME', '2214988_d1d2');

/** MySQL database username */
define('DB_USER', '2214988_d1d2');

/** MySQL database password */
define('DB_PASSWORD', 'CVh4Hmu4');

/** MySQL hostname */
define('DB_HOST', 'fdb3.runhosting.com');

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
define('AUTH_KEY',         'C=`jAa8 _h6~)m278Zb49oyC4}yZeO|IG-*YIKyh-_5#WaCc.%8,+>=15Z  !b|M');
define('SECURE_AUTH_KEY',  'X^}=<3)dPilsVcfVg!!2+r&%Mv5$&}oFHi<@UNV}BTy6CH^xURLkk5v/{Df1M!yy');
define('LOGGED_IN_KEY',    'B=1Np+,HRY=qa[CWCw}$0d^36mF#&; 6_Uq![`U@`gJ;PJQr&oy7.&3}UE,/7]16');
define('NONCE_KEY',        'v4MP=0H*p>yuTfRXFDCxfKW*|v8T#$PbKk7 i~J_~+^9lk&IeD?j_Z4aOx<px^-E');
define('AUTH_SALT',        '2Q@L20_xqBJKYmLtE3-&Bo!,3K./.PHt/!`8,.3|t*x!#N<CMYyO2]2Y/n*:,02N');
define('SECURE_AUTH_SALT', '+Cx`d1ZkZ9H?smuT+{co|p^(RZPTSHrm4<jBxxoR6ihl/>I/s5e1Cmf!r%iZ@35b');
define('LOGGED_IN_SALT',   '8*/R2kzkS(I]oxCjW/|NwT[[ k!y6xw( U4w:O+i@R`j2xGbN}=e{)*#4gXtLq(_');
define('NONCE_SALT',       '4}k4uNBYwW*G5mQT1 cxNjBzz4436zE&KT!f<6:+*kF&oFP99ij}{8i?#mg[/zol');

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
