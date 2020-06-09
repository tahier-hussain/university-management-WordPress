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
define('AUTH_KEY',         'flEX5nXjTpk8CYTr6peu3+hVOdpeb2ntEuCnuH+3zywbwQ4aG/JPppr7k+FXv6yqM0hTvYmHwLzEH9Kz8q7Sog==');
define('SECURE_AUTH_KEY',  'Cm4wktvBo+twGMzBFuz0Zk5Yp7OBycLH2YKrBUqa4rcVFNn1FOuGHGm72go+JxnBsOMbtEBPDlRCvyOFOhGmxA==');
define('LOGGED_IN_KEY',    'NUER3n7yeyoaYm/ZapurnfFCQNl0aLxTc3wy4WuIzzjNc1clGwKGzkXi0Cb47EEyOTz7DETPqnynuFo9psQ/og==');
define('NONCE_KEY',        'pIQxYVh0s4BNHNDLZodic+EQY196cmR/xM89tlYj7KMFoeB5l2DqK+oNGAO516L/8OBOq6pWXmObBip7fzKszQ==');
define('AUTH_SALT',        'dWq0R1JyavnK21Q1licvQgflbfFb2Ob7z8HhqDDiB/8AZ1ALiiq/qPnVewU2GFTul7n9+f7rFBf1cIoq6bfX8g==');
define('SECURE_AUTH_SALT', 'xEXAkxSoaAJl3heKoJy8ayXyVJ+6/GakJZ2ECf5jQLB3CxCqWFPPthlB6sA/TTPoc7UfaoEnpbNOpWar+UFeuQ==');
define('LOGGED_IN_SALT',   'uExghd7WZk8I6dZgsiMg6mtvPIxdjpsQkaC8cQjODdZjn/g9NxYsXbnQ8w48ktJzEHFk7mo5o35QuidTSDSQIQ==');
define('NONCE_SALT',       '589Vr2HccXmaiUNz/UwhU8mVXeDwEA1Iwsi2bLJNYHgjO55ZEzDLu/oPKWw1ulNTwVQj/OpHNqIHeMElN5jjAw==');

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
