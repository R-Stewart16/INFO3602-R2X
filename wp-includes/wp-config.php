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
define('AUTH_KEY',         '5j7dPuxxm/h25ly5ElZAerXVgZOkAk2xLqeOgX/2VqNiIBPB5k3cGb4BpzjcBwi5BkJEvuA11aaDtOLofN+mBA==');
define('SECURE_AUTH_KEY',  '1fCgyX15QkE0VnISsvEGy38itYwJVteUdXHt3sTgjFBkkiq6Oj0ARIVpXYGNT0rqn/FtsPahPtel6tj0T/lGyg==');
define('LOGGED_IN_KEY',    'AT8y5aYawcqlhl4hvRsOnYVB++K40PicHTwFQqGxDunzaOm9bK5iV9iGoHXQ7JxrIqQ1ulpNTeYdv0RIOm6GVA==');
define('NONCE_KEY',        '8QgZGplOrlE76cPUZ6/xbMTEyCz06Nc/2xa+OXfhssGNriMRU7WIdVgdIbNzcf1Luc3gTEdDk6ba2Np9jkY/lw==');
define('AUTH_SALT',        '49efQ03jzj58T8IgqSkBt3TATu9y3bXzplGUiMO5XkPmNpIIzfCKicYz7Hss/EWfL4nHlxZvTXz4B5I+kQurOw==');
define('SECURE_AUTH_SALT', 'FM87D91E1GQJ+EL1oYeCBOeoWDK4CWhDr82h1a/cpt54YWZQKNGb4bXAYlSHdFujxGcPEo1VjXfjyIMQq8m8BQ==');
define('LOGGED_IN_SALT',   'NAUCb7mkoElRgohD1ssRVjPEtIwVTMBbv1B1QGkkFPBWYYbEPA9BmN7p+r2ThTi1m0PAE7VlFcBt8zr5akxMPQ==');
define('NONCE_SALT',       'yjvvfzwffbchC160xlz7FdRmPkbAd79jelXx4k29qqHtYjlZxNRzwXJw1+gTGsrKw7fVTDTD9l62j6gqlqHO8Q==');

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
