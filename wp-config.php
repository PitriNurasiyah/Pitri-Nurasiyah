<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-pitri' );

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
define( 'AUTH_KEY',         '!i!bHB,hWrcyMsPN >Ys+<y[ut|b92DMpGpH+pI~}Y/-0oa-^H:=`T2Zy{%ugB+F' );
define( 'SECURE_AUTH_KEY',  '5@)bhAo*Nr%s1UivS+SH2<qb~=)iNs9lU@C7O2C4}ANGFH|p>^LhofS6[]>DdyR~' );
define( 'LOGGED_IN_KEY',    '=pdbn.1$K&O nOv/!OR6./NOMO pi 4-iy=<Z8fkyImH`Y{ste/n#[h=Z`:``7@)' );
define( 'NONCE_KEY',        'h27G@tST/ASK9U3y>NXzc,VTGYXB17iD<=TPsVI:]rWk7NDL.*-S!-J=by d]uaV' );
define( 'AUTH_SALT',        'R9>3+],Gq^{`i>Mn9$ar]pT|kPxi(3*jPwhy7V<et)VV&lsR<Ap?B[:= v{YAz?<' );
define( 'SECURE_AUTH_SALT', '#g:Ul$5X#Ttl~1Q?mG/63V3g<dXEVgu& oHGa;e$=nI]|Y)O!hAyMEy;2w~:nmsO' );
define( 'LOGGED_IN_SALT',   ';tFIu=a5batjD.4OZGz,ObCx[z=z#on%lQ&q4wlp[OD%&fKKU`h{D4]0qopW3?]x' );
define( 'NONCE_SALT',       '#n~c@YHYJ H[ppD[lKc2*I4j<L ~lYhft1NV./bWl)aYt,:`5k%6A:ll}%doHN=8' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
