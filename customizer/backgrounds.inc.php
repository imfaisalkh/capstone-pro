<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Background Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_background_settings' );

	function capstone_customize_background_settings() {

		// PANEL: Background Settings
		Kirki::add_panel( 'capstone_background_settings', array(
			'title'       => esc_html__( 'Background Settings', 'capstone' ),
            'description'    => esc_html__( 'This section configure different background for the theme.', 'capstone' ),
            'priority'       => 80,
        ) );

		// SECTION: Site Body
		Kirki::add_section( 'capstone_background_settings_site_body', array(
            'title'          => esc_html__( 'Main Body', 'capstone' ),
            'description'    => esc_html__( 'This section configure different background for the body area.', 'capstone' ),
            'panel'          => 'capstone_background_settings',
        ) );

		// OPTION: Image Field
        Kirki::add_field( 'capstone_site_bg_top_left', array(
            'type'        => 'image',
            'settings'    => 'capstone_site_bg_top_left',
            'label'       => esc_html__( 'Top Left - Background Image', 'capstone' ),
            'description' => esc_html__('It will appear on top left corner of your front-end site.', 'capstone'),
            'section'     => 'capstone_background_settings_site_body',
            'default' 	  => get_template_directory_uri() .'/images/site-top-left-bg.png',
        ) );

		// OPTION: Image Field
        Kirki::add_field( 'capstone_site_bg_top_right', array(
            'type'        => 'image',
            'settings'    => 'capstone_site_bg_top_right',
            'label'       => esc_html__( 'Top Right - Background Image', 'capstone' ),
            'description' => esc_html__('It will appear on top right corner of your front-end site.', 'capstone'),
            'section'     => 'capstone_background_settings_site_body',
            'default' 	  => get_template_directory_uri() .'/images/site-top-right-bg.png',
        ) );

		// OPTION: Image Field
        Kirki::add_field( 'capstone_site_bg_bottom_left', array(
            'type'        => 'image',
            'settings'    => 'capstone_site_bg_bottom_left',
            'label'       => esc_html__( 'Bottom Left - Background Image', 'capstone' ),
            'description' => esc_html__('It will appear on bottom left corner of your front-end site.', 'capstone'),
            'section'     => 'capstone_background_settings_site_body',
        ) );

		// OPTION: Image Field
        Kirki::add_field( 'capstone_site_bg_bottom_right', array(
            'type'        => 'image',
            'settings'    => 'capstone_site_bg_bottom_right',
            'label'       => esc_html__( 'Bottom Right - Background Image', 'capstone' ),
            'description' => esc_html__('It will appear on bottom right corner of your front-end site.', 'capstone'),
            'section'     => 'capstone_background_settings_site_body',
            'default' 	 => get_template_directory_uri() .'/images/site-bottom-right-bg.png',
        ) );

		// SECTION: Site Body
		Kirki::add_section( 'capstone_background_settings_off_canvas_menu', array(
            'title'          => esc_html__( 'Off-Canvas Menu', 'capstone' ),
            'description'    => esc_html__( 'This section configure background for the off-canvas menu.', 'capstone' ),
            'panel'          => 'capstone_background_settings',
        ) );

		// OPTION: Image Field
        Kirki::add_field( 'capstone_off_canvas_sidebar_bg', array(
            'type'        => 'image',
            'settings'    => 'capstone_off_canvas_sidebar_bg',
            'label'       => esc_html__( 'Off-Canvas Sidebar - Background Image', 'capstone' ),
            'description' => esc_html__('It will appear as background image of off-canvas sidebar.', 'capstone'),
            'section'     => 'capstone_background_settings_off_canvas_menu',
            'default' 	 => get_template_directory_uri() .'/images/site-top-left-bg.png',
        ) );

	}