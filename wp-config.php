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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'veerghastore' );

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
define( 'AUTH_KEY',         'R5Y)/kj=4IK$`VK.48}.8kdegQ~~AeYUu~6_z8s|P,Q-a|GH$rl $$%vRjPK];OJ' );
define( 'SECURE_AUTH_KEY',  '/ZlY[`FA/.o`@A;yUA,}KTzNOOG$:}XGMw,gPTL.$ES4GIjN)Flb|%=*?7d,Xrtb' );
define( 'LOGGED_IN_KEY',    'W{!YgP{7| n#_VN~uC;7f$#8b3cRgo&U,R%QRju(@>VnBOXJ^x9c4t2a BZ;eFW%' );
define( 'NONCE_KEY',        '^CQ=Np^VvZF}Fl(lmY}~9.1+Kf ldY/Z#@G 2VCO]lVN;8{S<$%XbVio C{wc1<d' );
define( 'AUTH_SALT',        'o{uMc!h)5BC(*yx?}:OepNvB9c?4@g5ZYaN[e-047Thd$JlL1U%fE/DA9=_4oQl0' );
define( 'SECURE_AUTH_SALT', 'm[|W8u$in;t6|[`d)u{q[BByS)_Y,Q8fE3yBg7cFT==0>! 3d~_r67qeQ/t@,.bE' );
define( 'LOGGED_IN_SALT',   '&8.tg(g$z?zxZs]x RL<NK`B99@-`J-Ig@&91p{bOIN4$6W0K=Z{KK_F_q|X:Q+Q' );
define( 'NONCE_SALT',       'Cpt86A[#qe7Oe+%-n!BZOpJN:3F.`>b0+i>A+8n;~G-f{@d.w0>3r/ZfjY|PB309' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vgs_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
