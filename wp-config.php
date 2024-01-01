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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '~ML*5LBcV}>h!LIC&pW.(ctpm$vCM@QZ<%WWWS3r(z-K$Q1M^$3H_j|)F#*Dq_3k' );
define( 'SECURE_AUTH_KEY',   'X lzLT)uWriB|<AM&K5[#vaDU]gA{{]<]U!X5@^[;`HS9wR$!2iAh8T&t<!t_hY)' );
define( 'LOGGED_IN_KEY',     '9n:fH3gf:|)XIY>iK;b4Lfx%z#oURm:`d KcV} *[7<bJ%?r%o_Qvb%u4.SPx^,b' );
define( 'NONCE_KEY',         'NFR6(L{8GLTf@,>/(P+p$;kPx!`/7RTbXRyqPavBbWRXuD.+,IG%|M=)>)@3|wqP' );
define( 'AUTH_SALT',         '|%$w@M*zPd,<hw=e:zI?jAlO$ha#V !|< TjK0p}GERP%lEt|43E8;dc #hLmQk;' );
define( 'SECURE_AUTH_SALT',  '8-tXQpn~&5A1:dy5`Hol]B8yp+h8-:R .%d!r+C4YL:UR3K@unLv(xl+{l-TUyk%' );
define( 'LOGGED_IN_SALT',    '`e>z8=x7Icn<;{L*`dn/)Rnb}}Q)3%M%h|>F%Z.6-t|?2LTqVWE@Ljd i,r+,MT?' );
define( 'NONCE_SALT',        '{qNf{KX7a0Ybgj-9U:QLWBtR1z&X!GazE>9!s[gX<GX+1`kl@pA2 ];cjC} JZ@J' );
define( 'WP_CACHE_KEY_SALT', 'yBLh|wu]#HJny#9( O!>>JeY.# 8z=/k 8ih3H0 ;)pHW7w%x-/ (+K$bMf`jU^4' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
