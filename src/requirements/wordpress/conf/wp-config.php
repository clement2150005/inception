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
define( 'DB_NAME', 'DataBase' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'p4-!%Ol>Oz/Vsu)>ihcaMqDGe<!8y3|sv7qEYkmP!~htOs#wh!sMk 5BLE0-#Md3' );
define( 'SECURE_AUTH_KEY',  '8KVhj8VZ8LG28<^U0r|;/1^+94,HJt[`zmMhxt<pnJvm%yw,6@p`e)Xm=N:(US<|' );
define( 'LOGGED_IN_KEY',    '<pBo$;Q@?Sa[< 6DJ)AF(nd0lJc<sIq$OD%a$znofey}4*F0OUq_xN2R$k^sn#ex' );
define( 'NONCE_KEY',        'ptX#1tq9kG2Rc7Iv2{1g6!%epoyAAZ+g0{}}6yN2gP:ri6a#aBE.Bo5D.o+_UCX7' );
define( 'AUTH_SALT',        '>6w-[X$elWSsu!|Bmm/5J?x9rb4o{>1<sS!B9er@,R*M WU)S-J,Z2uA-.ln_%A{' );
define( 'SECURE_AUTH_SALT', ')/q %xYo%1h vvzO?8%WCc%<d.PNzgd=E*]_>pM3:_ 6wI-7uM|^.T(=-_=S<,:Z' );
define( 'LOGGED_IN_SALT',   'Sj$q`G[+]Tsn(!OWJ`%a4fS(9F::d uiZ{S?*)D-E/OmOm<J:4~Udvoo&^{$6XVq' );
define( 'NONCE_SALT',       '`gWcGBE]e*:L)c5y&mpF[+a5V3{BmwM&8 }-(o?7zEW)`D3K/kS=D{)H+A[O]mpo' );

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
