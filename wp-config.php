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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_gautier-trainer' );

/** MySQL database username */




//define( 'DB_USER', 'adminwecan' );
define( 'DB_USER', 'admin' );
//define( 'DB_USER', 'root' );
//define( 'DB_USER', 'adminwecan' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );
//define( 'DB_PASSWORD', '_*8gTYWqM9FHU' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'td1s5`C`4,)~E>LQu M?h^W.!,H KxNgVd,l0T_`%Da45k$`dR&wYeYBDg]mmpf.' );
define( 'SECURE_AUTH_KEY',  'GL&! 8-smWoX*i$[Mwvo6X8FGBIkZIp-Ga|81zK]49^cGfaK-CE2;PH*:mJKN//3' );
define( 'LOGGED_IN_KEY',    '~ ri`@r%tCIhyg=6!L?R^`]B dg|93`uqc{p?*Q;iuqVwW)R{#7RAvZ0wpxqwB9b' );
define( 'NONCE_KEY',        '$ojQ&1wWS7 kP4ysf_K$tgu:N]Ls})c57fMM8b01 0$L2@d8*T5j_/[j7%O|onSr' );
define( 'AUTH_SALT',        'FKVukhl9RIu,?.EOacp7h0hvaEO2E{:T-KD*I1EQc^,vboGfNLWLL%NH#X3HCd^&' );
define( 'SECURE_AUTH_SALT', '{p$3fh@o<1:|]f#bJ,.Kqx=?a#a+b{+J}ae&%K}|d4M Kq4.fH{lKYa9o7nUID3+' );
define( 'LOGGED_IN_SALT',   '17lb7,Fc.zV*pVZSg4T 8|MzB#M;]NNa&(4F^/}uHqfZ/).SRq,>0L+k/I!V.0}g' );
define( 'NONCE_SALT',       '7tCu@w/Al{/zA#Al`A+b@lhni(j36jr@e(Ksy6 #rj5O3Y2O|A^L?QVac2e] XM3' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
