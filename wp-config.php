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
define( 'DB_NAME', 'blog_wp' );

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
define( 'AUTH_KEY',         'd;W7kH+2l:`RinZtOYl{!Od7GHR$ &5Pd3@NEF}|bW,%s<K~6:6M:IvYn),wjl#>' );
define( 'SECURE_AUTH_KEY',  'X@$;^i$L@h:kQ+_4xqwE*=8RXUML4Z&44{WV701;H+VhqU1K[;(r:i~]rgiG|% ~' );
define( 'LOGGED_IN_KEY',    '[)Jh xVh8 P3HT^|ccp:H9?`5|~`yUJp6jfl^>I!db18(#_Tke;}< xw/whGscS%' );
define( 'NONCE_KEY',        ')X7mD*GBCp$kSKp9S8|ZEo+!*+EvftHGh@q~.+,gq`dQ4Z(,NdyNs9<+js9owX<M' );
define( 'AUTH_SALT',        'Oh:p&$]NG85ca/Ai<z)&)Nrp#*[tY]IM^tpaXU@$%m{^L2)?T8(d@Jdew(cC;9M&' );
define( 'SECURE_AUTH_SALT', 'jp+PW$(ZGZO$WtDC9@jl:T}3`nOx|<DMOXrW6<j}fYHEFq#>nz0hLnLu6}3L&{@B' );
define( 'LOGGED_IN_SALT',   '<FbP.|t!C<$=o48*BH*N[zjn{>)#>_j7%^6Z^vtcg_zqa,Y|3M5BwDtx@a&~*++H' );
define( 'NONCE_SALT',       'Zgi~Jy^yz;?xzLgLX,<(?yO/V YvjO>_R/{<u6AY,O% AbZdw^Rk|Y^{:3!{)Zu7' );

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
