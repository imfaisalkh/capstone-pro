<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Notification Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_notification_settings' );

	function capstone_customize_notification_settings() {

		// SECTION: Notification
		Kirki::add_section( 'capston_notification_settings', array(
            'title'          => esc_html__( 'Notification Settings', 'capstone' ),
            'description'    => esc_html__( 'This section configure settings for site notification.', 'capstone' ),
            'priority'       => 75,
        ) );

		// OPTION: Notification --> Google Maps
		Kirki::add_field( 'capstone_notification_disable', array(
			'type'        => 'checkbox',
			'settings'    => 'capstone_notification_disable',
			'label'       => esc_html__( 'Disable Site Notification', 'capstone' ),
			'section'     => 'capston_notification_settings',
			'default'     => false,
		) );
        
		// OPTION: Notification --> Title
        Kirki::add_field( 'capstone_notification_title', array(
            'type'     => 'text',
            'settings' => 'capstone_notification_title',
            'label'    => __( 'Title', 'capstone' ),
            'section'  => 'capston_notification_settings',
        ) );

		// OPTION: Notification --> Content
        Kirki::add_field( 'capstone_notification_content', array(
            'type'          => 'textarea',
            'settings'      => 'capstone_notification_content',
            'label'         => __( 'Content', 'capstone' ),
            'section'       => 'capston_notification_settings',
            'description'   => esc_html__('You can use <br> tag or other HTML tags here.', 'capstone'),
        ) );

		// OPTION: Notification --> Title
        Kirki::add_field( 'capstone_notification_tooltip', array(
            'type'          => 'text',
            'settings'      => 'capstone_notification_tooltip',
            'label'         => __( 'Tooltip Text', 'capstone' ),
            'section'       => 'capston_notification_settings',
            'description'   => esc_html__('Displayed when you hover the notification icon.', 'capstone'),

        ) );

	}