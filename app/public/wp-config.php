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
define('AUTH_KEY',         'u4DQibUcsypp7qDQOPbNAK6/YzUmn1mno9ITg6uCSJ1CWdL83S3U6AbeMfeb6sMEiqkLEEZ7L9jL48i5fhi+Gg==');
define('SECURE_AUTH_KEY',  'iFpISVk7FXRyXMr9EXC54JwtsIiPMnxb5g4mtq4m+bOJQ0pmap6fKbZYJKd/XEGidkZ7xBri1mCRp3E5R0tlAA==');
define('LOGGED_IN_KEY',    'HwYd0Y9pephDqnkp++kwyfAEjcpWW024USexRX2LytqYawLONUEhaEk72eUkXtbNDBRez34QRf75ZTVbtWWOKg==');
define('NONCE_KEY',        '7li5NIqs8Gtp2tXFVOEx18rfA4vQfbDtBcQeXjHmVP3pEtoFAYYRunIQabTl9mxjqC7JxuBhJs5gI+57wqoY4w==');
define('AUTH_SALT',        'MFpApfsjYd+mJRE2l3g5DTsrvFARp0l+bTT/j8vNdd9Fhs6AMEXUI3JALPhZOZMOubLywIdIcvOXd9E/vmtYfQ==');
define('SECURE_AUTH_SALT', '31x+mZIjlbbH1L/qHMT21ZQdZRKtE+Cvh2oHABUfEVGFyalFaFEHFaX+Bnnp8mMwmo2aqfaJaZHwH2SM1XgcRA==');
define('LOGGED_IN_SALT',   'im2juqFajKhQYdW8IG+NwjmYhaZFIVBIy338NZPTOUQ2WIAv0iXXwNy+ppN3MpFyQHDm7TZ67y9WWF0BT8E9KQ==');
define('NONCE_SALT',       'NfP8RCbKZKYQmEMxtbVO3RwEA3vUd2/8WwWQxtb2pKQc6Un5t10ZlpeiBaeUrtxhktj2eeQdLM3yhq5HrNecbg==');

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
