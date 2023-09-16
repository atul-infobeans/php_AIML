<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'poc_wp' );

/** Database username */
define( 'DB_USER', 'rootuser' );

/** Database password */
define( 'DB_PASSWORD', 'server.123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D7-MLdS{12 <QQ80PNP3+9t!LN<+$K+ufUX0e@*6$0?lWxmxHe!DST-i:19[*GYH' );
define( 'SECURE_AUTH_KEY',  '8*)R=Vl,*kCPHY;MJ+$`m,-LO;9T9v^mzIOwe9FfpVBFaLlm1_C2@+z!e?okCeZ1' );
define( 'LOGGED_IN_KEY',    'Zuo+YtHl`+w+mI|OOr$M<0KEUGp$FA|gAcMX]e]p:3OIS c9aSX[N[sdxGBPV_x0' );
define( 'NONCE_KEY',        'Z |TE.#]IL(%xL_b(`$)IK~? SS+uf%;yh%=@tnlU?w!:Ih<b2(!Az$`e@R;mb+@' );
define( 'AUTH_SALT',        ')m$KB>]+L R@yC;4A7^c]{8by>6hXza{&x^GVp7?PmR;|r+6C/z=J!XVe@z.ZpGj' );
define( 'SECURE_AUTH_SALT', 'd!.pT@zSxH|qAkA4I@k?K16.DgW=|Tpc+FNf-h/r/.~ Ci>nG@`J*klpVC.3jjNF' );
define( 'LOGGED_IN_SALT',   'odPQM_|EC<Y~35v!E]]mlFH1N!Q$er?@oc%1tknc[Gg%xF{l4|caQr*xJo?kv4Py' );
define( 'NONCE_SALT',       'hDDb6Acxqv8g+i}$eo-Uw=erEfA8qZ&`G~v2f3Y[IN5|[tqybt*f+xJa1M{IVrV&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define('FS_METHOD','direct');


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
