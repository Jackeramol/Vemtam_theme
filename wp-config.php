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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress321' );

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
define( 'AUTH_KEY',         'U.[w 1GX23AlQ~!}?HyaU:FT{O)0DWcI;hJx)2l2tKAIcV}$>*2^wpX:?yzADzd^' );
define( 'SECURE_AUTH_KEY',  'zfMLpBbcK~;CLL;q0Vd@N>txFxrxK-ShAZV3Xd+;1V:jg?Tdv~b_a|}19nU@UNj1' );
define( 'LOGGED_IN_KEY',    '4j#2M_8hpE/-gSb{leAG$rL0{DzruRf,7,@NEetz2XzY9bL`yEsIvbb}Z@3qn7Tc' );
define( 'NONCE_KEY',        'P& ~J*(gP*V$p`~-`<lR.Ky5Rab<*s_^e8dg)B&ZNu4tggR*@~Hq*`$?/Ug*=v)l' );
define( 'AUTH_SALT',        'Fick:&REv&Omt>KNO3Wwl?Ry+UI~wqt+QOMDnBa;B5m 6!Q!C2u=.FHJ?Z0?{d|y' );
define( 'SECURE_AUTH_SALT', '*mxmBlz.N3+#IKI+5b>W``jrnD-2bFSK).I;qrJ*+gjNilwB WdlGh}tC.vaPuB;' );
define( 'LOGGED_IN_SALT',   '-KCw>dA+YC1B-^r.L&3NU[BHeq3KD=Zj2bhZ*{vs]ysI=_ze3qSsz*EoVq1laYi_' );
define( 'NONCE_SALT',       '0}L%p?BmP<oG!W:Ch5@{WJk.+]eh*-Hbp%J(FK%j%dVtW5[sWKx(o.:,m(n~yvQb' );

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
