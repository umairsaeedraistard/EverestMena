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
define( 'AUTH_KEY',          '4Mty3{JKTFQ72@POF}8iM>E1j,52Zd]Quyuj-y}Q^RH:,w7buo[M%Wu[boJvvCm4' );
define( 'SECURE_AUTH_KEY',   'p^#dyDB]Jc #e9Ldd/kf_UE/#-9OG|iXtCu{k~v+^RaO9vQ&oDE@WgK48C9O7i?N' );
define( 'LOGGED_IN_KEY',     'n=#%9fif_YRkN-)yb$*fus2/~K]wP_:=A5V:RD%EBd$bd[N!+,L{c|9I=;/S~HI4' );
define( 'NONCE_KEY',         ']4R9U@;2$X}6:CfF9H]2?`&kW#Ruz4?4rtG~xzMq@H{VTke3Tz:2[7lB3V~&|Q6K' );
define( 'AUTH_SALT',         'OYK}51zgX4!Ed}W2wk#HTXG<TeTt `?5/)$a4.mt4@`:Q8+Ej_G.172#>5-_!f?-' );
define( 'SECURE_AUTH_SALT',  't_;9T:h|G].>oY[LV-*YP(@e>cWn27PvGNM~U.?q>heE>#<>V- Q# >=o/COWz8X' );
define( 'LOGGED_IN_SALT',    '2W4& w<#2dXFS6@d5|rPQ747,*{Z 1Ey.5{u4kHVh86Y{}jw6_EY%6E)Ct@<HdQC' );
define( 'NONCE_SALT',        'ygU} $|j#Or!W=B9Ro|>vY.dJf[S.LOQ1zA7zhQ(K)HCG|tVzb`wP8:Vj5Hs}xdf' );
define( 'WP_CACHE_KEY_SALT', 'g3a>[lp`2P^19574HbcY0et@<w&nJ0;jjP/I5q3q>h@M(M=,;&JR)s}Oi7_?}kKA' );


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
