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
define( 'DB_NAME', 'raonbin' );

/** MySQL database username */
define( 'DB_USER', 'raonbin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'oOBE4DefXZiwiHZH' );

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
define( 'AUTH_KEY',         'pF4/kj2Bp}F:Q6%v[=( 1A:UOxH@rhO.]tz U.Ai#KOY.L0Vrs5)RwGYLpxW~CCw' );
define( 'SECURE_AUTH_KEY',  'DRHilvaif`ni{qh|J[3._W9#W8XmB^%)}@[u#*s:Pm ~yNzS.l_P]4y7RN6EG8>(' );
define( 'LOGGED_IN_KEY',    '&tL408jLD?H(-8uJ3vZEe5G0T4/14fvaFVo.AsY|n>akA1`Q#f51/Yu5x_T}gBYF' );
define( 'NONCE_KEY',        '2s.g,2ZHfkLpy48{<_tznWh8QS*z<pI|mTh uQ8O/*=$D1tULEWzwakH-oBgAm)|' );
define( 'AUTH_SALT',        'D~n!e[>w<G( Dj%Qei*RZ*|>9s/=H!j_{p[)@#v4?QyO]q#_xWKQ6hc4!`n!+)`R' );
define( 'SECURE_AUTH_SALT', 'c.6M]wEE_^ jJ6d^$S8vdrDLNKwEA7EEF*?:XE(NlM$Z=&~z7G6jLsM_-YY$!JD;' );
define( 'LOGGED_IN_SALT',   'Dhu9vG xZy!*1gDCyN9vGa9?)NJZl+_!J JAu&@:ooELn+UE6UHE2xCY]*/b* -;' );
define( 'NONCE_SALT',       'C286mlX*O:NkbfTdK$fvWfx&dV_J4E)zp{7wMPm--E<>VSgy^]fqiR{|K_80<n/]' );

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
