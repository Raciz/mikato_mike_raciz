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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'f1e40df75c971c819d35ac12d878996419d21a23cd7bf65f');

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
define('AUTH_KEY',         'r3fIEK@%[tSWMufSmPRX&-6ha}A&[ F{@az6AQz4/!r?ii6Oc2{aD2tLR{1hh6E.');
define('SECURE_AUTH_KEY',  '$za}UbT(Gde}0CpBkXo#JzRIm$~d^@^X/_&sKE!`[0W%WJnRy];Aej17eD`qt-Q_');
define('LOGGED_IN_KEY',    '1F4Lsxtn262@@w[zyL?,?t&-jg`h6o+i<yGH~gxq^#u(p_ W,S+m.pf+&c4h!8W_');
define('NONCE_KEY',        'R:MzXs?5A3`qD{c$.O:[r!vez50zJXfYdwxl839s_G)E6;JgNegoMgvm}$5M%))W');
define('AUTH_SALT',        'AjMu5u@PK6n#rlk[c+!_V,p|9f~9v<l70M*RtfP+lU^4[(%7xbRrG_Y:DT|yVOau');
define('SECURE_AUTH_SALT', 'QnK3vN-W8ycoK+d^vnn:*IW;my`<}u:_0T:@UHk90jm$t$H #xSJ?e7Ywb$1Vr~G');
define('LOGGED_IN_SALT',   'V2Wls:@??0MQ]u$U3_|hCt2U9VqOU-8S`(tMs[Uc.]3I^@oe6V+%~enyCS]K<t!!');
define('NONCE_SALT',       '!fh.H@?E3-f1U*!l=MMcGH&$b=V7,6DbHGH>O!EA]~DoWz6.V5+1{L`fiC!}#`3?');

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
