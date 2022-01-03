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
define('AUTH_KEY',         'OjXYpjnT4pcZPQc4yPXiJuM7b7K8h/42zoZjIuVWrfS94VSURjlaxU7TRIlSdtkix/VdVt6BaLrtCduHSgnpiQ==');
define('SECURE_AUTH_KEY',  'UvgN7HsLtysqV36X8d7qPdnItoJ/Au/1dCh4AsxOkGUt0Gs1EmqXRvzvvOHKnzQr63O9jQMZqtsCA0fnZZqI2w==');
define('LOGGED_IN_KEY',    'deukehVJ5mvMCKkI0jyl0Fe0sf8cMHiSZH0JwBVjL19ixkIdSiOCNbmaNx/1+fIdDyB+A/P9oYm8RMEuu3s5LA==');
define('NONCE_KEY',        'eVCN7I1VTGhjc5RKFwU8e2PvDF7x0ik8u0m60KFhLQqeYaGNMjtF/W/V9uQq88sXbZgWUHXTMSfB8OLfBOIAuw==');
define('AUTH_SALT',        'Qlz+3CPqy6OoN/bDsxv/I355TGI3LIShVWcfhgNP9sjTuClJ28HGXcHsgv6AolNyg7sKkxl3OfOWSo7NrqXsHg==');
define('SECURE_AUTH_SALT', 'hdUG1BWiJZtIRc20nImY89NvEcnuEpXj/tsuCM//NODSws1ygadjWUkCEJsKCHc+IgWkVAqeosD1zMwFyd789w==');
define('LOGGED_IN_SALT',   '6FPy7N+W6Zaq/0qUf9mtGZQgu7pgci3zX97lPeMkIAowoyc2thG13OefnZWCvquQ81RBUiQNQ7XOjqIx72KmMg==');
define('NONCE_SALT',       'HacezO4MqbynnrnhiuThPgmlJocw0/pJEfnCsoYomlaWwLGUfEEnVESjYLZywpXmL1J/idTwGXM86Lab/NXoug==');

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
