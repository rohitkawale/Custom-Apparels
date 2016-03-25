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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'xZ{pmZ{BC/u9,X59!Y9$1*3)lwb=aJgJr264cAfevHyX(?8])|Us8%VaL%V,<LI.');
define('SECURE_AUTH_KEY',  '+[x%;:bq,(/C*dCvv[`56zUL-m?Vh(acLH`U+s`~Z|q&<6MW-FNo|i(aca4QKe=z');
define('LOGGED_IN_KEY',    'TyMA+4+FY;0DZ-lnbx`-@Q26;+_vi0<>oN~<|fV<GT`6Axj2W?`U-OR8L-:HI]Cn');
define('NONCE_KEY',        '|&F-<sg|)7xQm]%7Fx<=apEs`F24l,,=K-.8d.CHpWNd/$I&EuQ@`T##2mzIF%By');
define('AUTH_SALT',        ' j=o%D^yt}f8R~cj-3H2tfw{]EWXc2Gz%B^}nl%Oa+B3Vz7-|rl%I#e{ N1-`^?M');
define('SECURE_AUTH_SALT', '[x(hD5;0T7<wAgk{F1H:,-/ >|,]Ub`(W;bzNv#><d)G .r/|x$rKBQ AM=9B#am');
define('LOGGED_IN_SALT',   '1PB(%Sd^.WD[gde=`tcC!?b&Cr_TJZmqUd(k<w^dKN.<:N`YC[tb?ecPlK~~~$dv');
define('NONCE_SALT',       '9a?U=$*|7olg|#EWei694g1HWQaBFC[7|U8SnR+r!/{iYU#^8tyzurNbwzy:_61=');

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
