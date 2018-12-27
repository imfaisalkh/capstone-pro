<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Social Networks
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_social_networks' );

	function capstone_customize_social_networks() {

		// SECTION: Blog
		Kirki::add_section( 'capstone_social_networks', array(
            'title'          => esc_html__( 'Social Networks', 'capstone' ),
            'description'    => esc_html__( 'This section configure links to your social profiles, this could be used through out site.', 'capstone' ),
            'priority'       => 80,
        ) );
        
		// OPTION: Link
        Kirki::add_field( 'capstone_facebook_profile', array(
            'type'     => 'link',
            'settings' => 'capstone_facebook_profile',
            'label'    => __( 'FaceBook', 'capstone' ),
            'section'  => 'capstone_social_networks',
        ) );

		// OPTION: Link
        Kirki::add_field( 'capstone_twitter_profile', array(
            'type'     => 'link',
            'settings' => 'capstone_twitter_profile',
            'label'    => __( 'Twitter', 'capstone' ),
            'section'  => 'capstone_social_networks',
        ) );

		// OPTION: Link
        Kirki::add_field( 'capstone_dribbble_profile', array(
            'type'     => 'link',
            'settings' => 'capstone_dribbble_profile',
            'label'    => __( 'Dribbble', 'capstone' ),
            'section'  => 'capstone_social_networks',
        ) );

		// OPTION: Link
        Kirki::add_field( 'capstone_linkedin_profile', array(
            'type'     => 'link',
            'settings' => 'capstone_linkedin_profile',
            'label'    => __( 'LinkedIn', 'capstone' ),
            'section'  => 'capstone_social_networks',
        ) );        

		// OPTION: Link
        Kirki::add_field( 'capstone_instagram_profile', array(
            'type'     => 'link',
            'settings' => 'capstone_instagram_profile',
            'label'    => __( 'Instagram', 'capstone' ),
            'section'  => 'capstone_social_networks',
        ) );

		// OPTION: Link
        Kirki::add_field( 'capstone_pinterest_profile', array(
            'type'     => 'link',
            'settings' => 'capstone_pinterest_profile',
            'label'    => __( 'Pinterest', 'capstone' ),
            'section'  => 'capstone_social_networks',
        ) );        

		// OPTION: Link
        Kirki::add_field( 'capstone_bloglovin_profile', array(
            'type'     => 'link',
            'settings' => 'capstone_bloglovin_profile',
            'label'    => __( 'Bloglovin', 'capstone' ),
            'section'  => 'capstone_social_networks',
        ) );

		// OPTION: Link
        Kirki::add_field( 'capstone_google_plus_profile', array(
            'type'     => 'link',
            'settings' => 'capstone_google_plus_profile',
            'label'    => __( 'Google Plus', 'capstone' ),
            'section'  => 'capstone_social_networks',
        ) );     

		// OPTION: Link
        Kirki::add_field( 'capstone_tumblr_profile', array(
            'type'     => 'link',
            'settings' => 'capstone_tumblr_profile',
            'label'    => __( 'Tumblr', 'capstone' ),
            'section'  => 'capstone_social_networks',
        ) );  

		// OPTION: Link
        Kirki::add_field( 'capstone_youtube_profile', array(
            'type'     => 'link',
            'settings' => 'capstone_youtube_profile',
            'label'    => __( 'YouTube', 'capstone' ),
            'section'  => 'capstone_social_networks',
        ) );     

		// OPTION: Link
        Kirki::add_field( 'capstone_vimeo_profile', array(
            'type'     => 'link',
            'settings' => 'capstone_vimeo_profile',
            'label'    => __( 'Vimeo', 'capstone' ),
            'section'  => 'capstone_social_networks',
        ) );  

		// OPTION: Link
        Kirki::add_field( 'capstone_sound_cloud_profile', array(
            'type'     => 'link',
            'settings' => 'capstone_sound_cloud_profile',
            'label'    => __( 'Sound Cloud', 'capstone' ),
            'section'  => 'capstone_social_networks',
        ) );     

		// OPTION: Link
        Kirki::add_field( 'capstone_rss_url', array(
            'type'     => 'link',
            'settings' => 'capstone_rss_url',
            'label'    => __( 'RSS URL', 'capstone' ),
            'section'  => 'capstone_social_networks',
            'default'  => get_bloginfo('rss_url'),
        ) );

	}