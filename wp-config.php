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

define( 'DB_NAME', 'fund4u_wordpress' );


/** MySQL database username */

define( 'DB_USER', 'root' );


/** MySQL database password */

define( 'DB_PASSWORD', "root" );


/** MySQL hostname */

define( 'DB_HOST', 'localhost' );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'KihF~CTq_ ?weet.2ES>`gv1^zZ+h]4QOtaVo*7Zysy5V0QJc&9BGt@o]Ab/#ow}' );

define( 'SECURE_AUTH_KEY',  'csh}}pn^9E?@/7?3yJ0%$+>/]yqhjA%5P&?Kt97]]fj,BKH3o<Xl$_%ASx*,jXLP' );

define( 'LOGGED_IN_KEY',    '3qbAI8f?%|CuC<WIcUvWSq<mXuGL=Vr/+-I8!dvN}i) [~j|Jc1S%tZ7W*nj^5IP' );

define( 'NONCE_KEY',        '}w>0jDlrKsbpUg7n?F#9x~J<2%4rZH,]/y <23<FmobVHjI`<0.IV__UNi;kkHW`' );

define( 'AUTH_SALT',        '1{[oN!},XN2Kn2udnSw5yapK}z:c}HiC?;%+kr#$gplihbtvp`k}vQffCY/W_S^u' );

define( 'SECURE_AUTH_SALT', '+li}{]>;+  gu8wbygA7ZnCLos{*(*EGaJV@g;3iE|+}JYZB|dXW;l5l+%y{E7-9' );

define( 'LOGGED_IN_SALT',   'b[}-+_rU6=5x!k9{y8|9TnUWQ|zd?;~9XOt*+yP2@LJEq<?f*B7]n=T8Y8w[S^h5' );

define( 'NONCE_SALT',       '+XTj[$?5:;>K@<hq~jLz7{X:aZc7qo_~ABs~@.[*cJ>$I$vb2#;yd|QgAn{$+afS' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_';


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

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

