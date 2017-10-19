<?php
/*
Plugin Name: 	SVG Tooltipster
Plugin URI:		https://github.com/dataninja/wp-plugin-svg-tooltipster
Description: 	Add automatic tooltip features to inline SVG images using Tooltipster jQuery plugin.
Version: 		0.1.0
Author: 		jenkin
Author URI: 	http://www.dataninja.it
Text Domain: 	svg-tooltipster
Domain Path:	/languages
License: 		GPLv3
License URI:	http://www.gnu.org/licenses/gpl-3.0.html

	Copyright 2017 and beyond | Dataninja (email : info@dataninja.it)

*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/*
 * Enqueue js and css dependencies
 */
function dtnj_adding_deps() {

	/* Javascript libraries */
	wp_enqueue_script('svg', plugins_url('js/svg.min.js',__FILE__), Array(), '2.6.3', false);
	wp_enqueue_script('svg.screenbbox', plugins_url('js/svg.screenbbox.min.js',__FILE__), Array('svg'), '0.1.2', false);
	wp_enqueue_script('tooltipster', plugins_url('js/tooltipster.bundle.min.js',__FILE__), Array('jquery'), '4.2.5', false);
	wp_enqueue_script('tooltipster.svg', plugins_url('js/tooltipster-SVG.min.js',__FILE__), Array('svg.screenbbox','tooltipster'), '4.2.5', false);
	
	/* Style */
	wp_enqueue_style('tooltipster.css', plugins_url('css/tooltipster.bundle.min.css',__FILE__));
	
	/* Plugin javascript */
	wp_enqueue_script('svg-tooltipster', plugins_url('svg-tooltipster.js',__FILE__), Array('tooltipster.svg'), '0.1.0', false);
	
}

add_action( 'wp_enqueue_scripts', 'dtnj_adding_deps' );  
