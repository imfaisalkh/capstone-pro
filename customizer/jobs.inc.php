<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Jobs Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_jobs_settings' );

	function capstone_customize_jobs_settings() {

		// PANEL: Jobs
		Kirki::add_panel( 'capstone_jobs_settings', array(
			'priority'    => 50,
			'title'       => esc_html__( 'Jobs Settings', 'capstone-pro' ),
			'description' => esc_html__( 'This panels configures job archive and single job listing page settings.', 'capstone-pro' ),
		) );

		// SECTION: Jobs Master
		Kirki::add_section( 'capstone_jobs_master_page', array(
			'title'          => esc_html__( 'Master Page', 'capstone-pro' ),
			'description'    => esc_html__( 'This section configures jobs master listing page.', 'capstone-pro' ),
			'panel'          => 'capstone_jobs_settings',
			'priority'       => 10,
		) );

		// OPTION: Jobs Master --> Google Maps
		Kirki::add_field( 'capstone_jobs_enable_map', array(
			'type'        => 'checkbox',
			'settings'    => 'capstone_jobs_enable_map',
			'label'       => esc_html__( 'Enable Maps', 'capstone-pro' ),
			'description' => esc_html__( 'Check this to enable maps on jobs archive page. Also make sure that map is configured properly.', 'capstone-pro' ),
			'section'     => 'capstone_jobs_master_page',
			'default'     => false,
		) );

		// OPTION: Jobs Detail --> Sidebar Order
		Kirki::add_field( 'capstone_jobs_sidebar_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_jobs_sidebar_order',
			'label'       => __( 'Sidebar Order', 'capstone-pro' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of job archive sidebar.', 'capstone-pro' ),
			'section'     => 'capstone_jobs_master_page',
			'default'     => array(
				'search_module',
				'native_widgets',
				'filters_module',
				'alert_module',
			),
			'choices'     => array(
				'search_module' => esc_html__( 'Search Module', 'capstone-pro' ),
				'filters_module' => esc_html__( 'Filters Module', 'capstone-pro' ),
				// 'filters_module_facetwp' => esc_html__( 'Filters Module - FacetWP', 'capstone-pro' ),
				'alert_module' => esc_html__( 'Alert Module', 'capstone-pro' ),
				'native_widgets' => esc_html__( 'Native Widgets', 'capstone-pro' ),
			),
		) );

		// OPTION: Jobs Master --> Filter Order
		// Kirki::add_field( 'capstone_jobs_filters_order_facetwp', array(
		// 	'type'        => 'sortable',
		// 	'settings'    => 'capstone_jobs_filters_order_facetwp',
		// 	'label'       => __( 'Filters Order - FacetWP', 'capstone-pro' ),
		// 	'description'    => esc_html__( 'Change the order and visibility (at global level) of FacetWP filters.', 'capstone-pro' ),
		// 	'section'     => 'capstone_jobs_master_page',
		// 	'default'     => array(),
		// 	'choices'     => array(
		// 		'job_types' => esc_html__( 'Location Proximity', 'capstone-pro' ),
		// 		'job_tags' => esc_html__( 'Another Filter', 'capstone-pro' ),
		// 		'job_salary_range' => esc_html__( 'Awesome Filter', 'capstone-pro' ),
		// 	),
		// ) );

		// OPTION: Jobs Master --> Filter Order
		Kirki::add_field( 'capstone_jobs_filters_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_jobs_filters_order',
			'label'       => __( 'Filters Order', 'capstone-pro' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of different filters within "Filters Module".', 'capstone-pro' ),
			'section'     => 'capstone_jobs_master_page',
			'default'     => array(
				'job_types',
				'job_tags',
				// 'job_salary_range'
			),
			'choices'     => array(
				'job_types' => esc_html__( 'Job Types', 'capstone-pro' ),
				'job_tags' => esc_html__( 'Job Tags', 'capstone-pro' ),
				// 'job_salary_range' => esc_html__( 'Salary Range', 'capstone-pro' ),
			),
		) );

		// OPTION: Jobs Master --> Filter Breakpoint
		Kirki::add_field( 'capstone_jobs_filters_breakpoint', array(
			'type'        => 'number',
			'settings'    => 'capstone_jobs_filters_breakpoint',
			'label'       => esc_html__( 'Filters Breakpoint', 'capstone-pro' ),
			'description'    => esc_html__( 'How many filters to show before "More Filters" button.', 'capstone-pro' ),
			'section'     => 'capstone_jobs_master_page',
			'default'     => 3,
			'choices'     => array(
				'min'  => 1,
				'max'  => 100,
				'step' => 1,
			),
		) );

		// SECTION: Job Detail
		Kirki::add_section( 'capstone_jobs_detail_page', array(
			'title'          => esc_html__( 'Detail Page', 'capstone-pro' ),
			'description'    => esc_html__( 'This section configures job detail page.', 'capstone-pro' ),
			'panel'          => 'capstone_jobs_settings',
			'priority'       => 20,
		) );

		// OPTION: Jobs Detail --> Content Order
		Kirki::add_field( 'capstone_jobs_single_content_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_jobs_single_content_order',
			'label'       => __( 'Content Order', 'capstone-pro' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of job listing content.', 'capstone-pro' ),
			'section'     => 'capstone_jobs_detail_page',
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
		Kirki::add_field( 'capstone_jobs_single_sidebar_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_jobs_single_sidebar_order',
			'label'       => __( 'Sidebar Order', 'capstone-pro' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of job listing sidebar.', 'capstone-pro' ),
			'section'     => 'capstone_jobs_detail_page',
			'default'     => array(
				'native_widgets',
				'company_profile',
				'listing_url',
				'similiar_jobs',
			),
			'choices'     => array(
				'native_widgets' => esc_html__( 'Native Widgets', 'capstone-pro' ),
				'company_profile' => esc_html__( 'Company Profile', 'capstone-pro' ),
				'listing_url' => esc_html__( 'Listing URL', 'capstone-pro' ),
				'similiar_jobs' => esc_html__( 'Similiar Jobs', 'capstone-pro' ),
			),
			'priority'    => 2,
		) );

		// OPTION: Number
		Kirki::add_field( 'capstone_jobs_single_meta_limit', array(
			'type'        => 'number',
			'settings'    => 'capstone_jobs_single_meta_limit',
			'label'       => __( 'Job Meta Limit', 'capstone-pro' ),
			'description'    => esc_html__( 'How many meta values to show before "see all" link?', 'capstone-pro' ),
			'section'     => 'capstone_jobs_detail_page',
			'default'     => '4',
			'priority'    => 4,
		) );

		// OPTION: Jobs Detail --> Sidebar Order
		Kirki::add_field( 'capstone_jobs_single_similiar_jobs_count', array(
			'type'        => 'number',
			'settings'    => 'capstone_jobs_single_similiar_jobs_count',
			'label'       => __( 'Similiar Jobs Count', 'capstone-pro' ),
			'description'    => esc_html__( 'How many (at max) similiar jobs to display in sidebar.', 'capstone-pro' ),
			'section'     => 'capstone_jobs_detail_page',
			'default'     => '3',
			'priority'    => 3,
		) );

		// SECTION: Job Detail
		Kirki::add_section( 'capstone_job_tags', array(
			'title'          => esc_html__( 'Job Tags', 'capstone-pro' ),
			'description'    => esc_html__( 'This section is only applicable if you have activated "WP Job Manager - Tags" add-on.', 'capstone-pro' ),
			'panel'          => 'capstone_jobs_settings',
			'priority'       => 30,
		) );

		// OPTION: Text Field
        Kirki::add_field( 'capstone_jobs_tags_title', array(
            'type'     => 'text',
            'settings' => 'capstone_jobs_tags_title',
            'label'    => __( 'Tags Title', 'capstone-pro' ),
			'section'  => 'capstone_job_tags',
			'default'   => esc_html__('Perks & Privilges', 'capstone-pro'),
            'description' => esc_html__('Job Tags would be represented with this title on the fron-end.', 'capstone-pro'),
		) );

		// OPTION: Textarea Field
        Kirki::add_field( 'capstone_jobs_tags_desc', array(
            'type'          => 'textarea',
            'settings'      => 'capstone_jobs_tags_desc',
            'label'         => __( 'Tags Descripion', 'capstone-pro' ),
			'section'       => 'capstone_job_tags',
			'default'   	=> esc_html__('This job listing offers following perks and privileges.', 'capstone-pro'),
            'description'   => esc_html__('This text would be displayed in detail job listing page as a small description.', 'capstone-pro'),
		) );

	}
