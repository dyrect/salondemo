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
define('DB_NAME', 'wp_salondemo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'UQ8bH{TXFB[zH-uFOUvaw:j,rge~F#r(&>6;,xm{o{[?GkI7AXtwS]#Sp[UVscj|');
define('SECURE_AUTH_KEY',  'D$2MA@Z1+wkvu,rwmS @Ro9)l)Q!kj[$BZwD~+^U2xK^!TrxRYc]-3!bURz&<<SI');
define('LOGGED_IN_KEY',    '}EPf`=#aKA~JvG x&YeTm[7&EjP._-*z%}[Y3nND0VDOG_gfiS#X@:soClU&4x_y');
define('NONCE_KEY',        'Q1e3nD+~m2v`pz>TtE |J7j+Zj![[3[L[dCqD[~P-A]0eV:p9$r51Wtk,,p15;k_');
define('AUTH_SALT',        '.CUJQ:jpVQx3+VBYLK)#,@MZ.WJI? vre&[DWB[g4}Sk%c<4-S+{7H2}+o)@))x,');
define('SECURE_AUTH_SALT', 'oT8Mr9xA=ZCaT/-|ft?^{8>%}7UEEr,y,2+@7= -->YdG[!@LAcwva!<_N$}NVx5');
define('LOGGED_IN_SALT',   'ZLo96myU+^5!%JBs$_L7+G:`(Ptv?H[^cv552p_!W2|W X_ ro+dH))|.FG4@@QE');
define('NONCE_SALT',       '8MQvX+Ma<KF85Ky`T1lLZFx`3PD.ZGN!O1|Yx ]X &N}$I,i$7X+k@A|h2@p`*37');

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

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost/salondelight/salondemo/wp-content' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
