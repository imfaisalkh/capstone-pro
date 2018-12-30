<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Site Identity
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_site_identity_settings' );

	function capstone_customize_site_identity_settings() {

        // OPTION: Dashboard Logo
        Kirki::add_field( 'capstone_dashboard_logo', array(
            'type'        => 'image',
            'settings'    => 'capstone_dashboard_logo',
            'label'       => esc_html__( 'Dashboard Logo', 'capstone' ),
            'description' => esc_html__('If setup, it will appear in the employer and candidate dashboard.', 'capstone'),
            'section'     => 'title_tagline',
            'priority'    => 8,
        ) );

	}