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
define( 'DB_NAME', 'gg_demo' );

/** Database username */
define( 'DB_USER', 'gg_demo_user' );

/** Database password */
define( 'DB_PASSWORD', '551ne98Ii#p*mRDK#k' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define('AUTH_KEY',         '>&7%pl)dY3TOUAPQ]dYv#Yx?uBP{/T?,)@0t-P9#&|.Jii)JdFr-*h%1lM(NOZH-');
define('SECURE_AUTH_KEY',  ')}hqC*E4*`.E-~Z-{4T`=&ijMn4xCO~+7NEW6J-|x2x[aE6qHmc0@~1>(CmT{?$>');
define('LOGGED_IN_KEY',    ',Rb?&Gxw!*Jn$q,=p^x kMj[8vH#;{U]QDH+Zetbtj[N~[V!j&8R&X(|G($@Y3|+');
define('NONCE_KEY',        '+@rmRaB.Fgc>q-Se<4v(7J|hPgp4AOb;n1ddYGCQWbldo=t39m>>lI!zR&8<5n>n');
define('AUTH_SALT',        'KJu/~eON>Tab@tEJ 4ojM-lN=<oLtu<0JInmXa}G;.?>]|C/i)@1`0<hYV/;V[Gh');
define('SECURE_AUTH_SALT', 'Ix43jby@B(:=nisvo8L6P`Yot~-_fGZJ- o>V-i:u+f6/Jq1-VJ{ZD5!qhdmAg%D');
define('LOGGED_IN_SALT',   'SfwWR[ ;*Kjz^Cg<^o(uOqYfv]/Ji,I_nuK)n4=`dwB6kh8aG[u+W-se#O@!xSi?');
define('NONCE_SALT',       'Gw:tj+{o +8.;g6L{vC_e]Gn%npy6R+PGqW:S#s=B(fpz1;-yNN-uY/]@];mQUDU');

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
define( 'FS_METHOD', 'direct' );
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
