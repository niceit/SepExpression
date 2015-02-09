<?php

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'seoexpre_k');

/** MySQL database username */
define('DB_USER', 'seoexpre_123');

/** MySQL database password */
define('DB_PASSWORD', '123_search');

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
define('AUTH_KEY',         'B@9i*ed^x|pd;M$SRPsqM`{:}nGuvW,>TXApY(m0l9&;o$M{#<Z%zqlm!(BhCg|+');
define('SECURE_AUTH_KEY',  '91Vv~Of$JX3`U]3ZSI3/d8Hqif6b+}MAR-8`6YsH#](<k &Bgo+[pUXzrIf*%wE)');
define('LOGGED_IN_KEY',    '?J2gij![46?x69w[,*@Q_#kf=!}:i0JFH@(N^8;V0{/5:Vq&Aw[.lY^+*%>J uh:');
define('NONCE_KEY',        '<m7_zo-?J_[Ka~!omMStDW]WmF#CHU3<7zi!hG@/KS`>ic-E{>>g;SN-rz1+q@C%');
define('AUTH_SALT',        '[*+trqGH!zbvbb=`Zo%6F+tMnx[Hr,qJ~Tsg+M ~i>a<{stn1<u&,ne@Iq#mF(:1');
define('SECURE_AUTH_SALT', ']mTytgw=9c1qp&m%~0<*@^Dj/C~c!R|qr`Aa(>Wrq?M^L0@owDnKDz{n. o~UF)J');
define('LOGGED_IN_SALT',   '+@VNB4V5nUdm?L=$o+&C2f%L@vXUJu-g.: jWm)Xt4J-d|htYP|v;=-y|fK.7v+n');
define('NONCE_SALT',       '#JyjREUhkP-W-+dM^~^DKMO>P.-r-nBN$Sn]#MMX|[8E?Zo&RW]g|kl{yZSE+aVI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lig_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
