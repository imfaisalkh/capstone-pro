<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Color Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_color_settings' );

	function capstone_customize_color_settings() {

		// PANEL: Colors
		Kirki::add_panel( 'capstone_accent_colors', array(
			'title'       => esc_html__( 'Colors', 'capstone' ),
			'description' => esc_html__( 'This panels defines different accent colors for the theme.', 'capstone' ),
            'priority'    => 90,
        ) );

		// SECTION: Main Site
		Kirki::add_section( 'capstone_accent_colors_main_site', array(
            'title'          => esc_html__( 'Main Site', 'capstone' ),
            'description'    => esc_html__( 'Define colors for the main site.', 'capstone' ),
            'panel'          => 'capstone_accent_colors',
        ) );
        
		// OPTION: Main Site --> Primary Accent
        Kirki::add_field( 'capstone_primary_accent_color', array(
            'type'        => 'color',
            'settings'    => 'capstone_primary_accent_color',
            'label'       => __( 'Primary Accent Color', 'capstone' ),
            'section'     => 'capstone_accent_colors_main_site',
            'default'     => '#FA6800',
        ) );

		// OPTION: Main Site --> Secondary Accent
        Kirki::add_field( 'capstone_secondary_accent_color', array(
            'type'        => 'color',
            'settings'    => 'capstone_secondary_accent_color',
            'label'       => __( 'Secondary Accent Color', 'capstone' ),
            'section'     => 'capstone_accent_colors_main_site',
            'default'     => '#5786EC',
        ) );

		// OPTION: Main Site --> Tertiary Accent
        Kirki::add_field( 'capstone_tertiary_accent_color', array(
            'type'        => 'color',
            'settings'    => 'capstone_tertiary_accent_color',
            'label'       => __( 'Tertiary Accent Color', 'capstone' ),
            'section'     => 'capstone_accent_colors_main_site',
            'default'     => '#7BC44F',
        ) );

		// SECTION: Dashboard Site
		Kirki::add_section( 'capstone_accent_colors_dashboard_site', array(
            'title'          => esc_html__( 'Dashboard Site', 'capstone' ),
            'description'    => esc_html__( 'Define colors for the dashboard site.', 'capstone' ),
            'panel'          => 'capstone_accent_colors',
        ) );
        
		// OPTION: Dashboard Site --> Primary Accent
        Kirki::add_field( 'capstone_dashboard_primary_accent_color', array(
            'type'        => 'color',
            'settings'    => 'capstone_dashboard_primary_accent_color',
            'label'       => __( 'Primary Accent Color', 'capstone' ),
            'section'     => 'capstone_accent_colors_dashboard_site',
            'default'     => '#FA6800',
        ) );

		// OPTION: Dashboard Site --> Secondary Accent
        Kirki::add_field( 'capstone_dashboard_secondary_accent_color', array(
            'type'        => 'color',
            'settings'    => 'capstone_dashboard_secondary_accent_color',
            'label'       => __( 'Secondary Accent Color', 'capstone' ),
            'section'     => 'capstone_accent_colors_dashboard_site',
            'default'     => '#5786EC',
        ) );

		// OPTION: Dashboard Site --> Tertiary Accent
        Kirki::add_field( 'capstone_dashboard_tertiary_accent_color', array(
            'type'        => 'color',
            'settings'    => 'capstone_dashboard_tertiary_accent_color',
            'label'       => __( 'Tertiary Accent Color', 'capstone' ),
            'section'     => 'capstone_accent_colors_dashboard_site',
            'default'     => '#7BC44F',
        ) );




	}