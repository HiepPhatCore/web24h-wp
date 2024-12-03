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
define( 'DB_NAME', 'web24h-wp' );

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
define( 'AUTH_KEY',         'z1hW()`}k?I&VO&AlZKb0c3x@L{~1y]Y(]wf_(bH2rI@5h{<O}kaz+q?ZCJU(5pm' );
define( 'SECURE_AUTH_KEY',  'l.5a>>ru%Gj@zQ,`({M*jr!is&(kZn3f.w+1}Y,gv!wkiHUIOrXjhI7wV&^+lB`_' );
define( 'LOGGED_IN_KEY',    'u3ho{Vs2I%;1,iB9v*2z^nT]6T6GG% ]GU&<<ltv^:>i`CQP_sk#yvbc7#nJ0NRc' );
define( 'NONCE_KEY',        '_rmJ?eJ>:_=H[zBAlGXVcTGl@0 4CCYNQjDtxq$b{z9>Sn}OwXCNT?b`,%6KaJF$' );
define( 'AUTH_SALT',        '4he(*vj~7vN{QOH(wEcJU8tJp_TWw~@<d%{i=Xa%?49^1.Jz;0^5DjHhrd/jfpAM' );
define( 'SECURE_AUTH_SALT', 't^;oe!0O8C[5yQ2/-{P@a](3YAM16{mrpt7Co`kH[<k9xYXw/omVFRa4Ru(<?#?Y' );
define( 'LOGGED_IN_SALT',   'G+Hz-*hf!b%1UuGCX7+atD&Yl1`0Cv+xAs-+K_G@s4Rzj8<#yVPyQ&xDD~&w`t2_' );
define( 'NONCE_SALT',       '>u:?Q6MI9u`UWC~cVyVX7,Cfp+^l -$z&t+B*s2VmLRQd>XEJqBdBpkF@Ka@t?u#' );

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
