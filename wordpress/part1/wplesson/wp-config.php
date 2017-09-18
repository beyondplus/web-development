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
define('DB_NAME', 'test_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'user123');

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
define('AUTH_KEY',         ',k9AU.1Exi9Q.g@0qLI28w>o24,4*l:SH.a]mD7*-XBd~7M|#+?WRNs-jU8Pf|46');
define('SECURE_AUTH_KEY',  '{-hw:1W2bbDv)inqyg}uUJG>|v Fp4?SixH?8!tyRRgJVJ]?u>gV,>Td4W3N`xo+');
define('LOGGED_IN_KEY',    'd&%Rl<Z[**m&{RV%.s?$]4KQWp4Z>^?dD,>uFd<[O`9uFHa>#h-`:YV@kpMI4FHu');
define('NONCE_KEY',        'Hb<2]Y}ZsL-,Yk2`q4u#wRB%Mp/v?An(M@*hE?L Q<5y|r;z5<LG-n<{U~W:q+re');
define('AUTH_SALT',        '/2otX%Z=w`LOnpYBPQP,=!Xzps5Hia1U*)e`1R%[bmd*d2skN4Ii+::c3a*4Myz]');
define('SECURE_AUTH_SALT', 't#X5J|1u`lOlKxUhu-Jar>[4;KYqU!a_G.Q9s|vc#fAPHRC@a9=c76m:dEIK:PPO');
define('LOGGED_IN_SALT',   '/~y;Tl0qTP:RB5BO@tZ2sjV?E2p.w,0Nel?Dq@>G:i/&!vb`,?&hF`qP5jL!w=Pt');
define('NONCE_SALT',       ',al$Mk?}wH0O[7D5QpI}C)L3%KpGtK/dxHgF>~ 30;y?^Qfesj!lc$+JuEcC(]GE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bp_';

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
