<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Companies Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_companies_settings' );

	function capstone_customize_companies_settings() {

		// PANEL: Jobs
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
            'description' => esc_html__( 'This is the page where you are using `[job_manager_companies]` shortcode.', 'capstone-pro' ),
            'section'     => 'capstone_companies_master_page',
        ) );

        // OPTION: Select Field
        Kirki::add_field( 'capstone_companies_jobs_excerpt', array(
            'type'        => 'select',
            'settings'    => 'capstone_companies_jobs_excerpt',
            'label'       => __( '"Open Positions" Excerpt', 'capstone-pro' ),
            'description' => esc_html__( 'Display a list of company-specific recent jobs?', 'capstone-pro' ),
            'section'     => 'capstone_companies_master_page',
            'default'     => 'enable',
            'choices'     => array(
                'enable' => esc_html__( 'Enable Excerpt', 'capstone-pro' ),
                'disable' => esc_html__( 'Disable Excerpt', 'capstone-pro' ),
            ),
        ) );

        // OPTION: Jobs Master --> Filter Breakpoint
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
        

		// SECTION: Job Detail
		Kirki::add_section( 'capstone_companies_detail_page', array(
			'title'          => esc_html__( 'Detail Page', 'capstone-pro' ),
			'description'    => esc_html__( 'This section configures job detail page.', 'capstone-pro' ),
			'panel'          => 'capstone_companies_settings',
			'priority'       => 20,
		) );

		// OPTION: Jobs Detail --> Content Order
		Kirki::add_field( 'capstone_companies_single_content_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_companies_single_content_order',
			'label'       => __( 'Content Order', 'capstone-pro' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of job listing content.', 'capstone-pro' ),
			'section'     => 'capstone_companies_detail_page',
			'default'     => array(
				'job_header',
				'job_meta',
				'job_desc',
				'job_tags',
				'job_actions',
			),
			'choices'     => array(
				'job_header' => esc_html__( 'Job Header', 'capstone-pro' ),
				'job_meta' => esc_html__( 'Job Meta', 'capstone-pro' ),
				'job_desc' => esc_html__( 'Jobs Description', 'capstone-pro' ),
				'job_tags' => esc_html__( 'Job Tags', 'capstone-pro' ),
				'job_actions' => esc_html__( 'Job Actions', 'capstone-pro' ),
			),
			'priority'    => 1,
		) );
		
		// OPTION: Jobs Detail --> Sidebar Order
		Kirki::add_field( 'capstone_companies_single_sidebar_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_companies_single_sidebar_order',
			'label'       => __( 'Sidebar Order', 'capstone-pro' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of job listing sidebar.', 'capstone-pro' ),
			'section'     => 'capstone_companies_detail_page',
			'default'     => array(
				'company_profile',
				'listing_url',
				'similiar_companies',
			),
			'choices'     => array(
				'company_profile' => esc_html__( 'Company Profile', 'capstone-pro' ),
				'listing_url' => esc_html__( 'Listing URL', 'capstone-pro' ),
				'similiar_companies' => esc_html__( 'Similiar Jobs', 'capstone-pro' ),
			),
			'priority'    => 2,
		) );

	}
