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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'knanayaregion' );

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
define( 'AUTH_KEY',         't9(00KL4DD&2=nT2u;$R)sIZY.G;W@$e-hg8Cr-5?|%Z(7e(7K!KBH*+^fij<sBs' );
define( 'SECURE_AUTH_KEY',  'D;AZ+94dwjAu~j`J=YPkt[joVA/so?,Wn{PEF<kMdLdhd>kW#0Et=U$ts_fNn gR' );
define( 'LOGGED_IN_KEY',    'PkOE/$;jC|_5MW)>2tY/F`D qtSg} <W5R2!H:9rs?9**fA9uQK6o3|G~H+C;F4p' );
define( 'NONCE_KEY',        '(Vg#*TRp%]9g:#tDu~qQ^|P_5h4E)lAM*5C?$MnU~iHV|Y!;,SP&v0Pr=j^I~[,g' );
define( 'AUTH_SALT',        'IKzjxn4|Kt}s~n#}4YHz,,}L6w@[10N[x<prBvz_|v-wY|b=!Ji#IgR_W> KL#1f' );
define( 'SECURE_AUTH_SALT', 'x $#fey.:9{r9>CJ_e[8S}+AE}^ .2`@^wn-DT_q)=OkW@*Xnxx$#n#318f.G!m{' );
define( 'LOGGED_IN_SALT',   '}3f>E#o.NF=1fmsoT/W:[NHa=?Pa0{0|;HPfSsy&nwdJa Uc|IrGWd;c[i@86nC)' );
define( 'NONCE_SALT',       'c&s{/m+DOX?9du!_2~rAhkBfgeZDO/qFYD-&7Z[bA@vO;o/fk/_6c~`lfn,zP?_j' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
