<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Header Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_header_settings' );

	function capstone_customize_header_settings() {

		// SECTION: Header
		Kirki::add_section( 'capstone_header_settings', array(
            'title'          => esc_html__( 'Header Settings', 'capstone-pro' ),
            'description'    => esc_html__( 'This section configure settings for the site header.', 'capstone-pro' ),
            'priority'       => 20,
        ) );

		// OPTION: Number Field
		Kirki::add_field( 'capstone_header_primary_logo_width', array(
			'type'        => 'number',
			'settings'    => 'capstone_header_primary_logo_width',
			'label'       => __( 'Primary Logo Width', 'capstone-pro' ),
			'description'    => esc_html__( 'This option only applies to primary image logo.', 'capstone-pro' ),
			'section'     => 'capstone_header_settings',
			'default'     => '165',
		) );

    	// OPTION: Number Field
		Kirki::add_field( 'capstone_header_dashboard_logo_width', array(
			'type'        => 'number',
			'settings'    => 'capstone_header_dashboard_logo_width',
			'label'       => __( 'Dashboard Logo Width', 'capstone-pro' ),
			'description'    => esc_html__( 'This option only applies to dashboard image logo.', 'capstone-pro' ),
			'section'     => 'capstone_header_settings',
			'default'     => '34',
		) );

    	// OPTION: Number Field
		Kirki::add_field( 'capstone_header_vertical_padding', array(
			'type'        => 'number',
			'settings'    => 'capstone_header_vertical_padding',
			'label'       => __( 'Header Vertical Padding', 'capstone-pro' ),
			'description'    => esc_html__( 'Adjust the number to increase/decrease header height.', 'capstone-pro' ),
			'section'     => 'capstone_header_settings',
			'default'     => '20',
		) );

    	// OPTION: Number Field
		Kirki::add_field( 'capstone_header_explore_menu_limit', array(
			'type'        => 'number',
			'settings'    => 'capstone_header_explore_menu_limit',
			'label'       => __( 'Explore Menu Limit', 'capstone-pro' ),
			'description'    => esc_html__( 'Explore menu can only show handful of terms before going off the screen. Define how many terms (for each taxonomy) it should show at max.', 'capstone-pro' ),
			'section'     => 'capstone_header_settings',
			'default'     => '8',
		) );

	}