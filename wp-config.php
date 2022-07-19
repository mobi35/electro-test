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
define( 'AUTH_KEY',         ').VwKVZ]#6*)xytxT+4cHQc}>9@J`=hZ;49ARHXIf2O#,3&BqsuSO]&X)?ws1NWy' );
define( 'SECURE_AUTH_KEY',  'kHgw^=#0S2y[];{Q97B7I9l&H]G4`z~~<zuuBWD#W1z?_gOSWB&b|26=U>aHjuM#' );
define( 'LOGGED_IN_KEY',    'z7$Gc;[as(}jz)353|1u)iV*4A3+)&?/VkR_Jwk`UdU]aoO,N^Jt<]b}7!NZ]q8l' );
define( 'NONCE_KEY',        'i;G?rm%/-o-18Ssb>^>)ktB!2<6YJ.h50.(TU6#b+4*h 3*lZS<%^W:@U>m>mG3f' );
define( 'AUTH_SALT',        'VwQ=7S_cn`kKtHr0-XbXib>m[R{?CFYJ0t104D3k%me#Z3{Ol]rm<fIHvN1X:b>E' );
define( 'SECURE_AUTH_SALT', 'Z5j8lwM6@?A*&$&%`PwQal3BSHRqs)^A<NvZjX@^nF/]G$KpY|XJ), z mb|}JL}' );
define( 'LOGGED_IN_SALT',   '0rV^uvLB%i0MDHlWS/k2 j& B;}w<Dv+;SKNQ;?lmRa&]5#3PCgRy=h~bln)WWlw' );
define( 'NONCE_SALT',       '8:O#6MhDN)N`+{6c%K[|7W(/ opoQ(2;:FAS}2G#~w#]04r0iV2fP|P^@stc]<Xe' );

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
