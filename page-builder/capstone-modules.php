<?php

define( 'CAPSTONE_PAGE_BUILDER_MODULES_DIR', CAPSTONE_PAGE_BUILDER_DIR . 'modules/' );
define( 'CAPSTONE_PAGE_BUILDER_MODULES_URL', CAPSTONE_PAGE_BUILDER_URL . 'modules/' );

function capstone_load_module_examples() {
    if ( class_exists( 'FLBuilder' ) ) {
      // Include your custom modules here.
      require_once CAPSTONE_PAGE_BUILDER_MODULES_DIR .'header/header.php';
      require_once CAPSTONE_PAGE_BUILDER_MODULES_DIR .'divider/divider.php';
      require_once CAPSTONE_PAGE_BUILDER_MODULES_DIR .'blog-posts/blog-posts.php';
      require_once CAPSTONE_PAGE_BUILDER_MODULES_DIR .'jobs/jobs.php';
      require_once CAPSTONE_PAGE_BUILDER_MODULES_DIR .'pricing/pricing.php';
      require_once CAPSTONE_PAGE_BUILDER_MODULES_DIR .'faqs/faqs.php';
      require_once CAPSTONE_PAGE_BUILDER_MODULES_DIR .'testimonials/testimonials.php';
      require_once CAPSTONE_PAGE_BUILDER_MODULES_DIR .'cta-banner/cta-banner.php';
      if ( class_exists( 'WP_Job_Manager' ) ) {
        require_once CAPSTONE_PAGE_BUILDER_MODULES_DIR .'listing-spotlight/listing-spotlight.php';
      }
    }
}
add_action( 'init', 'capstone_load_module_examples' );