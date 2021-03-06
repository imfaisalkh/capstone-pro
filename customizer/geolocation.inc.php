<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Geolocation Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_geolocation_settings' );

	function capstone_customize_geolocation_settings() {

		// SECTION: Geolocation
		Kirki::add_section( 'capstone_geolocation_settings', array(
            'title'          => esc_html__( 'Geolocation Settings', 'capstone-pro' ),
            'description'    => esc_html__( 'This section configure settings for the geolocation elements.', 'capstone-pro' ),
            'priority'       => 70,
        ) );

        // OPTION: Dropdown Field
        Kirki::add_field( 'capstone_geolocation_method', array(
            'type'        => 'select',
            'settings'    => 'capstone_geolocation_method',
            'label'       => __( 'Geolocation Method', 'capstone-pro' ),
            'section'     => 'capstone_geolocation_settings',
            'default'     => 'html',
            'choices'     => array(
                'ip' => esc_html__( 'IP to Geolocation', 'capstone-pro' ),
                'html' => esc_html__( 'HTML 5 Geolocation API', 'capstone-pro' ),
            ),
            'description' => esc_html__('Choose how to calculate geolocation for the "location" field.', 'capstone-pro'),
        ) );

        // OPTION: Dropdown Field
        Kirki::add_field( 'capstone_geolocation_location_mask', array(
            'type'     => 'text',
            'settings'    => 'capstone_geolocation_location_mask',
            'label'       => __( 'Location Field Mask', 'capstone-pro' ),
            'section'     => 'capstone_geolocation_settings',
            'default'     => '${city}, ${country}',
            'description' => esc_html__('You can use ${city}, ${region} and ${country} as mask variables.', 'capstone-pro'),
        ) );

		// OPTION: IPDATA API Key
        Kirki::add_field( 'capstone_geolocation_api_key', array(
            'type'     => 'text',
            'settings' => 'capstone_geolocation_api_key',
            'label'    => __( 'IPData.co API Key', 'capstone-pro' ),
            'section'  => 'capstone_geolocation_settings',
            'description' => esc_html__('Enter "ipdata.co" API key here for ip to auto-location to work.', 'capstone-pro'),
        ) );

        // OPTION: MAPBOX ACCESS TOKEN
        Kirki::add_field( 'capstone_mapbox_access_token', array(
            'type'     => 'text',
            'settings' => 'capstone_mapbox_access_token',
            'label'    => __( 'Mapbox Access Token', 'capstone-pro' ),
            'section'  => 'capstone_geolocation_settings',
            'description' => esc_html__('Get FREE token for your mapbox account and paste it here.', 'capstone-pro'),
        ) );

		// OPTION: DEFAULT COORDINATES
        Kirki::add_field( 'capstone_map_default_coordinates', array(
            'type'     => 'text',
            'settings' => 'capstone_map_default_coordinates',
            'label'    => __( 'Map Default Location', 'capstone-pro' ),
            'default'    => '-0.12775829999998223, 51.5073509',
            'section'  => 'capstone_geolocation_settings',
            'description' => esc_html__('Default GPS coordinates (latitude, longitude). Get them from here.', 'capstone-pro'),
        ) );

        // OPTION: Number Field
		Kirki::add_field( 'capstone_map_default_zoom', array(
			'type'        => 'number',
			'settings'    => 'capstone_map_default_zoom',
			'label'       => __( 'Map Default Zoom', 'capstone-pro' ),
			'description'    => esc_html__( 'This defines the map zoom level.', 'capstone-pro' ),
			'section'     => 'capstone_geolocation_settings',
			'default'     => 5,
		) );

	}