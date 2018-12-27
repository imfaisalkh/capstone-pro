<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - Footer Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_footer_settings' );

	function capstone_customize_footer_settings() {

		// PANEL: Footer
		Kirki::add_panel( 'capstone_footer_settings', array(
			'priority'    => 70,
			'title'       => esc_html__( 'Footer Settings', 'capstone' ),
			'description' => esc_html__( 'This panels define and configures site footer settings.', 'capstone' ),
		) );

		// SECTION: Text Widget # 1
		Kirki::add_section( 'capstone_footer_text_widget_1', array(
            'title'          => esc_html__( 'Text Widget # 1', 'capstone' ),
            'description'    => esc_html__( 'This section configures first text block in the footer.', 'capstone' ),
            'panel'          => 'capstone_footer_settings',
        ) );
        
		// OPTION: Text Block # 1 --> Title
        Kirki::add_field( 'capstone_footer_text_widget_1_title', array(
            'type'     => 'text',
            'settings' => 'capstone_footer_text_widget_1_title',
            'label'    => __( 'Title', 'capstone' ),
            'section'  => 'capstone_footer_text_widget_1',
            'default'    => __( 'Say Hello', 'capstone' ),
        ) );

		// OPTION: Text Widget # 1 --> Content
        Kirki::add_field( 'capstone_footer_text_widget_1_content', array(
            'type'     => 'textarea',
            'settings' => 'capstone_footer_text_widget_1_content',
            'label'    => __( 'Content', 'capstone' ),
            'section'  => 'capstone_footer_text_widget_1',
            'default'    => sprintf(__('Wants to get in touch? Lets boogie. %s', 'capstone'), '<a href="mailto:'. antispambot(get_option('admin_email')) .'">'. get_option('admin_email') .'</a>'),
        ) );

		// SECTION: Text Widget # 2
		Kirki::add_section( 'capstone_footer_text_widget_2', array(
            'title'          => esc_html__( 'Text Widget # 2', 'capstone' ),
            'description'    => esc_html__( 'This section configures second text block in the footer.', 'capstone' ),
            'panel'          => 'capstone_footer_settings',
		) );

		// OPTION: Text Block # 2 --> Title
        Kirki::add_field( 'capstone_footer_text_widget_2_title', array(
            'type'     => 'text',
            'settings' => 'capstone_footer_text_widget_2_title',
            'label'    => __( 'Title', 'capstone' ),
            'section'  => 'capstone_footer_text_widget_2',
        ) );

		// OPTION: Text Block # 2 --> Content
        Kirki::add_field( 'capstone_footer_text_widget_2_content', array(
            'type'     => 'textarea',
            'settings' => 'capstone_footer_text_widget_2_content',
            'label'    => __( 'Content', 'capstone' ),
            'section'  => 'capstone_footer_text_widget_2',
        ) );

        
		// SECTION: Copyright
		Kirki::add_section( 'capstone_footer_copyright', array(
            'title'          => esc_html__( 'Copyright Info', 'capstone' ),
            'description'    => esc_html__( 'This section defines copyright text.', 'capstone' ),
            'panel'          => 'capstone_footer_settings',
        ) );

		// OPTION: Copyright --> Copyright Text
        Kirki::add_field( 'capstone_footer_copyright_text', array(
            'type'     => 'textarea',
            'settings' => 'capstone_footer_copyright_text',
            'label'    => __( 'Copyright Text', 'capstone' ),
            'section'  => 'capstone_footer_copyright',
            'description'  => esc_html__( 'You can use <br> tag or some other HTML tags here.', 'capstone' ),
            'default'  => wp_kses_post(__( 'Made with <i class="material-icons">favorite_border</i> by wpscouts - &copy;  All rights reserved', 'capstone' )),
        ) );

	}