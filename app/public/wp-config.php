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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'paovdgOk+Moh6bPGv32nVF1tJ87Gh3R0f7ZDYtGCqk/uf2c90aEmKN7d6lio9Bhl5117CsouE4V+2vapGLJg2A==');
define('SECURE_AUTH_KEY',  'wnNtj4JhCSoDceXphWZWedeOxfx3v6l2X36IL2BShwEe9ouNi7d+nwzmxXSoRK6X/NYni4Sd/zoFJDwKzHfVuA==');
define('LOGGED_IN_KEY',    'ryRvPnRDSuB3bFC2gfhO4+c9SBo/0rxzpayyc6f0NsXz6sMMpOU+RFuCQwrjyc7SeBBGqpS0VtNO53klzJJC5Q==');
define('NONCE_KEY',        '8Efd1sy6bOT9ZGdCq1AIqITDBvXAOIdBSCgi6UOd930jiBA+0yhwE4YYXl+oPbMbZMGsrjTb3U/36CNDWNrTjA==');
define('AUTH_SALT',        'IOpnSwoFRHFLQmcl3uGQ9l/tjVYRf9uHU6Ced4LwXaZ6uTZhvf7iZnkVlB2dbh0Q8tGzAN5Ooc5QzPo3+58IYg==');
define('SECURE_AUTH_SALT', '9tUwxvwLnsYdTwx291v8z4FG6DGpIfZ/BsjvKjArgSf4bYqq+qEhokTpvIAB84//LdEPcDf2l89dfUX/vJRWrQ==');
define('LOGGED_IN_SALT',   'eTQhYhktHl5GClHGNF05UJsIn1kmvQbMjHRY38cSeu1g3iIE1hR6nHv9agRTbtDoNSgHwbGDNQ+yQmSOBszYPg==');
define('NONCE_SALT',       'wzalfObHvmpXfOaq2r7RuKuujiq3co60/piDxEEjr3ikkK1nqSWhyjr/zmDyPL18DyWfl61LFDV72FEM3iiNWw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
