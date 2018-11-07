<?php

#-------------------------------------------------------------------------------#
#  Add Envato CTA button
#-------------------------------------------------------------------------------#

    function capstone_envato_cta_button() {
        echo '<a href="#" class="page-control envato-cta">Buy Capstone on <img src="'. esc_url( get_template_directory_uri() ) .'/images/envato-logo.png" /></a>';
    }

    // add_action('capstone_page_controls', 'capstone_envato_cta_button');
