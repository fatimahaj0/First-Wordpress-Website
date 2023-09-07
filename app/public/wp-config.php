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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'elgvxZUPBf46gjbG8gDBOVAAMVqP6HJHdslfiJTbWdMzQjWiyfdl/whMOvEQP+2uLBFUhflFvpYZaQOGQ+yaDQ==');
define('SECURE_AUTH_KEY',  '4/75Nbj0pSCcasLCj7Lig+KZlcHplGa67LTnZw2H0byonIwL5jLsjgs5cChshjMHXaVp1AKVg5oS87KMfI6z8g==');
define('LOGGED_IN_KEY',    '4KUUlqgELdT8TeqfxpZVlNDeGORRTQYX7VT/stfg8eThVK28Go92P8fFfHZWT4E2Jolu7Qx9cyVgcMwumn0RGw==');
define('NONCE_KEY',        'pfn+UDfZxambMj+aalIfLkL7qKVYmNyIYi8oVKnXfQ/NJpuknjHxdp8+Sk3hIe5VBzEYe88n2GU8wCKFTryhiw==');
define('AUTH_SALT',        'UrhjGzfDKK8PhiFbkc4Eni/N5I3KUKM0MorEATnkmTqzrg5ChqwTK59zfXGqlDFqWl0h7TmZNrCk4ZbtC7+HDQ==');
define('SECURE_AUTH_SALT', 'NXegJ4GlbN5sh51R0N9NRXS8gB4eQGlQJleto7y/PslSz5qcxQhF2HXanIRBtSpQeuYWqXJ/UBN6g9wUtz/m9g==');
define('LOGGED_IN_SALT',   'KbALZVLZOOcTzAHHSGiXJ3vie7ebM+O58TFMPpHqeuI5i14Dv4fhrtxf5+029LjT+Z6T69NLBTMuzGddNl6U1w==');
define('NONCE_SALT',       '/+1me+/0AWhB7d76T+HlrbiXjdhwimlOgPcL21J2DQxgz876q8Otp9EEMdXrC+9ZIhE0BrbIuon5cb8u4m5GMQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
