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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

/** The name of the database for WordPress */
define( 'DB_NAME', $_ENV['DB_NAME'] );

/** Database username */
define( 'DB_USER', $_ENV['DB_USER'] );

/** Database password */
define( 'DB_PASSWORD', $_ENV['DB_PASSWORD'] );

/** Database hostname */
define( 'DB_HOST', $_ENV['DB_HOST'] );

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
define( 'AUTH_KEY',         '?,jTWe &rn~~hlG3?B;X}=6.RM`tu|DV1];9qgYSL H Kf8^_`ta7sAiI;2,$h{J' );
define( 'SECURE_AUTH_KEY',  ')li}&Ov@^FwAkwS3@?O;DmcHWbUtXO]AAX1ZUboe1@M **4j^[XGqO%}unYYQYow' );
define( 'LOGGED_IN_KEY',    'bQ)WnOdprdtDEE`$&0g}dM.Kp?ZP?7Zm5< zOS8%7,;yT`_f3fG!,_rU5r+UI^bp' );
define( 'NONCE_KEY',        ',}95jP_kHbRyD$W}+}%2Bn2pAaSQ|Fu~7?*o<(|zE= $P0Pb:rEv6l$ 3oj<mpqN' );
define( 'AUTH_SALT',        'B@X_)?J?$#yYU#P4hjCZo UuDhR;a`tA40i %+Dm(t4_v=U(uI8v(K:S`a[WwPOs' );
define( 'SECURE_AUTH_SALT', 'gQs$G.9o+6A7+i|qoY$nKdx=#RVhv4t8.5BT:6lG)`W^0ok&m,az5]QDHW(O]uuB' );
define( 'LOGGED_IN_SALT',   'Qy%=FVfAH^i=f[16t`[IrE6xmilp)3F>?5]`2l=6=9?~faC.YD_pfKh4@x]oo(7x' );
define( 'NONCE_SALT',       '*5#lqu@0vY~KcWOvisz3v*jKa}2|HX>k=s94_t-ByGQ_C d/x;j#_^kz-N)&fHq*' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
