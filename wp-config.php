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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sneak hub' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ejk<D g)=<4.7Sfd`eam_, N;5@3`~9#m!rM]z_Gdxv*-lA%xxNX{xXr7%ysjjfH' );
define( 'SECURE_AUTH_KEY',  'Q*bdWB2%|#mIBZN/^lZC]R3KaPXz`_Xd%=<?~R42$u*xa-cS=fbG]W#DWd<ZrDI5' );
define( 'LOGGED_IN_KEY',    'V_ndhp!aNyt-D$Y!70GW.q@FY74NoZ=9vE5AL%0nX(F8e)<TtNWki[M kQR`yV}q' );
define( 'NONCE_KEY',        '6PvP4gY@m=~*l;)e#RVVio218Y$o!3,~,_)]4#p1*,@5xv-+C~1Z,Fwcm[Y^?o9t' );
define( 'AUTH_SALT',        ')T7wpi&c2o5o,9AIg=I-jjFc684ts5f_)lAh@NGpU^vI;n[Z~0p{VDEiz5[=?/+W' );
define( 'SECURE_AUTH_SALT', 'z/1ON>d&Djh]]FK$2wQFyy*@^iQOYh,3#n^=i?10v|lD{8@ad!r/3~[n4O4U[5pz' );
define( 'LOGGED_IN_SALT',   '?{:2T]?M `b*I)lM-KM^&I:W$d)@NYx2!r>n!*pYhNE*N2@ML0Ea#t&MP5SjIvCY' );
define( 'NONCE_SALT',       '(&b~#`p]J9/VS$Ecz2;P}RSdpFI6oUnpKR?vPvaV?>heeI5o?,iq:&[QVY5J4tXm' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
