<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'akkia' );

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
define( 'AUTH_KEY',         '1_Bv]71Ub-0B#7p$9(N0 V{O:&sJhEsd,peDY.DnI=$Q2`]Ch;b)I#*To@gZGCcF' );
define( 'SECURE_AUTH_KEY',  'g7+a$jxdbK)zGzU4o?9HWBvN3asjUszEo-MkYDpV3XOuP%Fxc7U^{pE!Su!jM[t6' );
define( 'LOGGED_IN_KEY',    '4W~5UT`pEVgBk*9]5lfu//hRCgqn+R9is40xy,S)Ru/FJ93dA1i*c#u$>KJONL<v' );
define( 'NONCE_KEY',        'k<z.-boL@}! A<4(-cWYzS*ed47^,8.M$DlzoD}y}&KF{[IQS?-_ EZ3,LpU3Ws(' );
define( 'AUTH_SALT',        'k_nOkuUC(UdVt6i)@ZkW2vSttx6ZLMp]:bP~nS3worH}Ss|ml/Kxbpg|DQ+jOTK9' );
define( 'SECURE_AUTH_SALT', 'nXD<rR{B2P(d)~!*R1I;)aKMA)}}n }odY#yNH%eR22^c{%S3ZIIq|~b5L}g4:>z' );
define( 'LOGGED_IN_SALT',   'etA7.juER^p0su!q3=fvA@,a,}KnJ%3*49#H#Bz;7w(Q&+%GG40&WJ(-`v.tcr-H' );
define( 'NONCE_SALT',       '3FF;ym?7[y1%3#V]?J38.T]B~a&$dHG1OaglWdE!o-debC@NegVO@8[z:W*@A2i,' );

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
