<?php

/**
 * Plugin Name: Capstone Pro
 * Plugin URI: https://wpscouts.net
 * Description: This plugins extends functionality of core `capstone` theme.
 * Version: 1.0
 * Author: Faisal Khurshid
 * Author URI: https://wpscouts.net
 */


// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
  exit;
}

// Define Constants
define( 'CAPSTONE_PAGE_BUILDER_DIR', plugin_dir_path( __FILE__ ) . 'page-builder/' );
define( 'CAPSTONE_PAGE_BUILDER_URL', plugins_url( '/', __FILE__ ) . 'page-builder/' );

define( 'CAPSTONE_WIDGETS_DIR', plugin_dir_path( __FILE__ ) . 'widgets/' );
define( 'CAPSTONE_WIDGETS_URL', plugins_url( '/', __FILE__ ) . 'widgets/' );

// Require Files
require CAPSTONE_PAGE_BUILDER_DIR . 'capstone-modules.php';
require CAPSTONE_WIDGETS_DIR . 'featured-post/plugin.php';
