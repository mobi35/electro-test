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
define( 'DB_NAME', 'electro_consult_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Asakaboi35' );

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
define( 'AUTH_KEY',         ';NBoK0>Q.I?~*<g$$H=vi{--1A;rSJyf[MR(ewClh%IGs46V#hv5-Vd[.#iLKo#F' );
define( 'SECURE_AUTH_KEY',  '4lEetP=/lWf<_qQE_j@4uR-*FFMPp!&X<e2}p[]o)A<f320{Z#<>8`S58cH)(pMz' );
define( 'LOGGED_IN_KEY',    '6zij!qI#yQ1r!%*_VBM6I+{YCn)ca n^> (zQVPwP-z)MFXM%@Q>(t]R;J!0v(h+' );
define( 'NONCE_KEY',        '9lj(c G5a`hxl5.{(K){6b%u<=z[$yz:3gl#9A6:}%e;N?KQJ{+7(bt=gIlBY;dw' );
define( 'AUTH_SALT',        'akuU1MdDKysM#J@-x:MFcO~CX!}w{8CEKeCxWLGG(CT.QLSE`BxV0NkXPRd=M6[v' );
define( 'SECURE_AUTH_SALT', '9D0Yj$QAL!WroA*}B&g39at%kEV]dIW?BC46ron;o_Kh*0X;RKp>ej19Ofcz*_UN' );
define( 'LOGGED_IN_SALT',   '(,LNYr7mc}^KDz=qeTgnz]!|vnfa?|(dXK^(aPA<X,e?ibyn|Cs:$2fng.@.r?LD' );
define( 'NONCE_SALT',       '#H`9fVC~T5K]|MBOdpZMpX>MC<,({,W/hqBp-#VH.)CRhx!coIuP@3Gy}X)`#p)?' );

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
