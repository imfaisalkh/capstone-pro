<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Authentication Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_auth_settings' );

	function capstone_customize_auth_settings() {

        // PANEL: Authentication Settings
		Kirki::add_panel( 'capstone_auth_settings', array(
			'priority'    => 75,
			'title'       => esc_html__( 'Authentication Settings', 'capstone-pro' ),
			'description' => esc_html__( 'This panels define and configures some authentication settings.', 'capstone-pro' ),
		) );

        // SECTION: Authentication Pages
		Kirki::add_section( 'capstone_auth_pages', array(
            'title'          => esc_html__( 'Authentication Pages', 'capstone-pro' ),
			'description'    => esc_html__( 'This section configures different authentication pages.', 'capstone-pro' ),
            'panel'          => 'capstone_auth_settings',
        ) );

		// OPTION: Select Field
        Kirki::add_field( 'capstone_auth_register_page', array(
            'type'        => 'dropdown-pages',
            'settings'    => 'capstone_auth_register_page',
            'label'       => esc_html__( 'Registration Page', 'capstone-pro' ),
            'section'     => 'capstone_auth_pages',
        ) );

		// OPTION: Select Field
        Kirki::add_field( 'capstone_auth_login_page', array(
            'type'        => 'dropdown-pages',
            'settings'    => 'capstone_auth_login_page',
            'label'       => esc_html__( 'Login Page', 'capstone-pro' ),
            'section'     => 'capstone_auth_pages',
        ) );
       
		// OPTION: Select Field
        Kirki::add_field( 'capstone_auth_password_recovery_page', array(
            'type'        => 'dropdown-pages',
            'settings'    => 'capstone_auth_password_recovery_page',
            'label'       => esc_html__( 'Password Recovery Page', 'capstone-pro' ),
            'section'     => 'capstone_auth_pages',
        ) );        

	}