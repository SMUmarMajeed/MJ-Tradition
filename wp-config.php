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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'f!0*O6>I{-BT^xKtaNVM^>rG=MxI|<qN!#)RgSMwI!}t^35H.n3Nj!j+)=5`hjv3' );
define( 'SECURE_AUTH_KEY',  'z{BLx,$bWdi+TI(u0{#u6[3x8S@)sxi5]V-h(CS`&ON[<uBu.4;}2arPaxj&rz3y' );
define( 'LOGGED_IN_KEY',    '<_:vW]}~U#M}UKK/&CzdQ6 }FK}L-c@!L+<4[2Gg]aS^;]%I2hTx>u=`M7 #AqzN' );
define( 'NONCE_KEY',        'f=h+*J[@(gf<bBK)p#H?>0bpcLA26-]d0!}xf:D/ZWdL|a~e-o LW`e:u>Rs>YMu' );
define( 'AUTH_SALT',        '~kly95Ii4Sea?f<c%~ruUr`_{4gI0#6&cCn[tB [q8tCdZ.}Oa:T,Q3LH*;0jm~S' );
define( 'SECURE_AUTH_SALT', 'MP4?o/6,r^=CQ[E |,8p;g==|s5VZfZv0NO<nK?gWGt:[MK1oe6-bZp5xYSoJ/T4' );
define( 'LOGGED_IN_SALT',   'Vb>4w;+$Q7;id KH)wocjL]1eC}z}He~89j^]jC6rD9TL67TlvmLVoi~Fu-@tXm=' );
define( 'NONCE_SALT',       'd>$NRV_f/ra=CW!}MNA}ue|^//k<o^ 3=`d@dmS+v/5JKOz!|0^%;HFdb[n*p-U,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define(‘WP_DEBUG’, false);
define(‘WP_HTTP_BLOCK_EXTERNAL’, false);
define(‘FS_METHOD’, ‘direct’);
define(‘DISABLE_WP_CRON’, true);
define(‘WP_MEMORY_LIMIT’, ‘256M’);
define( ‘WP_CACHE’, true );
define(‘WP_ALLOW_REPAIR’, true);
require_once(ABSPATH . ‘wp-settings.php’);
add_filter( ‘auto_update_plugin’, ‘__return_false’ );
add_filter( ‘auto_update_theme’, ‘__return_false’ );
define( ‘WP_AUTO_UPDATE_CORE’, ‘major’ );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
