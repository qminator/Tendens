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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/customers/e/9/9/qminator.com/httpd.www/årsprøve/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'qminator_comwordpress' );

/** MySQL database username */
define( 'DB_USER', 'qminator_comwordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '20214405' );

/** MySQL hostname */
define( 'DB_HOST', 'qminator.com.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'IvPcVM-w7V0X9.go?kZC,D /FbAkp!e:3<9n#;~]-7G>[Tg.isTwO1Y8@`0|-z)V' );
define( 'SECURE_AUTH_KEY',  ']=rYqNM+QCf.MA6H:<sp:bAOaDZ)G{-afD.d79w^mrRIY;Rl OdR G?)e@E+B^1q' );
define( 'LOGGED_IN_KEY',    'zz64O:o6F67]8S6];U;H&xG<N710Aq:c&Oz++Ok.1$^QK3-Y[Z?ufVc`4FFK^{Y5' );
define( 'NONCE_KEY',        '3n9cl|a|s.X[+6]=Qsk,CTb0ZBL&9Li*FN&gEH&=W,cyUB$2wxnU[]Q3<ai>2<|#' );
define( 'AUTH_SALT',        'uZ8_uS].gBBM~/&lHCJe-=hestnd<n*YoWbq~|dq?@qTT,->s`-!2%njSiST:N:B' );
define( 'SECURE_AUTH_SALT', 'oFgXJ*~.dBDM|H_w^S3j&{<2.=PYkiksc6EmX4QiB)]{[!EDw@ifo.&+}o:M@]GX' );
define( 'LOGGED_IN_SALT',   'ia&T^H_XWL<ew`~1JK#j6T_.8.#MKP>~K<gH=]PkO6%!>0x;6pJPMmmn*W(lsV1r' );
define( 'NONCE_SALT',       'kJDaM)mFU6TD~E`$T44LZqy<^tY!xsp3^Q*hLAr;bS6boF7Ifr5-KLbn-45v /B*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
