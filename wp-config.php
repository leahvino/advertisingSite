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
define('DB_NAME', 'adv_db');

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
define('AUTH_KEY',         'HF,nFl{_tT+,%iMkIdN} 0K3`[P.K@o|.s;$dIp@{ruASLzA(ZEWk7oq:,TK&a]n');
define('SECURE_AUTH_KEY',  ';{M?KEn+GcR/W2fyC^${/l%F|CQFD7azuJBVbg,7L&>bQ.ECqhsx^[Vc99uKi#.}');
define('LOGGED_IN_KEY',    'H~3Tjl3?2-gR{usTK>+0g~=wwey6heh_c2Cxcai,R%0-?*c2OP[>A^>8bwK{=?vo');
define('NONCE_KEY',        '[)CEn%ybR)^#7/47PS9,h1XK|I]gyP7S8$BU(50LQlh7iNCyslWw]ELRuf[Cs~An');
define('AUTH_SALT',        'WW}HW#4%Sa>*:pb2+A}AuMGi!kn9NbgFgXUt]0DH(#GkSjXAY<>PeURY?F~dv[(U');
define('SECURE_AUTH_SALT', '?B^Qd_VP}}/<j][}}=mVD?4xt9k$R9]. .S-,ERlb:YLO>s*8p ]2LI_wmmw#hpO');
define('LOGGED_IN_SALT',   'd:;S /+%#fseq[rDf^@A_#t6o,guJ=A?)py*^fx/aQqBU OyH4*wCoNZS8H%`B?G');
define('NONCE_SALT',       '^^yjR]#Es:LHfI2=kGb[Et]tBAP`skMlk_o=derXo8JG8#E_<]a4A%4/$7tk&tn?');

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
