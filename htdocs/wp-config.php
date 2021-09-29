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
define( 'DB_NAME', 'wordpressroots' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GN78GNWe!' );

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
define( 'AUTH_KEY',         'AFsG$)s~Q5b9j/rC2c(T>zG?>`r}B8hw9(*T }/rMyW]nmBk/V4.LSC:U2Xi0NA;' );
define( 'SECURE_AUTH_KEY',  's*FzxkU/$0>SiFZ>vbR#5lji[rEii](=OQ:54:HXxK`vMfVISMyzJmLJHEY *MnI' );
define( 'LOGGED_IN_KEY',    'xx `Kp(7Y)Y,_`49kXN.k8$lPc#p/|3nyUSD;BOEUfi`Tdw`Js^jxYf5nJT6`1(_' );
define( 'NONCE_KEY',        'DLT-ya6Ilcfrjj-oe%{:l<;4at0wB[Wy.eIaZBQ)]0Kx%n$!JE2zFx6^-2&77>h<' );
define( 'AUTH_SALT',        'Kx2R{U1/tPr*xZo~Pv9+2!|dFr%Z]?@JXk:lm5XOJ6db-$k>6Rz,4RY2wCyQ0{ry' );
define( 'SECURE_AUTH_SALT', 'KA :{s6<VoEEtRbNQqGkvQN/%dE,|3hl?[[|H`9,OiFA|[3@elA1Jd#pV7Qu#9YM' );
define( 'LOGGED_IN_SALT',   'dP.OhG{+,T_n#dqtM=~H::*^ YTm*eD%spsF}voOk#Z)nH,kwTY@0Lr{bbS& )<O' );
define( 'NONCE_SALT',       'ToUgaJvc9M~p`fx2-,]%bKrhs:qjJgX.OnksP0W,}@K;okl-6f`.W&`5T%.]EC>7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wordpressroots_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
