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
define( 'DB_NAME', 'vercel-project1' );

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
define( 'AUTH_KEY',         '%.T,RQGxxl<zy xU1w5|,biL%gX$z]A7x8%V)#2[Q$L6;(;kYK{]8Cjsog|^Kj0`' );
define( 'SECURE_AUTH_KEY',  '!#KL{bT$^&tij}-Q``UEYcb=>Q1x3oV_1HzO~6d(YgaL`]D,{(|O[hn-J>B{%m34' );
define( 'LOGGED_IN_KEY',    'O|5)AdPso~b]&td[O6t2u2bn14rn?JvWk,7`)tM~]r;<uUvV20TDDh-^mV-4mc5r' );
define( 'NONCE_KEY',        'y5WD|mKl8GTQom$$IR4-IR6OLG;OFDjEEHM`g-#3Aijd@S()d|;?C!mR](j/*3To' );
define( 'AUTH_SALT',        '#vvbZ^xaJ*,HVx9E|uIgV1f,=63cR64zk54_jN528f/ppj#V1@ho1gItUa75Lo7H' );
define( 'SECURE_AUTH_SALT', '@;?=&@nLG?=: Pd90=Y[_uJKpVF6=(FLP.w_Z:NB8/}.~7mFpDvMj%TVF4V7/UnN' );
define( 'LOGGED_IN_SALT',   '3tH0_OlIJ;WiK)kx<#HW}^O]-M4nu^z8b2+SVQ$-84$Mcp9p:LUtR}bdyB<K>vPY' );
define( 'NONCE_SALT',       'R7)32!%2H4GlxY$:oD-ZJ-:x/?4[+>?%vA*1VV#(.i6s+w6Ujz+ngE7e<pjg`^2=' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
