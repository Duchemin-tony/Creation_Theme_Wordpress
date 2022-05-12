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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '4ZN#<cTO8qx~5K.nKTXir4{fB4$<9:x}_>(w^]tDNFS5D`Jzh88`mM,jI&FQ4ayU' );
define( 'SECURE_AUTH_KEY',  '/C;~Ld:%b:~U0~YF^]KZu=H-Z?%g`g Ak@<R[=Q$}eb4W`HN@hiv<9IG.{>%i3!N' );
define( 'LOGGED_IN_KEY',    'p<r}mX+!?K:7&5bU}7#5;_n:rA/5If;s3)Pjs~SG]N=SfdK2D!DZ^ntXsN,{4C*2' );
define( 'NONCE_KEY',        'J&xBfJ)h8z6X:8T6RT20eE}<6Q9Ri!$Db[aQ[2~8i (1XV5 5c?eRW)AOAf^Ap G' );
define( 'AUTH_SALT',        '+#(,xD|.Yz8?# &+DKh${0+lj455Z6>>*qG)]$lL],)${MA+~r2pVnKA:${(dX<h' );
define( 'SECURE_AUTH_SALT', ']J$E^fb.w=/4!r69a5,-7c<Q)r=V;5c-Sw3<ZY0B~/)I!d w//;@{$QPU-q,)M-0' );
define( 'LOGGED_IN_SALT',   'Gv?~{w2JNRl#6/nglCvsx8pIga<C<!>kbb_6t(lMv_Dj5hOAW0rm8St#1,6TCHCT' );
define( 'NONCE_SALT',       'SNlo~,[6W /iDR|f$}=Lc@g{3ibX=F g8RaLNo1$v!G1/wnljY=<avqlYnbt&zR ' );

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

define('WP_MEMORY_LIMIT', '256M');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
