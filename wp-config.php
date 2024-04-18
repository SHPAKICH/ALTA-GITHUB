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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '2767-22_ticket' );

/** Database username */
define( 'DB_USER', '2767-22_chue2767' );

/** Database password */
define( 'DB_PASSWORD', 'bfa7b394e266c52fc5da' );

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
define( 'AUTH_KEY',         '/8C8SPDmFg]W- VKCgQ-e]MVYS|C^G0!j>IA~P~$=WBVxl}X:*Kd8xf>bGi>d)eD' );
define( 'SECURE_AUTH_KEY',  's:prj|H8 j8FK[ J0BQ|1:a5EERYv6X)z&%Dd :i:{h2#2^k_aH;?K<5L[r==Bby' );
define( 'LOGGED_IN_KEY',    's+qR%YPJXyHj[QJnpn)EYm9jRw`mI;b2>bZh^jc|F/TWK(Y(b#q2E1@fTo q}>U)' );
define( 'NONCE_KEY',        '<aM{/Oxe|(x>CNqI^eU_T:iA.4:^rj/,vgzNoGtFH;f=0$dMyv+.ms)Z|xqQjZvG' );
define( 'AUTH_SALT',        'ZU}Gke.|a336(B%HuN+hPN5Dx/67+~BmK!6Wi|h2v>)A>]v/`_ds~a$tF^?;ImC0' );
define( 'SECURE_AUTH_SALT', '5r>^&]>/}sbE[PM%s{T|]#E#fbVFIXTSl M~JWmqWVQAy]ykBQuut6`%>y`R,L5D' );
define( 'LOGGED_IN_SALT',   'Sg2h[76CQ}vlx)2e!z?uYU$VAo8uasSrVi<0!7]2jt._<0$Mv}}$NN_!ng+TN}ki' );
define( 'NONCE_SALT',       'o7`m_3uWYWeoEh.VrbK@,4G2p#)U#^Vnlm,fM[vU!4Cx-BwVAd?)f-5*Lv_,MwX=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'moEkJ_';


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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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