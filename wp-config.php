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
define('DB_NAME', 'mobilemuster');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'y{pr})s76Y))$o2a6t5o$(Aq|Um!ox3T`,*^;rooLvU&NY$&hrSF^}KHXW-#*j^R');
define('SECURE_AUTH_KEY',  '{3%DB-%;EDrQ82bt@.LOlS+Cbh>/[=>+!AyVm@+cUCv:F6v9|l|FIQw0!X2S^OHy');
define('LOGGED_IN_KEY',    'Elr56aa9wVTl:X^*p]^kUL3:{}[}($s:b~}SIP]6Jo|0+X5(Jn>&h.zS!#;FJRVG');
define('NONCE_KEY',        ']p6PPqXeo_9DhBR@R6iYg%^ETa*9o9K_E<{*$Cb]Bf+Y!Y6>[a*A==0z!K6@UCha');
define('AUTH_SALT',        'a?IOR730#_)KBaTC5-+a31&apY Wdb).,x/dB]/.N7,kt|aYU+aJPzJ{C)4V%*Q?');
define('SECURE_AUTH_SALT', 'ujT`t(&8=F^X!rW^aY!%CisatV&dL{Nb@sFe#W<:=gBDx<]W[z3$l3;)X|7Xd%|=');
define('LOGGED_IN_SALT',   '/fzpZfi]aD$`nM=ulHlaTr0,{Ix(yM?t,c3p9ER<>77flL)m~r)b66bcfqX[cL8g');
define('NONCE_SALT',       'TX34)NWoY!t{zq_m$7d5uy)&CDnL| BTd!>m(jPx|JCK:vz{!U_,]4&(g)/6/Ogs');

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
/*tommy*/
define('CONCATENATE_SCRIPTS',false);

require_once(ABSPATH . 'wp-settings.php');

define("FS_METHOD","direct");

define("FS_CHMOD_DIR", 0777);

define("FS_CHMOD_FILE", 0777);
