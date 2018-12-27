<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Blog Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_blog_settings' );

	function capstone_customize_blog_settings() {

		// SECTION: Blog
		Kirki::add_section( 'capstone_blog_settings', array(
            'title'          => esc_html__( 'Blog Settings', 'capstone' ),
            'description'    => esc_html__( 'This section configure settings for the site blog.', 'capstone' ),
            'priority'       => 30,
        ) );

		// OPTION: Blog --> Blog Layout
        Kirki::add_field( 'capstone_blog_layout', array(
            'type'        => 'select',
            'settings'    => 'capstone_blog_layout',
            'label'       => __( 'Blog Layout', 'capstone' ),
            'section'     => 'capstone_blog_settings',
            'default'     => 'traditional',
            'choices'     => array(
                'traditional' => esc_html__( 'Traditional', 'capstone' ),
                'magazine' => esc_html__( 'Magazine', 'capstone' ),
            ),
        ) );

		// OPTION: Blog --> Blog Pagination
        Kirki::add_field( 'capstone_blog_pagination', array(
            'type'        => 'select',
            'settings'    => 'capstone_blog_pagination',
            'label'       => __( 'Blog Pagination', 'capstone' ),
            'section'     => 'capstone_blog_settings',
            'default'     => 'infinite-scroll',
            'choices'     => array(
                'numbered' => esc_html__( 'Numbered', 'capstone' ),
                'infinite-scroll' => esc_html__( 'Infinite Scroll', 'capstone' ),
            ),
        ) );

	}