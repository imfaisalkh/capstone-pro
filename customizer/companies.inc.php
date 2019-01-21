<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Companies Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_companies_settings' );

	function capstone_customize_companies_settings() {

		// PANEL: Companies
		Kirki::add_panel( 'capstone_companies_settings', array(
			'priority'    => 65,
			'title'       => esc_html__( 'Companies Settings', 'capstone-pro' ),
			'description' => esc_html__( 'This panels configures companies master and detail listing page settings.', 'capstone-pro' ),
        ) );
        
        // SECTION: Companies Master
		Kirki::add_section( 'capstone_companies_master_page', array(
			'title'          => esc_html__( 'Master Page', 'capstone-pro' ),
			'description'    => esc_html__( 'This section configures companies master listing page.', 'capstone-pro' ),
			'panel'          => 'capstone_companies_settings',
			'priority'       => 10,
        ) );
        
        // OPTION: Select Field
        Kirki::add_field( 'capstone_companies_page_id', array(
            'type'        => 'dropdown-pages',
            'settings'    => 'capstone_companies_page_id',
            'label'       => esc_html__( 'Comapny Listings Page', 'capstone-pro' ),
            'description' => esc_html__( 'This is the page where you are using `[company_manager_companies]` shortcode.', 'capstone-pro' ),
            'section'     => 'capstone_companies_master_page',
        ) );

        // OPTION: Select Field
        Kirki::add_field( 'capstone_companies_jobs_excerpt', array(
            'type'        => 'select',
            'settings'    => 'capstone_companies_jobs_excerpt',
            'label'       => __( '"Open Positions" Excerpt', 'capstone-pro' ),
            'description' => esc_html__( 'Display a list of company-specific recent companys?', 'capstone-pro' ),
            'section'     => 'capstone_companies_master_page',
            'default'     => 'enable',
            'choices'     => array(
                'enable' => esc_html__( 'Enable Excerpt', 'capstone-pro' ),
                'disable' => esc_html__( 'Disable Excerpt', 'capstone-pro' ),
            ),
        ) );

        // OPTION: Companies Master --> Filter Breakpoint
		Kirki::add_field( 'capstone_companies_jobs_excerpt_limit', array(
			'type'        => 'number',
			'settings'    => 'capstone_companies_jobs_excerpt_limit',
			'label'       => esc_html__( 'Limit "Open Positions"', 'capstone-pro' ),
			'description'    => esc_html__( 'How many "Open Positions" to display, if enabled?', 'capstone-pro' ),
			'section'     => 'capstone_companies_master_page',
			'default'     => 2,
			'choices'     => array(
				'min'  => 1,
				'max'  => 100,
				'step' => 1,
			),
		) );
        

		// SECTION: Company Detail
		Kirki::add_section( 'capstone_companies_detail_page', array(
			'title'          => esc_html__( 'Detail Page', 'capstone-pro' ),
			'description'    => esc_html__( 'This section configures company detail page.', 'capstone-pro' ),
			'panel'          => 'capstone_companies_settings',
			'priority'       => 20,
		) );

		// OPTION: Companies Detail --> Content Order
		Kirki::add_field( 'capstone_companies_single_content_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_companies_single_content_order',
			'label'       => __( 'Content Order', 'capstone-pro' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of company listing content.', 'capstone-pro' ),
			'section'     => 'capstone_companies_detail_page',
			'default'     => array(
				'company_header',
				'company_meta',
				'company_desc',
				'company_positions',
				'company_actions',
			),
			'choices'     => array(
				'company_header' => esc_html__( 'Company Header', 'capstone-pro' ),
				'company_meta' => esc_html__( 'Company Meta', 'capstone-pro' ),
				'company_desc' => esc_html__( 'Companies Description', 'capstone-pro' ),
				'company_positions' => esc_html__( 'Company Positions', 'capstone-pro' ),
				'company_actions' => esc_html__( 'Company Actions', 'capstone-pro' ),
			),
			'priority'    => 1,
		) );
		
		// OPTION: Companies Detail --> Sidebar Order
		Kirki::add_field( 'capstone_companies_single_sidebar_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_companies_single_sidebar_order',
			'label'       => __( 'Sidebar Order', 'capstone-pro' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of company listing sidebar.', 'capstone-pro' ),
			'section'     => 'capstone_companies_detail_page',
			'default'     => array(
				'company_profile',
				'listing_url',
			),
			'choices'     => array(
				'company_profile' => esc_html__( 'Company Profile', 'capstone-pro' ),
				'listing_url' => esc_html__( 'Listing URL', 'capstone-pro' ),
			),
			'priority'    => 2,
		) );

	}
