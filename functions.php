<?php

/**
 * Plugin Name: Capstone Pro
 * Plugin URI: https://wpscouts.net
 * Description: This plugins extends functionality of core `capstone` theme.
 * Version: 1.2.6
 * Author: Faisal Khurshid
 * Author URI: https://wpscouts.net
 */


// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
  exit;
}

// Load plugin textdomain.
function capstone_pro_load_textdomain() {
  load_plugin_textdomain( 'capstone-pro', false, basename( dirname( __FILE__ ) ) . '/languages' ); 
}
add_action( 'init', 'capstone_pro_load_textdomain' );

// Define Constants
define( 'CAPSTONE_META_BOXES_DIR', plugin_dir_path( __FILE__ ) . 'metaboxes/' );
define( 'CAPSTONE_META_BOXES_URL', plugins_url( '/', __FILE__ ) . 'metaboxes/' );

define( 'CAPSTONE_CUSTOMIZER_DIR', plugin_dir_path( __FILE__ ) . 'customizer/' );
define( 'CAPSTONE_CUSTOMIZER_URL', plugins_url( '/', __FILE__ ) . 'customizer/' );

define( 'CAPSTONE_PAGE_BUILDER_DIR', plugin_dir_path( __FILE__ ) . 'page-builder/' );
define( 'CAPSTONE_PAGE_BUILDER_URL', plugins_url( '/', __FILE__ ) . 'page-builder/' );

define( 'CAPSTONE_SHORTCODE_DIR', plugin_dir_path( __FILE__ ) . 'shortcodes/' );
define( 'CAPSTONE_SHORTCODE_URL', plugins_url( '/', __FILE__ ) . 'shortcodes/' );

define( 'CAPSTONE_HOOKS_DIR', plugin_dir_path( __FILE__ ) . 'hooks/' );
define( 'CAPSTONE_HOOKS_URL', plugins_url( '/', __FILE__ ) . 'hooks/' );


// Require Files
require CAPSTONE_META_BOXES_DIR . 'functions.php';
require CAPSTONE_CUSTOMIZER_DIR . 'functions.php';
require CAPSTONE_PAGE_BUILDER_DIR . 'capstone-modules.php';
require CAPSTONE_SHORTCODE_DIR . 'functions.php';
require CAPSTONE_HOOKS_DIR . 'functions.php';
