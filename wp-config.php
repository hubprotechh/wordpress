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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '-mRGCgLAi9Hz?b@TR!VvME<>5{a/b[/Xw4:$|ze=6(Vue8ipb_XFgS_#z0*~y$><' );
define( 'SECURE_AUTH_KEY',  'diY&xP-(h$0q@#[#siUv;{T<q@bS|rK1iz;x!;+_2C|AB[F+gov_jP+ig6vp@ jF' );
define( 'LOGGED_IN_KEY',    'wp?<3a7KLx&GH`7>^RKBb7-^hg^Em]? ~fT-.*VW1uYH2CbVI94~6f23#.`tEasj' );
define( 'NONCE_KEY',        '|#i6QfA4[B| AJP`Q?ZE1KT|.-tFwyl(i5GC(~oY33iJsy&+kU(nRsO>7.<[(]<;' );
define( 'AUTH_SALT',        'F`]);&SRYQJ[.&D02(LzR=H+sq_.&Vlb,{])$;7ot>un3}:K;eY{PHF:LjC[TmRs' );
define( 'SECURE_AUTH_SALT', '-LUJAh;bqP^;wmk/|2wbZ0K);c?OABK?AL&VZ5_^`a`7qKB1y!T;q%-~aEg)XLnM' );
define( 'LOGGED_IN_SALT',   '&n{Omu}{f@?47+Tf>USkgTA^jI0(Q3LOcFLn1MX6>_ (]0g_%4gca,6cn#V(]#yo' );
define( 'NONCE_SALT',       '|p<Lc904vYCK?v9JzUm>0nf4k+@UAYW=XGF-9[,[jk )qivsop,NbVtr#wa<:Sfq' );

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
