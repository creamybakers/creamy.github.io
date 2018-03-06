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
define('DB_NAME', 'mydb');

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
define('AUTH_KEY',         'i6)2f=Qg:b-@mJ,;-Hp*w{06xt>+pI/EO4qPRcrWK5]0c?(bv[]cls9?(pB+Fbst');
define('SECURE_AUTH_KEY',  '7jyk=$4V2o2/^|F6lJK3{dskrU(>u`fN&*+4K;M6upct#hlS&-$-:o+-}3rJDc9n');
define('LOGGED_IN_KEY',    'e2]Xm2@M=T[}TJK6VQizI.GZe8{t!`o{C0]R#AT^G}fk+xWL@uhCt+?_Kf#1q1#>');
define('NONCE_KEY',        '{!J`Lg=32Jdf~&L$_d[,pZof.%ai[]F26zJfo4]c?7/`h(2ECaqJZlzNEQaPseQf');
define('AUTH_SALT',        '<XdyOnm|H8{~sraLCMEG@5etdFW.}3Hy4QpIa^Cb`R^E*&v{OGMlT<G/}#F$<O$z');
define('SECURE_AUTH_SALT', 'NXw/;P6Y;635*E@FZW*VjM|3CI8z)aq[Oo[/<#z.[@t5uR=)fsdE!LidfdKV_k&F');
define('LOGGED_IN_SALT',   ']uRR(SY,(d?`XtB~9m/?O&C74uKRS|w2wLtniKqz5iUp[;_JpT(]k#zV5d>}|d{3');
define('NONCE_SALT',       'iF[Y;.0q`3E:y#BQf*r*h#S1SsgU(e>h7vH|=~EVxQ7=Tj~*E2]<xm19(0Sv9]=k');

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
