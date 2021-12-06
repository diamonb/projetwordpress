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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '~%Z <fLp{+e(3Pg<0D# M-]qP1BnSAVXyoj+[t_rYgn8LGU!A6,gDU8%LgZidzpp' );
define( 'SECURE_AUTH_KEY',  'E*M$W[mL8?>2H`0tpX%XMe/APZTJgzqIjTs_Lpcl-3|cC2hp tk>KNP?K^N]m;3n' );
define( 'LOGGED_IN_KEY',    'G &[b xW}]!A@p<][dX6&$)_*?Ei<jk21P&AuQ-]H,M(6Qb1,&Y|ZaBG5NlB*8^E' );
define( 'NONCE_KEY',        'pTI5/*rb>$.a7{v<`#7l,5#r&a`!#rK+?c^EQlO=3,.q9:wNk`4-=hO?#WY-UK/Z' );
define( 'AUTH_SALT',        '$MfQN1n.? 4:k:QtALG LF%R5_O(qj$;g<q%^So#&1[/2S[ClXNW?{8*B%0:euLC' );
define( 'SECURE_AUTH_SALT', '&*nM1TKE)BxMXEoP=]aksw8vjwB{+SZfG<KTLi(jeNB%ecP}=,x0jy.n@NLxz,th' );
define( 'LOGGED_IN_SALT',   'LF#vKj.#>upSg_L. sa@%Noz~qE;{!m@[d8TX(?kDqjr{3S.K9S_n DpECK{#n1G' );
define( 'NONCE_SALT',       '..Ib>bJ=28+Q;1A}jAk|{|_!nW{IP`$T..#gV}NZGWO+*p(K|0tP8n_1n~b*U0K6' );

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
