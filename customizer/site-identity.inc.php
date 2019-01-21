<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Site Identity
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_site_identity_settings' );

	function capstone_customize_site_identity_settings() {

        // OPTION: Image Field
        Kirki::add_field( 'capstone_dashboard_logo', array(
            'type'        => 'image',
            'settings'    => 'capstone_dashboard_logo',
            'label'       => esc_html__( 'Dashboard Logo', 'capstone-pro' ),
            'description' => esc_html__('If setup, it will appear in the employer and candidate dashboard.', 'capstone-pro'),
            'section'     => 'title_tagline',
            'priority'    => 8,
        ) );

        // OPTION: Image Field
        Kirki::add_field( 'capstone_preloader_icon', array(
            'type'        => 'image',
            'settings'    => 'capstone_preloader_icon',
            'label'       => esc_html__( 'Preloader Icon', 'capstone-pro' ),
            'description' => esc_html__('Preloader icon dimension should not increase by 200x200 (in pixels).', 'capstone-pro'),
            'section'     => 'title_tagline',
        ) );
        

	}