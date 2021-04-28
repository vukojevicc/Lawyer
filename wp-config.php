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
define( 'DB_NAME', 'lawyer' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a>zoj(n})B8J?*j&t|a[H4{L+/MUkN^fzPjkz{Q9kAA]|28&^Y?Q|&KABpi[Bz-&' );
define( 'SECURE_AUTH_KEY',  'JDYK#L$Tb>[!VeE%ph<#|SDKpT>|zq=DL,m_,msGdpY8 YGIs6SD-s@s/0xL;L}/' );
define( 'LOGGED_IN_KEY',    's8!e-/pdw!)h<<~FVjnX{AV)!l?]L>cBh~O+Sx9I,tr$a#D0hM04h/mQv{?b7j4t' );
define( 'NONCE_KEY',        '3M#]^_M$hRBkyv0{P6W-8e(j98u7!6]dn|rJ)~=umL[2@%JzW7}w/mQc@md4g3N9' );
define( 'AUTH_SALT',        'a~F7~9g%G4l4C,.*qH!4_HBP<QilV{uZ>b4,`36*,LIsLwS1Ggq#->ZTQWYmo`+W' );
define( 'SECURE_AUTH_SALT', '0y7hY#YD -v2[0npaju<Dd1X|4QYY!>$yPOE};tWGkg(?D/qj2|u.cVHc4uCf8KD' );
define( 'LOGGED_IN_SALT',   'Fg9e;*^xttI~19N(Ai%9X<8~djUWD ~WK#PTrC#E!r~wvHi5ju f3Ia&GLL,!3.#' );
define( 'NONCE_SALT',       'bPjm>k16yc~miU60<+w0ilEvaQEr83nyCEL4.QE@jm`X).D+RD_Q@`re)QzJ30*b' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
