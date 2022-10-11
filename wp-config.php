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
define( 'DB_NAME', 'linh_shop' );

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
define( 'AUTH_KEY',         'IN)B!nlVql3mE>R^0};Rh0zqZnn~Q%dFhw508Y7MlTljO#)B_5{@0.4AE{eM^-Da' );
define( 'SECURE_AUTH_KEY',  '=P%6^V7!gB9:-H4Z?k04|%cIkS<dDKb|8SOvhuq(t0Gmf,mWw@T[==(V?x5LXvvM' );
define( 'LOGGED_IN_KEY',    'wJ}-l4a<0vUwlHj9p]D%XX}L%^HldOt*j0Yo3os=oX$S)?cZ;uTFF)ku,~Ce`_qI' );
define( 'NONCE_KEY',        '4^b`)HY-b@OBz5*rAeG6cfAZeUATEsU#x0!G/@u&^q,~i |[9Ytj^1_^i6JGAtMk' );
define( 'AUTH_SALT',        '-)VQ}701_sc-1%E[=z(;i[f.7!txFQw_FX+`suM*Cv-1|e|bOVJ9Nw^R.tUX:Q1g' );
define( 'SECURE_AUTH_SALT', 'M<YY^fJovQ6zWV74154Fp<]oT2UNU9Juz|k>jQ-{}ykqwE2Gpu}H:~{i_5]jkwD!' );
define( 'LOGGED_IN_SALT',   'PPV9LMvl/0;jFB%/x>>k&dF+v_OMS;`S1Sn;>k -B$0Wd~4Qg+NAp7:M^+p-DmMV' );
define( 'NONCE_SALT',       '`#IsI6X:5nu2CanaM(ncl6Zz;A&.7q>|<s;q zp$xi,4Hk(Z+uA_hu,.9{8!RcXU' );

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
