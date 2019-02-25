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

define('DB_NAME', 'ihope_git');


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

define('AUTH_KEY',         'sLZ@Z03O#&a1sU6VEW6MEmlHC)Y_12PiZa`:yr6^o==GigAJnU&/ovb`1aMl4KCf');

define('SECURE_AUTH_KEY',  'xqtbQXkv9(43-D670/6UvSG;(miI+!aAFqmm7:@xwD-(i0O9^B+`0>J}vC:ysw6A');

define('LOGGED_IN_KEY',    'OCD9ufpKAeaP`hU.TW^OnFDhx`a2aD6K-ibm#5M5Z^4|0w8zbHeE4)9I4TnHIrVl');

define('NONCE_KEY',        'a(*?`?Z{r9V%g2;! paEacO$[F59q_89,.jF%;T,A_V34fY}T6/H#1*6a1{fS0+}');

define('AUTH_SALT',        '}`g+JND,fGEc:zEk_Y.GX0Nsv>L:H7-hKB?7YS-*E&tJ;~j#wXhR?E#OsRP?g5:?');

define('SECURE_AUTH_SALT', 'thO+6:5m(rT|ZW%7X%Rr%2n0SS[YJD<;yJ!/ebsfQ|#a>!M0&9bl%Hogib3x3QpM');

define('LOGGED_IN_SALT',   'W[)x[||pv-2N;tb bqoK4z~7fRHwS5V3_jf4L.ab+#&dC:aR{VC/`?y^:Y2nLE-7');

define('NONCE_SALT',       '3,s@#jX|.<^7I$8G%tOciv#<h|z.3*YZ`%Y=pq%Yt>,eHTxnD5V(hR]M(<C:$,>x');


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

