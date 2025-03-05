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
define( 'AUTH_KEY',          '4:.NONf8L_{~3;`=G@w?R1% Gk$C9[@$>}1|iNm+l(_w[pvgvV,xH$npz),A:VfM' );
define( 'SECURE_AUTH_KEY',   'JJ=7Q}TN?AM&vj@A5|9ic@hdtPs|!e|`B;$cRXPpr WVV6=OMQ|FTLnJ.:9/zqa$' );
define( 'LOGGED_IN_KEY',     '0m~t}V0RPbqRh|$Pu)@`^~xg5wzry&sl(m0/f<_H(QKbFguSb-.tX+p]1V#SYe;q' );
define( 'NONCE_KEY',         '4t^AK%l~RyR6#be(nJl|$RLBMj0{P93|[4V]J%>PYaM t[<scZGv)<6hIn>d?,z3' );
define( 'AUTH_SALT',         'Re?33t!fB^ZdD gQi)?oUL]rIIv,eRz;j;]KqCy}gY$NO9++9ikxk,>Q^T59V[>h' );
define( 'SECURE_AUTH_SALT',  'XDSE.<BAf/<X$H|8I!yleqX7+y)+0*_Da(@0yzR44_V wU%p[V[MM.S5_bn;WB8+' );
define( 'LOGGED_IN_SALT',    '9g$QCqKcS;gN,>&},%0X_DL~IW`5x4X~W!GSV65MXhHtd*S V]G7$b*!>*&EXfRd' );
define( 'NONCE_SALT',        'yh3?ave769b],a&z]8i{2&}/~7~Liw2`Lc*y+}<qtQ6sgh6|Y1&|H7f&fbZ76}=V' );
define( 'WP_CACHE_KEY_SALT', 'ITrx$ I<,9Fkw9W,Fv&C?a$uNK(>SPAdq|(2&XPo$u ZcC)Lw8Lw4c{ h~xO,T0X' );


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
