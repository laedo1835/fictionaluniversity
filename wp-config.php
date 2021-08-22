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
define('AUTH_KEY',         'IHAzMWmU41aI8mF8ZYkKgLxv9QDHElfGYY7v91tkD/GofV5jrwQ/95kNfN1e2zyo5QLo4YrPQGOONHxs+ez9BA==');
define('SECURE_AUTH_KEY',  'fcpFRYeWKouzxarbhtHOuoDRLdW9V0qz9XCFuLZWSC6zSkhepXD+DT235iuwDvfO8Qcr3XjjovBdx+Kjx5KhxA==');
define('LOGGED_IN_KEY',    'f45g3raZiOb8ZTGyQdiXY7h7RFB3s6i2We33lQ+mh4gFa8lJZ5Kbt9vcu4lMig4/tBqRnALc4UgTdwoSYJrJlw==');
define('NONCE_KEY',        'PtLup6eFd6N+64qdoC5aoHvj2i/sT/ja4xDD1+Z/64L97asdmAgy/Z+6lOzpztPsrD8+pcpIYTVkD5CiFhMQ2A==');
define('AUTH_SALT',        'cWQm6qFXYHSSpqHiZxjEumqiJgC7u6CUHfQTL+wFNESq0wA8MLxOQetLiIoNx610HmnMnxjv9MI0fzL2oyaKjQ==');
define('SECURE_AUTH_SALT', '/m/qwC7B9aL31rIhylNGJj931CqqY9lEPOsw96B7tBlOoBRwZ2LyZKLkqOqVqdAwCJpIbOP6v50n22o7z8P+jg==');
define('LOGGED_IN_SALT',   'PygIbdhK6uoMH6Vc28uGowShkc4Y4nH6MnwwbCzQOdakjA7GFo4GvFQlOzVAUAHhUt/cmw1sNfeUH0QOJe9o6g==');
define('NONCE_SALT',       'mhs9YWPluSQ6tK8ZqtPesNPYRkS2hDzSA0+EKJjysxO7AV0r7WPSK85Ko5snprKmQzdC3dnO3FD4ciHMvyQfIg==');

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
