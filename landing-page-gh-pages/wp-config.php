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
define( 'DB_NAME', 'landing-page-gh-pages' );

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
define( 'AUTH_KEY',         '1aA`3V>3M|Zy~^~GG7oR0pto@Rm~hu20<pfO<?k*wQ:vaV/k>EWQ&?~4]B!Q3*+=' );
define( 'SECURE_AUTH_KEY',  'ZzKx0X2?1H1kQTQm/&7$2<*at*j;N-m*#+_w#$}*XS*PkF03pesR?_sHS:$d`K#G' );
define( 'LOGGED_IN_KEY',    'vD1x:W*s, t/DC$43VSR_Di.Z[lJHmo/VUQ[pcPN&R=di`WCx1wo.N=I.c;H89:U' );
define( 'NONCE_KEY',        '$x_ZG4IPY/#)cBwz[DIKJh{]/Q%VtiZ<E5L8b.GY<Yx299#k;yS+SF$-=f=yL!7{' );
define( 'AUTH_SALT',        '={|aR/LE9221:8_mF`UR3rmmR0]CvpdpjzVq#$NBBcK&ki,D}eoqmBBk$*iP@8Ds' );
define( 'SECURE_AUTH_SALT', '=:q(t]~y 8v$m[n(s1Ny[mq.vm9:dtv?%5m.)G*s/U:X3S@YRmeGz|Q`5Q:@]JwR' );
define( 'LOGGED_IN_SALT',   'xKx6eHsg[+jXrPR>@T(t]/CXXw>byXCWnuw#LeZI P(YE:Nx!}+F,y5l|Lf0+WlK' );
define( 'NONCE_SALT',       '[I9EBt6BOtm$l#/T^Zw@ICWfEx2%):^0gNP#=6]=):b;~vxmEuW;RV19tZsdy`(-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_landing_page_gh_pages_';

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
