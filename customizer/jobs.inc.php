<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Jobs Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_jobs_settings' );

	function capstone_customize_jobs_settings() {

		// PANEL: Jobs
		Kirki::add_panel( 'capstone_jobs_settings', array(
			'priority'    => 50,
			'title'       => esc_html__( 'Jobs Settings', 'capstone' ),
			'description' => esc_html__( 'This panels configures job archive and single job listing page settings.', 'capstone' ),
		) );

		// SECTION: Jobs Master
		Kirki::add_section( 'capstone_jobs_master_page', array(
			'title'          => esc_html__( 'Master Page', 'capstone' ),
			'description'    => esc_html__( 'This section configures jobs master listing page.', 'capstone' ),
			'panel'          => 'capstone_jobs_settings',
			'priority'       => 10,
		) );

		// SECTION: Job Detail
		Kirki::add_section( 'capstone_jobs_detail_page', array(
			'title'          => esc_html__( 'Detail Page', 'capstone' ),
			'description'    => esc_html__( 'This section configures job detail page.', 'capstone' ),
			'panel'          => 'capstone_jobs_settings',
			'priority'       => 20,
		) );

		// OPTION: Jobs Master --> Google Maps
		Kirki::add_field( 'capstone_jobs_enable_gmap', array(
			'type'        => 'checkbox',
			'settings'    => 'capstone_jobs_enable_gmap',
			'label'       => esc_html__( 'Enable Google Maps', 'capstone' ),
			'description' => esc_html__( 'Check this to enable google maps on jobs archive page.', 'capstone' ),
			'section'     => 'capstone_jobs_master_page',
			'default'     => false,
		) );

		// OPTION: Jobs Detail --> Sidebar Order
		Kirki::add_field( 'capstone_jobs_sidebar_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_jobs_sidebar_order',
			'label'       => __( 'Sidebar Order', 'capstone' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of job archive sidebar.', 'capstone' ),
			'section'     => 'capstone_jobs_master_page',
			'default'     => array(
				'search_module',
				'filters_module',
				'alert_module',
			),
			'choices'     => array(
				'search_module' => esc_html__( 'Search Module', 'capstone' ),
				'filters_module' => esc_html__( 'Filters Module', 'capstone' ),
				// 'filters_module_facetwp' => esc_html__( 'Filters Module - FacetWP', 'capstone' ),
				'alert_module' => esc_html__( 'Alert Module', 'capstone' ),
				'native_widgets' => esc_html__( 'Native Widgets', 'capstone' ),
			),
		) );

		// OPTION: Jobs Master --> Filter Order
		// Kirki::add_field( 'capstone_jobs_filters_order_facetwp', array(
		// 	'type'        => 'sortable',
		// 	'settings'    => 'capstone_jobs_filters_order_facetwp',
		// 	'label'       => __( 'Filters Order - FacetWP', 'capstone' ),
		// 	'description'    => esc_html__( 'Change the order and visibility (at global level) of FacetWP filters.', 'capstone' ),
		// 	'section'     => 'capstone_jobs_master_page',
		// 	'default'     => array(),
		// 	'choices'     => array(
		// 		'job_types' => esc_html__( 'Location Proximity', 'capstone' ),
		// 		'job_tags' => esc_html__( 'Another Filter', 'capstone' ),
		// 		'job_salary_range' => esc_html__( 'Awesome Filter', 'capstone' ),
		// 	),
		// ) );

		// OPTION: Jobs Master --> Filter Order
		Kirki::add_field( 'capstone_jobs_filters_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_jobs_filters_order',
			'label'       => __( 'Filters Order', 'capstone' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of different filters within "Filters Module".', 'capstone' ),
			'section'     => 'capstone_jobs_master_page',
			'default'     => array(
				'job_types',
				'job_tags',
				// 'job_salary_range'
			),
			'choices'     => array(
				'job_types' => esc_html__( 'Job Types', 'capstone' ),
				'job_tags' => esc_html__( 'Job Tags', 'capstone' ),
				// 'job_salary_range' => esc_html__( 'Salary Range', 'capstone' ),
			),
		) );

		// OPTION: Jobs Master --> Filter Breakpoint
		Kirki::add_field( 'capstone_jobs_filters_breakpoint', array(
			'type'        => 'number',
			'settings'    => 'capstone_jobs_filters_breakpoint',
			'label'       => esc_html__( 'Filters Breakpoint', 'capstone' ),
			'description'    => esc_html__( 'How many filters to show before "More Filters" button.', 'capstone' ),
			'section'     => 'capstone_jobs_master_page',
			'default'     => 3,
			'choices'     => array(
				'min'  => 1,
				'max'  => 100,
				'step' => 1,
			),
		) );

		// OPTION: Jobs Detail --> Content Order
		Kirki::add_field( 'capstone_jobs_single_content_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_jobs_single_content_order',
			'label'       => __( 'Content Order', 'capstone' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of job listing content.', 'capstone' ),
			'section'     => 'capstone_jobs_detail_page',
			'default'     => array(
				'job_header',
				'job_meta',
				'job_desc',
				'job_tags',
				'job_actions',
			),
			'choices'     => array(
				'job_header' => esc_html__( 'Job Header', 'capstone' ),
				'job_meta' => esc_html__( 'Job Meta', 'capstone' ),
				'job_desc' => esc_html__( 'Jobs Description', 'capstone' ),
				'job_tags' => esc_html__( 'Job Tags', 'capstone' ),
				'job_actions' => esc_html__( 'Job Actions', 'capstone' ),
			),
			'priority'    => 1,
		) );
		
		// OPTION: Jobs Detail --> Sidebar Order
		Kirki::add_field( 'capstone_jobs_single_sidebar_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_jobs_single_sidebar_order',
			'label'       => __( 'Sidebar Order', 'capstone' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of job listing sidebar.', 'capstone' ),
			'section'     => 'capstone_jobs_detail_page',
			'default'     => array(
				'company_profile',
				'listing_url',
				'similiar_jobs',
			),
			'choices'     => array(
				'company_profile' => esc_html__( 'Company Profile', 'capstone' ),
				'listing_url' => esc_html__( 'Listing URL', 'capstone' ),
				'similiar_jobs' => esc_html__( 'Similiar Jobs', 'capstone' ),
			),
			'priority'    => 2,
		) );

		// OPTION: Jobs Detail --> Sidebar Order
		Kirki::add_field( 'capstone_jobs_single_similiar_jobs_count', array(
			'type'        => 'number',
			'settings'    => 'capstone_jobs_single_similiar_jobs_count',
			'label'       => __( 'Similiar Jobs Count', 'capstone' ),
			'description'    => esc_html__( 'How many (at max) similiar jobs to display in sidebar.', 'capstone' ),
			'section'     => 'capstone_jobs_detail_page',
			'default'     => '3',
			'priority'    => 3,
		) );

	}
