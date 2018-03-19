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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'jbXd)w_E8<wj202yx@`cZ`2bTI*Am`gS**DQ%g@-JwJ}`bLoWl2S[^Ha=lA%k+}H');
define('SECURE_AUTH_KEY',  '?{`F9~j+Vm% +LzlJY!Mzh$Dp<:O{#1RI2;LL}o;|o6GoChG^w&19gO5Yq.+Py2p');
define('LOGGED_IN_KEY',    'GW^#v)Bx#GSluF8e20eMLEb60pbcI|t@UVu}BvyDh/<^tt%sbtf+XFyUk7XXqV_s');
define('NONCE_KEY',        'u[%5uXJn/$eHO5LTFIb6Nh SY{Jddpz(TQe,e5dq1{Rj!F2,3bGIuNhxC!Uf23P}');
define('AUTH_SALT',        'M2jBUw1o=_1.V=Z,9.[.vCv}B_dT.xnxrJ<Z1fH&FceM1wG$EApi*p|/`}_`3kAk');
define('SECURE_AUTH_SALT', 'q=zy#jYi>3YGXX7|8M@~F xba;BigYoewhKokQN#{-ntj]W3,-[_w+r)=,w5<I8x');
define('LOGGED_IN_SALT',   'QBSixSavI18fG>sr>2^-i7^FQ$5lt;pRN#z5BC ? &VhFs4]Iv?@^Ex6X.~2g <=');
define('NONCE_SALT',       '#Ir[/HuUe*[#cErP.O`frv8BUhnvkfrS`:aZ|][M@4[!*%-/Og)wbzj:S&juRraV');

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
