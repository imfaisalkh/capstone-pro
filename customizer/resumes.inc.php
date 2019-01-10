<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Resumes Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_resumes_settings' );

	function capstone_customize_resumes_settings() {

		// PANEL: Resumes Settings
		Kirki::add_panel( 'capstone_resumes_settings', array(
			'priority'    => 60,
			'title'       => esc_html__( 'Resumes Settings', 'capstone-pro' ),
			'description' => esc_html__( 'This panels configures resume archive and single resume listing page settings.', 'capstone-pro' ),
		) );

		// SECTION: Resumes Master
		Kirki::add_section( 'capstone_resumes_master_page', array(
			'title'          => esc_html__( 'Master Page', 'capstone-pro' ),
			'description'    => esc_html__( 'This section configures resumes master listing page.', 'capstone-pro' ),
			'panel'          => 'capstone_resumes_settings',
			'priority'       => 10,
		) );

		// OPTION: Resume Master --> Google Maps
		Kirki::add_field( 'capstone_resumes_enable_map', array(
			'type'        => 'checkbox',
			'settings'    => 'capstone_resumes_enable_map',
			'label'       => esc_html__( 'Enable Maps', 'capstone-pro' ),
			'description' => esc_html__( 'Check this to enable maps on resumes archive page. Also make sure that map is configured properly.', 'capstone-pro' ),
			'section'     => 'capstone_resumes_master_page',
			'default'     => false,
		) );

		// OPTION: Resumes Detail --> Sidebar Order
		Kirki::add_field( 'capstone_resumes_sidebar_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_resumes_sidebar_order',
			'label'       => __( 'Sidebar Order', 'capstone-pro' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of resume archive sidebar.', 'capstone-pro' ),
			'section'     => 'capstone_resumes_master_page',
			'default'     => array(
				'search_module',
				'filters_module',
			),
			'choices'     => array(
				'search_module' => esc_html__( 'Search Module', 'capstone-pro' ),
				'filters_module' => esc_html__( 'Filters Module', 'capstone-pro' ),
				'native_widgets' => esc_html__( 'Native Widgets', 'capstone-pro' ),
			),
		) );

		// OPTION: Resumes Master --> Filter Order
		Kirki::add_field( 'capstone_resumes_filters_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_resumes_filters_order',
			'label'       => __( 'Filters Order', 'capstone-pro' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of different filters within "Filters Module".', 'capstone-pro' ),
			'section'     => 'capstone_resumes_master_page',
			'default'     => array(
				'resume_tags',
			),
			'choices'     => array(
				'resume_tags' => esc_html__( 'Resume Tags', 'capstone-pro' ),
			),
		) );

		// OPTION: Resumes Master --> Filter Breakpoint
		Kirki::add_field( 'capstone_resumes_filters_breakpoint', array(
			'type'        => 'number',
			'settings'    => 'capstone_resumes_filters_breakpoint',
			'label'       => esc_html__( 'Filters Breakpoint', 'capstone-pro' ),
			'description'    => esc_html__( 'How many filters to show before "More Filters" button.', 'capstone-pro' ),
			'section'     => 'capstone_resumes_master_page',
			'default'     => 3,
			'choices'     => array(
				'min'  => 1,
				'max'  => 100,
				'step' => 1,
			),
		) );

		// SECTION: Resume Detail
		Kirki::add_section( 'capstone_resumes_detail_page', array(
			'title'          => esc_html__( 'Detail Page', 'capstone-pro' ),
			'description'    => esc_html__( 'This section configures resume detail page.', 'capstone-pro' ),
			'panel'          => 'capstone_resumes_settings',
			'priority'       => 20,
		) );

		// OPTION: Resumes Detail --> Content Order
		Kirki::add_field( 'capstone_resumes_single_content_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_resumes_single_content_order',
			'label'       => __( 'Content Order', 'capstone-pro' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of resume listing content.', 'capstone-pro' ),
			'section'     => 'capstone_resumes_detail_page',
			'default'     => array(
				'resume_header',
				'resume_meta',
				'resume_desc',
				'resume_tags',
				'resume_actions',
			),
			'choices'     => array(
				'resume_header' => esc_html__( 'Resume Header', 'capstone-pro' ),
				'resume_meta' => esc_html__( 'Resume Meta', 'capstone-pro' ),
				'resume_desc' => esc_html__( 'Resumes Description', 'capstone-pro' ),
				'resume_tags' => esc_html__( 'Resume Tags', 'capstone-pro' ),
				'resume_actions' => esc_html__( 'Resume Actions', 'capstone-pro' ),
			),
			'priority'    => 1,
		) );
		
		// OPTION: Resumes Detail --> Sidebar Order
		Kirki::add_field( 'capstone_resumes_single_sidebar_order', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_resumes_single_sidebar_order',
			'label'       => __( 'Sidebar Order', 'capstone-pro' ),
			'description'    => esc_html__( 'Change the order and visibility (at global level) of resume listing sidebar.', 'capstone-pro' ),
			'section'     => 'capstone_resumes_detail_page',
			'default'     => array(
				'candidate_profile',
				'listing_url',
				'similiar_resumes',
			),
			'choices'     => array(
				'candidate_profile' => esc_html__( 'Candidate Profile', 'capstone-pro' ),
				'listing_url' => esc_html__( 'Listing URL', 'capstone-pro' ),
				'similiar_resumes' => esc_html__( 'Similiar Resumes', 'capstone-pro' ),
			),
			'priority'    => 2,
		) );

		// OPTION: Number Field
		Kirki::add_field( 'capstone_resumes_single_similiar_resumes_count', array(
			'type'        => 'number',
			'settings'    => 'capstone_resumes_single_similiar_resumes_count',
			'label'       => __( 'Similiar Resumes Count', 'capstone-pro' ),
			'description'    => esc_html__( 'How many (at max) similiar resumes to display in sidebar.', 'capstone-pro' ),
			'section'     => 'capstone_resumes_detail_page',
			'default'     => '3',
			'priority'    => 3,
		) );

		// SECTION: Resume Tags
		Kirki::add_section( 'capstone_resume_tags', array(
			'title'          => esc_html__( 'Resume Tags', 'capstone-pro' ),
			'description'    => esc_html__( 'This section is only applicable if you have activated "WP Resume Manager - Tags" add-on.', 'capstone-pro' ),
			'panel'          => 'capstone_resumes_settings',
			'priority'       => 30,
		) );

		// OPTION: Text Field
        Kirki::add_field( 'capstone_resumes_tags_title', array(
            'type'     => 'text',
            'settings' => 'capstone_resumes_tags_title',
            'label'    => __( 'Tags Title', 'capstone-pro' ),
			'section'  => 'capstone_resume_tags',
			'default'   => esc_html__('Perks & Privilges', 'capstone-pro'),
            'description' => esc_html__('Resume Tags would be represented with this title on the fron-end.', 'capstone-pro'),
		) );

		// OPTION: Textarea Field
        Kirki::add_field( 'capstone_resumes_tags_desc', array(
            'type'          => 'textarea',
            'settings'      => 'capstone_resumes_tags_desc',
            'label'         => __( 'Tags Descripion', 'capstone-pro' ),
			'section'       => 'capstone_resume_tags',
			'default'   	=> esc_html__('This resume listing offers following perks and privileges.', 'capstone-pro'),
            'description'   => esc_html__('This text would be displayed in detail resume listing page as a small description.', 'capstone-pro'),
		) );

	}
