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
define( 'DB_NAME', 'landingpage' );

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
define( 'AUTH_KEY',         '8yDK[0IS1bYSLL:Y9j_`!Hp*kfdJGuW4=KMHC77MValcHMKP*A0hSunmtq :i2b3' );
define( 'SECURE_AUTH_KEY',  '}x1R`6}iO;Qk%,p3SB0q2OM>fo<+MEy#C;Fw)0f/yFj$F^vo3WRgz?,LV}.x/ZlF' );
define( 'LOGGED_IN_KEY',    'pjk7;tRMEFm1gBoPwShzG#f!@C0.YI.m<S{;k%(lg}?0I6*K{,1}T-oH?.H((H+W' );
define( 'NONCE_KEY',        '*8(0<G5#Rq7?II@75jm@Rw,sR7e1lCwPC2>Y(>aJ,_Dq?q>YZSuPTGFqa>n1+A6b' );
define( 'AUTH_SALT',        'RLajYW$qryI+_*&L~w)iS#b5mzDamqPA*B!lW&t*QVbGXo$.gM)QEXnI):Iv%eWh' );
define( 'SECURE_AUTH_SALT', 'bQ+Q)MP!#pQttR{<4xc<3M`a.,F=7q2OgS8GjtwI# jx$p7+pi%<xp<2|m5!<3az' );
define( 'LOGGED_IN_SALT',   'N6x-LB<j{D^us^Rm2!(_qv`[TJ:lVUHW4>o9e; &L(ra8xYM9EF6K690QZgBV&?O' );
define( 'NONCE_SALT',       '_t)Vz@E(;;e,wo/=Y#T<|cc(NhBdsQI|2lo(# ;(<a+XP(<AHo,Ps?,?,mR1Z|$0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_landing_page_';

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
