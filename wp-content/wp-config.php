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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'o&]op+R^`3X,;7?$)s`m?N ?6%Bx>dbzm&e*wUL^!bt_v##>{uf0f+{Qw@~u.On`' );
define( 'SECURE_AUTH_KEY',   '*DV(G9u~nZ@_I1X~3=V;iz 6Vo:^~Zi.it9i!&<w/*Bh[&5+%E4I~X$*!nZ`U#@H' );
define( 'LOGGED_IN_KEY',     '=E}EmUrqR[$:!R=:mnNm_ef[<AXqZy>)uP|VgY^:e.]l(;>VLE2xDzxK%vq5Tt]>' );
define( 'NONCE_KEY',         '6`%|IRshv:skIol@`;/. JLLNa&OUYUXlGNOXFU`uU;!d6F(c6Ee&=2Te*>T-zC#' );
define( 'AUTH_SALT',         'FJhD[=_r.GSML$F,I#]$|rZ+*^11)@Kd@h]w<COQTpj:WW<s(+rh][G%9*W[sHUC' );
define( 'SECURE_AUTH_SALT',  '_v1%3x7v&ilx9ZB<ub/[G~VhT!@6atW%@OB1SI095f-K^[2j E_kaBEjB ym/sT1' );
define( 'LOGGED_IN_SALT',    '4b9|c|p.8Y#//r^H7o)YWsBM8{Szz_,Q.{G,Dy)tLBT 7K:qf4S+oJdAa08ixf2>' );
define( 'NONCE_SALT',        'F|(~06it]V)^Tr}Vez@~mGOE1F8%^BfrXlCCWc^zeM}2rj<L`{t-ma~D%z*[:V]7' );
define( 'WP_CACHE_KEY_SALT', '[0Qeo5t@3q%]#vgU{G_Iz:A[lTw:HPqw}yt$Fd<8CiT?s;g[5OZ;GS33:W2lQ)zZ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
