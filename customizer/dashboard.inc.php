<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Dashboard Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_dashboard_settings' );

	function capstone_customize_dashboard_settings() {

        // PANEL: Dashboard Settings
		Kirki::add_panel( 'capstone_dashboard_settings', array(
			'priority'    => 75,
			'title'       => esc_html__( 'Dashboard Settings', 'capstone' ),
			'description' => esc_html__( 'This panels define and configures dashboard template settings.', 'capstone' ),
		) );

        // SECTION: Dashboard Pages
		Kirki::add_section( 'capstone_dashboard_pages', array(
            'title'          => esc_html__( 'Dashboard Pages', 'capstone' ),
			'description'    => esc_html__( 'This section configures different dashboard pages.', 'capstone' ),
            'panel'          => 'capstone_dashboard_settings',
        ) );

		// OPTION: Select Field
        Kirki::add_field( 'capstone_dashboard_main_page', array(
            'type'        => 'dropdown-pages',
            'settings'    => 'capstone_dashboard_main_page',
            'label'       => esc_html__( 'Dashboard Main Page', 'capstone' ),
            'section'     => 'capstone_dashboard_pages',
        ) );

        // SECTION: Welcome Messages
		Kirki::add_section( 'capstone_dashboard_welcome_msgs', array(
            'title'          => esc_html__( 'Welcome Messages', 'capstone' ),
			'description' => esc_html__( 'This section defines welcome messages for the dashboard.', 'capstone' ),
            'panel'          => 'capstone_dashboard_settings',
        ) );

        // OPTION: Text Area
        Kirki::add_field( 'capstone_dashboard_employer_welcome_msg', array(
            'type'     => 'textarea',
            'settings' => 'capstone_dashboard_employer_welcome_msg',
            'label'    => __( 'Welcome Message - Employer', 'capstone' ),
            'section'  => 'capstone_dashboard_welcome_msgs',
            'default'  => esc_html__( 'From your account dashboard you can post new jobs and manage exisiting ones. Further, you can also manage your bookmark, job alerts and profile settings.', 'capstone' ),
        ) );

        // OPTION: Text Area
        Kirki::add_field( 'capstone_dashboard_candidate_welcome_msg', array(
            'type'     => 'textarea',
            'settings' => 'capstone_dashboard_candidate_welcome_msg',
            'label'    => __( 'Welcome Message - Candidate', 'capstone' ),
            'section'  => 'capstone_dashboard_welcome_msgs',
            'default'  => esc_html__( 'From your account dashboard you can post new resumes and manage exisiting ones. Further, you can also manage your past applications, bookmark, job alerts and profile settings.', 'capstone' ),
        ) );

        // OPTION: Text Area
        Kirki::add_field( 'capstone_dashboard_others_welcome_msg', array(
            'type'     => 'textarea',
            'settings' => 'capstone_dashboard_others_welcome_msg',
            'label'    => __( 'Welcome Message - Others', 'capstone' ),
            'section'  => 'capstone_dashboard_welcome_msgs',
            'default'  => esc_html__( 'You are admin, you can do whatever you want.', 'capstone' ),
        ) );
        
	}