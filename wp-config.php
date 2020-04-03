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
define( 'DB_NAME', 'magplus_live' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '>&JZr1{2`M5LOh4n=Q|@M?cGMH=O5s{M;13N6*u^N2!gr)SrPn33gJ?L!se?XU/w' );
define( 'SECURE_AUTH_KEY',  'ljo/JR|%O^D.r[Pi-t /_8`ZK{q-b.>!y~_Z6?X6pgvEE`TTgBv9DQB{$A-4HU1h' );
define( 'LOGGED_IN_KEY',    'Y755IXRSvYvZ[%aU]2o:$xZSwR1tgg|D+.Lgo:]r?shP49OJ/&]}ys[zUr#sra6O' );
define( 'NONCE_KEY',        '&B.TSsVYFq5UI$7r{.1GM3E+$#g$=q)m5O4^D{b$vK[v<LMKUh21K]-Nc=Yk;8kN' );
define( 'AUTH_SALT',        '_kw7 [9=39cu+!Rc3lQ8uQLbq<7}%rFkaf]DRp[oW2ox@u,[@m7~Ws3<u9n}jnFP' );
define( 'SECURE_AUTH_SALT', 'y?*rB6k)-/?ppQ2tJfA4|iBX9aj,yMEn3[XsJ1|SlPL4[1,=;<)x]i=6UHlG^:bO' );
define( 'LOGGED_IN_SALT',   'Dc[@@nKA[CEFpueCP0:S{,@& v2-A6o*]7Ypz*Bx7n|MQ*3uXcVo)rt9^wuOtY:i' );
define( 'NONCE_SALT',       'iX@]J4dRdnt7LN<@=ya^sd:qLx.ZHCjnblVudbj{Je.]dmD5!x-`ef^XZFn],ZHa' );

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
