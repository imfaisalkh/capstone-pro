<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Header Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_header_settings' );

	function capstone_customize_header_settings() {

		// PANEL: Dashboard Settings
		Kirki::add_panel( 'capstone_header_settings', array(
			'priority'    => 20,
            'title'          => esc_html__( 'Header Settings', 'capstone-pro' ),
            'description'    => esc_html__( 'This section configure settings for the site header.', 'capstone-pro' ),
		) );
		
		// SECTION: Header
		Kirki::add_section( 'capstone_header_general', array(
            'title'          => esc_html__( 'General Settings', 'capstone-pro' ),
            'description'    => esc_html__( 'This section configure settings for the site header.', 'capstone-pro' ),
            'panel'          => 'capstone_header_settings',
        ) );

		// OPTION: Number Field
		Kirki::add_field( 'capstone_header_primary_logo_width', array(
			'type'        => 'number',
			'settings'    => 'capstone_header_primary_logo_width',
			'label'       => __( 'Primary Logo Width', 'capstone-pro' ),
			'description'    => esc_html__( 'This option only applies to primary image logo.', 'capstone-pro' ),
			'section'     => 'capstone_header_general',
			'default'     => '165',
		) );

    	// OPTION: Number Field
		Kirki::add_field( 'capstone_header_dashboard_logo_width', array(
			'type'        => 'number',
			'settings'    => 'capstone_header_dashboard_logo_width',
			'label'       => __( 'Dashboard Logo Width', 'capstone-pro' ),
			'description'    => esc_html__( 'This option only applies to dashboard image logo.', 'capstone-pro' ),
			'section'     => 'capstone_header_general',
			'default'     => '34',
		) );

    	// OPTION: Number Field
		Kirki::add_field( 'capstone_header_vertical_padding', array(
			'type'        => 'number',
			'settings'    => 'capstone_header_vertical_padding',
			'label'       => __( 'Header Vertical Padding', 'capstone-pro' ),
			'description'    => esc_html__( 'Adjust the number to increase/decrease header height.', 'capstone-pro' ),
			'section'     => 'capstone_header_general',
			'default'     => '20',
		) );

		// OPTION: Blog --> Blog Layout
		Kirki::add_field( 'capstone_header_stick_config', array(
			'type'        => 'select',
			'settings'    => 'capstone_header_stick_config',
			'label'       => __( 'Header Stickiness', 'capstone-pro' ),
			'section'     => 'capstone_header_general',
			'default'     => 'headroom--unpinned',
			'choices'     => array(
				'headroom--unpinned' => esc_html__( 'Stick on Demand', 'capstone-pro' ),
				'headroom--pinned' => esc_html__( 'Always Sticky', 'capstone-pro' ),
				'headroom--disabled' => esc_html__( 'Disable Stickiness', 'capstone-pro' ),
			),
		) );

		// SECTION: Header
		Kirki::add_section( 'capstone_header_explore_menu', array(
			'title'          => esc_html__( 'Explore Menu', 'capstone-pro' ),
			'description'    => esc_html__( 'This section configure settings for the site header.', 'capstone-pro' ),
			'panel'          => 'capstone_header_settings',
		) );

    	// OPTION: Number Field
		Kirki::add_field( 'capstone_header_explore_menu_limit', array(
			'type'        => 'number',
			'settings'    => 'capstone_header_explore_menu_limit',
			'label'       => __( 'Menu Limit', 'capstone-pro' ),
			'description' => esc_html__( 'Explore menu can only show handful of terms before going off the screen. Define how many terms (for each taxonomy) it should show at max.', 'capstone-pro' ),
			'section'     => 'capstone_header_explore_menu',
			'default'     => '8',
		) );

		// OPTION: Order Field
		Kirki::add_field( 'capstone_header_explore_menu_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_header_explore_menu_order',
			'label'       => __( 'Menu Order', 'capstone-pro' ),
			'description'    => esc_html__( 'Change the order and visibility of explore menu items.', 'capstone-pro' ),
			'section'     => 'capstone_header_explore_menu',
			'default'     => array(
				'job_categories',
				// 'companies_list',
				'job_tags',
				'job_types',
			),
			'choices'     => array(
				'job_categories' => esc_html__( 'Job Categories', 'capstone-pro' ),
				'companies_list' => esc_html__( 'Companies List', 'capstone-pro' ),
				'job_tags' => esc_html__( 'Job Tags', 'capstone-pro' ),
				'job_types' => esc_html__( 'Job Types', 'capstone-pro' ),
				'resume_categories' => esc_html__( 'Resume Categories', 'capstone-pro' ),
				'resume_skills' => esc_html__( 'Resume Skills', 'capstone-pro' ),
			),
		) );

		// SECTION: Search Module
		Kirki::add_section( 'capstone_header_search_module', array(
			'title'          => esc_html__( 'Search Module', 'capstone-pro' ),
			'description'    => esc_html__( 'This section configure settings for header search module.', 'capstone-pro' ),
			'panel'          => 'capstone_header_settings',
		) );

		// OPTION: Select Field
		Kirki::add_field( 'capstone_header_search_type', array(
			'type'        => 'select',
			'settings'    => 'capstone_header_search_type',
			'label'       => __( 'Search Type', 'capstone-pro' ),
			'description'    => esc_html__( 'Define which search form to use in site header.', 'capstone-pro' ),
			'section'     => 'capstone_header_search_module',
			'default'     => 'blog',
			'choices'     => array(
				'jobs' => esc_html__( 'Jobs', 'capstone-pro' ),
				'resumes' => esc_html__( 'Resumes', 'capstone-pro' ),
				'companies' => esc_html__( 'Companies', 'capstone-pro' ),
				'blog' => esc_html__( 'Blog', 'capstone-pro' ),
			),
		) );

		// OPTION: Text Field
		Kirki::add_field( 'capstone_header_search_title', array(
			'type'     => 'text',
			'settings' => 'capstone_header_search_title',
			'label'    => __( 'Search Title', 'capstone-pro' ),
			'section'  => 'capstone_header_search_module',
			'description' => esc_html__('Enter a title for your search module.', 'capstone-pro'),
		) );

		// OPTION: Text-Area Field
		Kirki::add_field( 'capstone_header_search_desc', array(
			'type'     => 'textarea',
			'settings' => 'capstone_header_search_desc',
			'label'    => __( 'Search Description', 'capstone-pro' ),
			'section'  => 'capstone_header_search_module',
			'description' => esc_html__('Enter a short description for your search module.', 'capstone-pro'),
		) );

		// SECTION: Search Module
		Kirki::add_section( 'capstone_header_cta_module', array(
			'title'          => esc_html__( 'Call to Action', 'capstone-pro' ),
			'description'    => esc_html__( 'This section configure settings for call to action button.', 'capstone-pro' ),
			'panel'          => 'capstone_header_settings',
		) );

		// OPTION: Checkbox Field
		Kirki::add_field( 'capstone_header_cta_disable', array(
			'type'        => 'checkbox',
			'settings'    => 'capstone_header_cta_disable',
			'label'       => esc_html__( 'Disable CTA Button', 'capstone-pro' ),
			'description' => esc_html__( 'Check this option to disable CTA button.', 'capstone-pro' ),
			'section'     => 'capstone_header_cta_module',
			'default'     => false,
		) );

		// OPTION: Text Field
		Kirki::add_field( 'capstone_header_cta_text', array(
			'type'     => 'text',
			'settings' => 'capstone_header_cta_text',
			'label'    => esc_html__( 'Button Text', 'capstone-pro' ),
			'default' 	  => esc_html__( 'Add Listing', 'capstone-pro' ),
			'section'  => 'capstone_header_cta_module',
			'description' => esc_html__('Enter some text for your CTA button.', 'capstone-pro'),
		) );

		// OPTION: Image Field
		Kirki::add_field( 'capstone_header_cta_icon', array(
			'type'        => 'image',
			'settings'    => 'capstone_header_cta_icon',
			'label'       => esc_html__( 'Button Icon', 'capstone-pro' ),
			'description' => esc_html__('Upload custom icon for CTA button.', 'capstone-pro'),
			'section'     => 'capstone_header_cta_module',
			'default' 	  => get_template_directory_uri() .'/images/dashboard.svg',
		) );
		
	}