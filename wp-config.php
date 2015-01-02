<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'underscore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';|BgsnwQ?wG`@$-8&Q3POz^C~I~j5:7 L3g|t6vJ&K6[;EJ0NCDC@HyBYZ-^j8]%');
define('SECURE_AUTH_KEY',  'dW-Vi_r/J!p60VqRRCs+dE^wht:7@T86M3^eKLK%y!rINx-@n`v&L*U&++?n2*-W');
define('LOGGED_IN_KEY',    'G]cb1*~}ka;$N%H{N{a;:||p=7G{X,@DYA?}5Kp8i>R(^.w}r0&u|r.F3vzcRzNx');
define('NONCE_KEY',        '>g/,Z:;Pm6*,:>0t3Sq-M7:?hH2V4}YX^$3e8$G={]_Aln&rv8AARTQX4ny;A8VI');
define('AUTH_SALT',        'I,I=;.[]L{+I|L1]sBpB2BAx]6|H{$?H.9RSyYRS_U7=|s!cq<2mZ)Mcvy}K-&-K');
define('SECURE_AUTH_SALT', 'Dy(L4i|/dy}DSup>5z)a=~;%IA0MV`~0:LGbwg=vIW8dHDeKUY{ aAQY;-RL+cG+');
define('LOGGED_IN_SALT',   'h6.R=IEo{Ri[[@uW% a$x>{TKg#cu<^ 02O*J_ +B+pwfoWb}A)oy%xLS9M+n(X.');
define('NONCE_SALT',       'ThP=4;ViLjXQ@M[tttr!+F})2|<EaJqvOlTS%dHr+#-NZ`u!pvy5y*l =JcN:|W4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
