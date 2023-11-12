<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sneaker' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OfsW-Nv1sn<<Bq)[2?>7?qA,#^OBnJR)!aFho(%j)onu[~A!*>CI&{2#L=[/#`yB' );
define( 'SECURE_AUTH_KEY',  'vhkEM8nXd+|wH2QRlsP)nk%g-l-5_[UM0c}o uJ` |T?qc6NBoGq8^Gx[KbaqLtU' );
define( 'LOGGED_IN_KEY',    ':mWC|UV^guG-ji|)Cz5Gv@zm KXbxL5%^fFJhGFPKpByww<UFlbisXK6U,=.cbSo' );
define( 'NONCE_KEY',        '.=`:;kE`K![l3nLis3xxD(6xrJA@U_vR5gU=rbzn:+rcF|;!vxk+}A0C>`.vzO#A' );
define( 'AUTH_SALT',        '9O3R#^#oeKmnq!fFML54)4>07oP!S>Q@-Y|V{X)EeL@L)R>{Q1()f:?Z[cHy5N$r' );
define( 'SECURE_AUTH_SALT', '!00tah/[tBmD9=I!]e|>BY=>G}lp, $SDsr>YW~xfm7p|8@t}=gU_80$uwsX$jg-' );
define( 'LOGGED_IN_SALT',   ' nlk@eoB!G3&2|C*;e#n6P-63P~v i](H<Z^O~L5NJtgk_%O}Ld91}X|_%+r?x0Q' );
define( 'NONCE_SALT',       '1 g?+X.!bEv@Uu)@lo}oGJZ,LR[?yA__;Ru$LBpE5K%>&OOF)#UBSjKU]OZC_TZ}' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
