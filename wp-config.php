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
define( 'DB_NAME', 'redbanana' );

/** MySQL database username */
define( 'DB_USER', 'Martijn' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Verrijt@381' );

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
define( 'AUTH_KEY',         'd$[|LYS3de:)[)-nFsC-M^z&C9)/+vtbHz|^@F ^n>`{[WX7_;@ZNxCFQeozT=tK' );
define( 'SECURE_AUTH_KEY',  'yRXHin~@BHzPUd9[/<Br{LG;N&P!*#(kH?_0q]%@nRmp)hL:XyOU9FHZpTti|S)_' );
define( 'LOGGED_IN_KEY',    'bkZt6C[N;;a$0(w3:w1YN@V*Q0B=^Z<&-3U6GPJ-6w^Q[<bC&CVm])}X1j-w2a%z' );
define( 'NONCE_KEY',        'j9`s!J7`^ir ;+f&tH}P((<gm9mwDI;g@=T?{7@$LUX-p2;,WYq H_57zbNmi5u#' );
define( 'AUTH_SALT',        'N-)sUX6Kylq)!n[Q|r7@7^U~cMm%l/L&Oy^f+G@rRN?D$+YB(8(P>>}!e7?Sh lO' );
define( 'SECURE_AUTH_SALT', 'oiSw#+5a#[)fJ|:P7ksTnM7I~&z>MP(~e_]awiq=x5d7X5(4;N-`B]zwwc<jN1I#' );
define( 'LOGGED_IN_SALT',   'M&herdC`eA>?=Qvp%B1]^L^e(x`{1L%t@Q<|apwFA SY@%~5>v[b9S7=[_Mus`lq' );
define( 'NONCE_SALT',       '1 3?r&=^ FGt~[$)^zk1h*zNKsVt}%ENoE5Jc$@O$aPd]4R^pOCVAD!i3$Gd}%M`' );

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
