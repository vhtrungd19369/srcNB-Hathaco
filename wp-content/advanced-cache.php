<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

define( 'WP_ROCKET_ADVANCED_CACHE', true );
$rocket_cache_path = '/home/u957679471/domains/ninhbinhweb.info/public_html/bds11/wp-content/cache/wp-rocket/';
$rocket_config_path = '/home/u957679471/domains/ninhbinhweb.info/public_html/bds11/wp-content/wp-rocket-config/';

if ( file_exists( '/home/u957679471/domains/ninhbinhweb.info/public_html/bds11/wp-content/plugins/wp-rocket/inc/front/process.php' ) ) {
	include '/home/u957679471/domains/ninhbinhweb.info/public_html/bds11/wp-content/plugins/wp-rocket/inc/front/process.php';
} else {
	define( 'WP_ROCKET_ADVANCED_CACHE_PROBLEM', true );
}