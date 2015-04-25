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
define('WP_HOME','http://localhost/kbr');
define('WP_SITEURL','http://localhost/kbr');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_kbr');

/** MySQL database username */
define('DB_USER', 'fluidDbAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'Jq5ieGH7zR8c9VL');

/** MySQL hostname */
define('DB_HOST', 'fluid.cbc2hydmuzgl.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         '9XCPz|-U$E*Di,SH&CCXmHAuTzANV?]6BDwf/ KFiHKrnYM/1f/h{lzXe$EEFs7:');
define('SECURE_AUTH_KEY',  '22:jOwk}a;VTl|g|hFD]353%dh.:%fL8aj$.V^S+9ineXUw;Vfg+}u/ _}byTThO');
define('LOGGED_IN_KEY',    'Jui.!}6yPOw4hJ!SU.c/;Kp)EUYm{J&LEx/Goj?19`xto@%g7bxVl*zoy4R&V2`_');
define('NONCE_KEY',        'i`n?wp+|-cxXW-}n$1)dX$-dY~G*dr*.5cte(5kYy<U8n?J%qQd!!|I#e `Z&769');
define('AUTH_SALT',        'x%D&=3:  `z#s6VeIxrZ5#|<`vYmBO/iZ~Nit4<jL39DO|I3rmWv0a_{Z*E<T5dl');
define('SECURE_AUTH_SALT', 'G-F-|e^[Q)b+<_HCQit4Rq{6)S$_ud&q&rz=GIeRmOs+2yPN<tbz21}<c-4aA.-!');
define('LOGGED_IN_SALT',   'x8JLmUvp?E}Je/v,f<~08Gkls6`O,,<H,}Gr#.vsn#uZkppS[UOBM.)/u*w_}*;0');
define('NONCE_SALT',       '00Xic 1q|e>50D+l<B+!O=Y0x_bg.va<RA1)CNBR<{FsFXDV}Flcl/rwn0sZ(wcM');

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
