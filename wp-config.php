<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'intecsa' );

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
define( 'AUTH_KEY',         'w_n&h.i7lS<o,8On)a9ihPjv06%cUl?,BvJZUv#fk|J72]K6Q_9T;Wm%SH=j7VZk' );
define( 'SECURE_AUTH_KEY',  '9`6vQsdBt|7i{6U.5{b:UbhpM)WFB;H,TU6` @M5$3JXImnB[7*xx[Gz1Q*8y:<}' );
define( 'LOGGED_IN_KEY',    '@DuP[k5i}qY-<xXur4pLGSSZ9loG{>{jMU3k8;4O6Lo[rabO^D9j_cIQ]#/ldFkc' );
define( 'NONCE_KEY',        '9_s=B!Xw?}brqVjXEM-&4%|lYt.JJ=jQ(!=gvdgM,b=SUC#5tRo;G/J,eI@q1N(r' );
define( 'AUTH_SALT',        'GW2Xr@4c_C2B|BnRQ_#WdO5B2o{X!3s{vd?-`hvHUR{&2%-%?J,I&~sh1mA::vH}' );
define( 'SECURE_AUTH_SALT', '<-tr|wc=&Io]~~NNY+>nDLl77&}5Mt&p9)BfA.T*Y<p*=?QLTu3xitBu:Vb _14Y' );
define( 'LOGGED_IN_SALT',   'I3]aGESK?4&_{6_)fC|8p<MbnewwZG$z?p~[uhWF@lJBnfe(mB0fN/*4|jU(c$Da' );
define( 'NONCE_SALT',       'sRiiq//9trUcY$7Y=CAOMD<=DS|`-z{1#XIbia#w8?Cn3^akj41)yPC]Y7@e a?f' );

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
