<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Social Networks
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_social_networks' );

	function capstone_customize_social_networks() {

        // PANEL: Dashboard Settings
		Kirki::add_panel( 'capstone_social_networks', array(
			'priority'    => 80,
			'title'       => esc_html__( 'Social Networks', 'capstone-pro' ),
            'description' => esc_html__( 'This section configure links to your social profiles, this could be used through out site.', 'capstone-pro' ),
		) );

		// SECTION: Social Networks
		Kirki::add_section( 'capstone_social_sharing', array(
            'title'          => esc_html__( 'Sharing Links', 'capstone-pro' ),
            'description'    => esc_html__( 'This section configure sharing links settings.', 'capstone-pro' ),
            'panel'          => 'capstone_social_networks',
        ) );

        Kirki::add_field( 'capstone_enable_social_sharing', array(
            'type'        => 'checkbox',
            'settings'    => 'capstone_enable_social_sharing',
            'label'       => esc_html__( 'Enable Social Sharing', 'capstone-pro' ),
            'description' => esc_html__( 'Do you want to enable social sharing links at the left hand side of the site?', 'capstone-pro' ),
            'section'     => 'capstone_social_sharing',
        ) );

        // OPTION: Select Field
        Kirki::add_field( 'capstone_enable_social_sharing', array(
            'type'        => 'select',
            'settings'    => 'capstone_enable_social_sharing',
            'label'       => __( 'Enable Social Sharing', 'capstone-pro' ),
            'description' => esc_html__( 'Please define if you want to enable social sharing links globally (i.e. through out site) or only to singular pages (i.e. single blog posts, single job listing etc).', 'capstone-pro' ),
            'section'     => 'capstone_social_sharing',
            'default'     => 'disable',
            'choices'     => array(
                'disable' => esc_html__( 'Disable', 'capstone-pro' ),
                'global' => esc_html__( 'Enable Globally', 'capstone-pro' ),
                'singular' => esc_html__( 'Enable on Singular Pages', 'capstone-pro' ),
            ),
        ) );
        
        // SECTION: Social Networks
		Kirki::add_section( 'capstone_social_profiles', array(
            'title'          => esc_html__( 'Social Profiles', 'capstone-pro' ),
            'description'    => esc_html__( 'This section configures links to your social profiles.', 'capstone-pro' ),
            'panel'          => 'capstone_social_networks',
        ) );

        // OPTION: Repeater Field
        Kirki::add_field( 'capstone_social_profiles_group', array(
            'type'        => 'repeater',
            'settings'    => 'capstone_social_profiles_group',
            'label'       => esc_html__( 'Profile Links', 'capstone-pro' ),
            'section'     => 'capstone_social_profiles',
            'row_label' => array(
                'type'  => 'field',
                'value' => esc_html__('Social Profile', 'capstone-pro' ),
                'field' => 'plateform',
            ),
            'button_label' => esc_html__('Add New Profile', 'capstone-pro' ),
            'default'      => array(),
            'fields' => array(
                'plateform' => array(
                    'type'        => 'select',
                    'label'       => esc_html__( 'Plateform', 'capstone-pro' ),
                    'description' => esc_html__( 'Choose a social media plateform for which you want to define your profile URL.', 'capstone-pro' ),
                    'choices'     => array(
                        '' => esc_html__( 'Choose Plateform', 'capstone-pro' ),
                        'fab fa-twitter' => esc_html__( 'Twitter', 'capstone-pro' ),
                        'fab fa-facebook-f' => esc_html__( 'Facebook', 'capstone-pro' ),
                        'fab fa-dribbble' => esc_html__( 'Dribbble', 'capstone-pro' ),
                        'fab fa-linkedin-in' => esc_html__( 'LinkedIn', 'capstone-pro' ),
                        'fab fa-instagram' => esc_html__( 'Instagram', 'capstone-pro' ),
                        'fab fa-pinterest' => esc_html__( 'Pinterest', 'capstone-pro' ),
                        'fab fa-yelp' => esc_html__( 'Yelp', 'capstone-pro' ),
                        'fab fa-google-plus-g' => esc_html__( 'Google Plus', 'capstone-pro' ),
                        'fab fa-tumblr' => esc_html__( 'Tumblr', 'capstone-pro' ),
                        'fab fa-youtube' => esc_html__( 'Youtube', 'capstone-pro' ),
                        'fab fa-vimeo' => esc_html__( 'Vimeo', 'capstone-pro' ),
                        'fab fa-soundcloud' => esc_html__( 'Soundcloud', 'capstone-pro' ),
                        'fas fa-rss' => esc_html__( 'RSS', 'capstone-pro' ),
                    ),
                ),
                'url' => array(
                    'type'        => 'text',
                    'label'       => esc_html__( 'Profile URL', 'capstone-pro' ),
                    'description' => esc_html__( 'Define URL for your above selected social media plateform.', 'capstone-pro' ),
                    'default'     => '',
                ),
            )
        ) );

	}