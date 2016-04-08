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
define('DB_NAME', 'databaseDB8bmv2');

/** MySQL database username */
define('DB_USER', 'databaseDB8bmv2');

/** MySQL database password */
define('DB_PASSWORD', 'CZirz4DLUZ');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'pWL*pD;mW]+P9xe2.TDxe6<bL*qE;iT<yI2EyfXI$nB{fM^rIfrY>v^Q7nvg}7,U');
define('SECURE_AUTH_KEY',  '-|G~5[dS[C~WGxh1_SDO~p9#a]+L2ita]+LWDtamA#XDx.qA<2mT.q+P6mTf2*P6I');
define('LOGGED_IN_KEY',    'Pi2_DH*e6A;WeT+qtL;2mX{+PEbe6*.bAy$q3AXMP<mEI6fnb,y$U3ruj{^,bBI^');
define('NONCE_KEY',        'k>zR48vV}0zRV8wzo48!ZdR@!wCG4hkZ|[~GOCosh[~|OCKshp1#[WKO#ptK]1pO#');
define('AUTH_SALT',        'EmmT6AyXf6Ay$q3AXMQ$F^r>}jJ^,zJ3nY}@RBv0!VFz@o>}[oGK8[:!K8Godl:!');
define('SECURE_AUTH_SALT', '.HeTX;uLPEmEqX<{XIu^>QF}Rz}VJr|JsJs|NCk[CkCl~C5dw5w5dx9;S+;SsKt1K');
define('LOGGED_IN_SALT',   'SxL]ima.x+T2qti]*.aAH*e6A;XLT+quL{imb<{+T2AyX3<QXMujnE.bfU$quM3');
define('NONCE_SALT',       '7c04>RFJ!g8B|cgV@svN}koc[}!J8C-dg8@VZN-~s4[:lK!|-C18hVZ1wOS5twl:_');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
