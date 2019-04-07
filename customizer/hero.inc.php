<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Hero Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_hero_settings' );

	function capstone_customize_hero_settings() {

        // SECTION: Hero Settings
		Kirki::add_section( 'capstone_hero_settings', array(
			'priority'    => 30,
            'title'          => esc_html__( 'Hero Settings', 'capstone-pro' ),
            'description'    => esc_html__( 'This section configure some settings for the hero module.', 'capstone-pro' ),
        ) );

		// OPTION: Sortable
		Kirki::add_field( 'capstone_hero_jobs_search_module', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_hero_jobs_search_module',
			'label'       => __( 'Jobs Search Module', 'capstone' ),
			'description'    => esc_html__( 'Change the order and visibility (for hero module) of "Jobs Search Module" elements.', 'capstone' ),
			'section'     => 'capstone_hero_settings',
			'default'     => array(
				'keywords',
				'location',
			),
			'choices'     => array(
				'keywords' => esc_html__( 'Keywords', 'capstone' ),
				'location' => esc_html__( 'Location', 'capstone' ),
				'category' => esc_html__( 'Category', 'capstone' ),
				'type' => esc_html__( 'Types', 'capstone' ),
			),
		) );

		// OPTION: Sortable
		Kirki::add_field( 'capstone_hero_resumes_search_module', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_hero_resumes_search_module',
			'label'       => __( 'Resumes Search Module', 'capstone' ),
			'description'    => esc_html__( 'Change the order and visibility (for hero module) of "Resumes Search Module" elements.', 'capstone' ),
			'section'     => 'capstone_hero_settings',
			'default'     => array(
				'keywords',
				'location',
			),
			'choices'     => array(
				'keywords' => esc_html__( 'Keywords', 'capstone' ),
				'location' => esc_html__( 'Location', 'capstone' ),
			),
		) );

		// OPTION: Sortable
		Kirki::add_field( 'capstone_hero_companies_search_module', array(
			'type'        => 'sortable',
			'settings'    => 'capstone_hero_companies_search_module',
			'label'       => __( 'Companies Search Module', 'capstone' ),
			'description'    => esc_html__( 'Change the order and visibility (for hero module) of "Companies Search Module" elements.', 'capstone' ),
			'section'     => 'capstone_hero_settings',
			'default'     => array(
				'keywords',
				'location',
			),
			'choices'     => array(
				'keywords' => esc_html__( 'Keywords', 'capstone' ),
				'location' => esc_html__( 'Location', 'capstone' ),
			),
		) );        
		
	}