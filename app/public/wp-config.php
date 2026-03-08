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
define( 'AUTH_KEY',          'oobL&!1j^)W:o]FvT+dCobew0QltDe sCyxV44Z[Q]bv.^.q8F W,}UMzVANraNq' );
define( 'SECURE_AUTH_KEY',   '>ns+NJI6pnq/E/:vt>4)^FWq^YberD.`REU5ad(eb>5>=KVeB9wlsrJtV&#gBu#h' );
define( 'LOGGED_IN_KEY',     '?),oybSGjj%3[xBoN-YzI^y_Ue{Dm[P!IIm$mcr_4^I?}r}{)~IS,9)I[z3dkZ7H' );
define( 'NONCE_KEY',         '<z97=BN_+u={.dAqbaLIht*!ZF`8Y~d[Q7Yn|{xfd<#-!&3Kuya i7A(h!t?c/jE' );
define( 'AUTH_SALT',         'R_AV2Ep3zl58^X_I0|/~60d:QRMA$nBPdn+cs)a$de/&D*sntV`W--ZTwupowFs/' );
define( 'SECURE_AUTH_SALT',  'fZt{/-Bgc0R2K=i`er@Zw!k{&eoLBE|h=0Og4.V-/pKSayiT!$AA.ugJfsy6ke43' );
define( 'LOGGED_IN_SALT',    '%5VOy{C,dZBLF/4mq.9.Q<fx}rlX>{7&wWr!,-0|?Wn7yW<As+j{|aiU:kR[YGMC' );
define( 'NONCE_SALT',        'g&Lj%P@^y G&tN&w1<y5TaYI{DUFN`_9}9fGp$(%Cv4-fAh+TvC:Dc2y~&0o2JV9' );
define( 'WP_CACHE_KEY_SALT', '.B).aa`LT;rL6a^@}n}c@0~Z+)M`.c(Y.3}*>_8n?jJX7uJp2l0dek!<FULb @Pv' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
