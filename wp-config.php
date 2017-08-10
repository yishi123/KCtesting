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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '|0*8XQUq+xx>Hi!:[A5 v<@@/J=u@C-_|mg;,g@An9]0vP?7wYJD%1Sl@[dpKI2b');
define('SECURE_AUTH_KEY',  'R?BSeb+w[3Xjae]/;%>QUUdf.$/k/D]oZ[s^}|~lO|}0bsF!/Q-sZm.kd{0XQpeh');
define('LOGGED_IN_KEY',    'i/^5*NUi:R_^>! v3ZAR;* 8mY5>{le6jwb@DoxB;/z;dcgQ H3oockNyYG>5}>1');
define('NONCE_KEY',        '(U,v%]nd=E*3X%ENr{I*r3n+&h(cb2O][oxfZa%r5hsw1/e=dDtV|TS3MvH/oP%V');
define('AUTH_SALT',        '-*XM1QJ;dJv1*jAFPl<r;efhosr%N@z4h.CVB/:b0>uYcI(M{p{?[BwLhXp!83-x');
define('SECURE_AUTH_SALT', '%R5i*9&Eh545%&qj.r!$v4C|C[]Cc}Gq7jQXGFA1q3~yr$?6t3xA0E:g:E=*Nl1/');
define('LOGGED_IN_SALT',   ' Z=Ve>HZHeZnV:8xrmB= 2fSZ&FdCeR8ZtVZz!Wr1V2+>N<@=&5/#|4Za%>GH^pC');
define('NONCE_SALT',       'pggP#x,wa2moFHRAr92os&{c]>~dS>f0H5VnZh1d!K&dO=QG,^:ismu/3lg^K8iX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
