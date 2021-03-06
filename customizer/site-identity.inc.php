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

		// OPTION: Checkbox
		Kirki::add_field( 'capstone_disable_preloader', array(
			'type'        => 'checkbox',
			'settings'    => 'capstone_disable_preloader',
			'label'       => esc_html__( 'Disable Preloader', 'capstone-pro' ),
			'description' => esc_html__( 'Check this to disable site preloader.', 'capstone-pro' ),
			'section'     => 'title_tagline',
            'default'     => false,
            'priority'    => 80,
		) );

        // OPTION: Image Field
        Kirki::add_field( 'capstone_preloader_icon', array(
            'type'        => 'image',
            'settings'    => 'capstone_preloader_icon',
            'label'       => esc_html__( 'Preloader Icon', 'capstone-pro' ),
            'description' => esc_html__('Preloader icon dimension should not increase by 200x200 (in pixels).', 'capstone-pro'),
            'section'     => 'title_tagline',
            'priority'    => 90,
        ) );
        
		// OPTION: Checkbox
		Kirki::add_field( 'capstone_enable_dev_mode', array(
			'type'        => 'checkbox',
			'settings'    => 'capstone_enable_dev_mode',
			'label'       => esc_html__( 'Enable Development Mode', 'capstone-pro' ),
			'description' => esc_html__( 'This enables some hidden options (for debug purpose) in the admin panel. Do NOT enable it unless you know what you are doing.', 'capstone-pro' ),
			'section'     => 'title_tagline',
            'default'     => false,
            'priority'    => 100,
		) );

	}