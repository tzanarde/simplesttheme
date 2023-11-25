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
define( 'AUTH_KEY',          '+F[,B|;w1b>Pf|ToG_):.lbAFQYf!)/Iy$utO6EqQqGJ;Uzhj[*f;}~Gow^E`g{|' );
define( 'SECURE_AUTH_KEY',   '0_Yq*e(n^G=gfH_Xt}9|k6_F>1Ppz*e]/JF[>-Wd^K4mu%O&]c/[}dM>P=%YQJ3s' );
define( 'LOGGED_IN_KEY',     '}2j9/GG0S:$vZgt4_CWec$;&Iq0FI4I)]kA=~V5x#>+##YTH@CO>|<oD8;L}l^=5' );
define( 'NONCE_KEY',         'D{L)`3]z&O% :+HdzEok5,LV|z73v6P_=Z@>h,(UQyk@rTq(zUwhdHc4a|Qe%]3_' );
define( 'AUTH_SALT',         '<?YjOs|sO(g0Ve{]Nxjf)^)KUCiGC+OW]uS>ld@{E,Px`tyh[eTDPCMU]gsBe$Wk' );
define( 'SECURE_AUTH_SALT',  '-pTKk_7[0~Kj7+;Rf>{t18c5WpEvQur}>x)U$x9lI0K]!kmG4Mu,j}PrH6%-%*WU' );
define( 'LOGGED_IN_SALT',    ',t-7)+RJenuouzSprV|R>2dc%|sn(93fndF+|g5xEv|!SD[`vj(f(u_J?$u;dA1T' );
define( 'NONCE_SALT',        ',+_q3JbtBGxW`+G_*6 %95KO+;R-x^O?h8RsT{E<aHXkfzsT=jPAq0WVX<hDiv+Y' );
define( 'WP_CACHE_KEY_SALT', '+nWL#wMRT0KN(yKr]|p| l~:mTf?0wI9u3rDG+V[=6,ce}mpij1y4iDr|2TCV[jx' );


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
