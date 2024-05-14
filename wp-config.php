<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'smac' );

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
define( 'AUTH_KEY',         'nZS> Zez8lg(Q8Me)qs/Na&Mh`K7I|Q)e|d~gi^w~:84x?}(g_D%eaU@/u@hTE|s' );
define( 'SECURE_AUTH_KEY',  '|fI`):BrhvkAN>^N!a.&!7j@!X<H!?,D&wui;5(I~q3*ic.2CcKC0]O@HUa_ud?+' );
define( 'LOGGED_IN_KEY',    'Z?itcq+F*YkVPKAkTs=?#Z]:=k B)A(jw65Sa9*-@rJ7Y32zVaS<Bj}:7YE/w?0T' );
define( 'NONCE_KEY',        'X[b?%<Qjp.1:xZYY/eF@r=1l1Aa#0X9KOvWrah+ o#B8Tl8H^^Yq!`2fJuV,]1.K' );
define( 'AUTH_SALT',        'H7Y@[TaK9nTS}<r&:?<1kyY~*8C@gJ;nutoe6O?NlJI/dEvO=T~FJu]GFGq#z=dx' );
define( 'SECURE_AUTH_SALT', '1!j3MFBAL:h[C:.tOl-s,,!4QS3!(4@8xoSMak%v$L+k,.}bXafPdVtfle{PtG6}' );
define( 'LOGGED_IN_SALT',   '8VQPNVdi<c1!ZpdJ%1@awI)uxs{L,C`-7K7AjAv~ oh q.8q@As.mj$@O)dOD>vD' );
define( 'NONCE_SALT',       'Ih]&Ih#CcMoTp>Kub0o5/`xxZYN.F#Su([1kSf<Zr0c/{qh/54}Eq:uh#hd8)qc&' );

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
