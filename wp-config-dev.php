<?php
# Database Configuration
define( 'DB_NAME', 'wpdev' );
define( 'DB_USER', 'wpdev' );
define( 'DB_PASSWORD', 'wpdev' );
define( 'DB_HOST', 'mysql' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'yNX/?O,ec%9+|N`q-D5*.B;nZM@Xi}9dpNPeZl<>ebfsv.4V-Kp,RL,^1Wt9v:!]');
define('SECURE_AUTH_KEY',  'NURT`<l@q%AXR!dM?sGW:+zla*e[MN`ud00yJb7&5DrlFBuxn!;pleYn{M%+~HLU');
define('LOGGED_IN_KEY',    'oeE78=E@]pyCKt;b&D!]xO+dGksL6zJ5F[>C1N=w:3-|Va!idP9Zse(x35Ta8vO]');
define('NONCE_KEY',        'e(n-K6?n-AkbnX3<<_Lj:^0/#S!!`MPUXp,.UVG07Lq&@SL2e|8O B5hqM*Cq|aN');
define('AUTH_SALT',        'Q>$F)5Q%`/F~s?B5r19(|Bq8g76q+Z!1-/u(9X+J-wt0V.GLJI>vc!=|}_b`H`d:');
define('SECURE_AUTH_SALT', 'dEC9}a;MiZMOZlPIC}D?!<g!0.t91h@IXjVIev4=va-f.`>y|Iq?eQ@L&} SwFMc');
define('LOGGED_IN_SALT',   'i]B|aY3 # k*}IxYc[kuK|E.*6Rl<{%Gpwx;{xC-LM=D X$p;U9!ePe>L{lcAIu_');
define('NONCE_SALT',       '2P|[&tloxx%f)PzYI8HW/:a|uSQohbGWq2Kn~2Ri,E:^QC=/U^<e1h`:0[ym%zlS');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'bmwcca' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '8e2647193b2157fc6a2576583137166c2fed3100' );

define( 'WPE_CLUSTER_ID', '120075' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', true );

define( 'FORCE_SSL_LOGIN', true );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'bmwcca.net', 1 => 'bmwcca.wpengine.com', 2 => 'tejas.bmwcca.net', 3 => 'tejaschapter.org', );

$wpe_varnish_servers=array ( 0 => 'pod-120075', );

$wpe_special_ips=array ( 0 => '35.185.51.123', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings




define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'bmwcca.net' );
define( 'PATH_CURRENT_SITE','/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
define('WP_HOME','bmwcca.net');
define('WP_SITEURL','bmwcca.net');



# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
