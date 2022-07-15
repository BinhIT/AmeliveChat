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
define( 'DB_NAME', 'alphamedia' );

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
define( 'AUTH_KEY',         '|1/%q~eXU<HKOdo37TE%W^![a{d~WWFK3b H.Ebz@zZTN>Hr[2.$<>HIy(sN~xe.' );
define( 'SECURE_AUTH_KEY',  'LSw)KNh:wm$6JCQ/MR)KtjCa2R+/U&ukg3$gT2K+2[ajC#f*aX)st<|Gl#0_TKR*' );
define( 'LOGGED_IN_KEY',    '(<rd_bu3EM/kfl|1,$]!6wgYf_5XLB9KB~HsI7AbQ>{AW%>999(ehw]f$6fd%a6J' );
define( 'NONCE_KEY',        '-Z&9*qGLgsq|o@Jt|z0WOhyP31zN@lrw(R,`-b@$SB5{rav*tVdBVN6%&]p>u&|!' );
define( 'AUTH_SALT',        '] Mi6;qvm*+-f~g(aQ`Ll7bQx/QDq)y>qtB$0:4e`ekY%/ni4<!.y7k-6W(.kb79' );
define( 'SECURE_AUTH_SALT', 'mkS;& .Ry@+G$]PM<O|~mjvB`B6*T6Un+r%^Gu+]~^Xy:K bA*j *PZ`=+ @>MIe' );
define( 'LOGGED_IN_SALT',   'G.T@Xlr2#P$Gu]kDGfF ,@J JE]Fy~UnY#N>H#IA%Nz=0_|hChB)<dFjizn[ZrVX' );
define( 'NONCE_SALT',       'xu0/_qU`x*14>~s67UD6n!/#?#2rM6`S>AfY!7@yIFP-^N NcNtpbqHmR;ykvJ}j' );

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
