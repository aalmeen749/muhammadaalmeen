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
define( 'DB_NAME', 'blog_db' );

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
define( 'AUTH_KEY',         '?fmDUf?vxSdwll=}>XV> `4;Y8]MSqF+cA8CRx|NYUr+8&Lf_*Eux[u4>?AXp1>_' );
define( 'SECURE_AUTH_KEY',  '%Fkl9=gFk<=ZSdWU,uU7AxL`Tf7YJM.9S8d&DNu$JSQv?sTr:+9c$/,*`I_LZ=($' );
define( 'LOGGED_IN_KEY',    's6s3DQ9WQqi%t0/j%*JSu,O~cq]hg}/S{:?)7)/R8:wnm[pD#|6]Bv$2WDK4t|sX' );
define( 'NONCE_KEY',        '#@R[J#QJC4vF`cDfa7UN2%4re$$B-tZP9OFQ-18fyr`32f%/Wea/Sm BL-QVS,||' );
define( 'AUTH_SALT',        'vG$Km8Qb(h%2?ys/jCAX)xhu]AQFd1M;@8CrXUT8{t,!J>v2xx@YQ QzwWXv8%hw' );
define( 'SECURE_AUTH_SALT', 'r*twaU%uZEvz#Bwmo7@Q+V]>NU6v9&I$Ink.Tr!=oT,)2Qi@-/*O0=An<{gy88WY' );
define( 'LOGGED_IN_SALT',   'r?Q~ws+~QF2<fm>>BZK9o|} c7F!IN<x5G+B)WFRES6 Z`NQi]fhYJK!zs1nIZhq' );
define( 'NONCE_SALT',       'BNCVEuavzZqsB2&E)s3H=BvY?B0VYtW9Anp3 u[uRoI$u .yUFRCBOE%:{RH02]G' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
