<?php

/*-----------------------------------------------------------------------------------*/
/*	Theme Customization Options
/*-----------------------------------------------------------------------------------*/
 
add_action( 'customize_register', 'capstone_customize_register' );

function capstone_customize_register($wp_customize) {

	$wp_customize->remove_section('colors');

	/*-----------------------------------------------------------------------------------*/
	/*	General Settings
	/*-----------------------------------------------------------------------------------*/

	// Add: Text Area
	$wp_customize->add_setting( 'capstone_dashboard_logo', array (
		'sanitize_callback' => 'custom_sanitize_textarea',
		'priority'   => 10,
	) );

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'capstone_dashboard_logo',
			array(
				'label'      => __( 'Dashboard Logo', 'capstone' ),
				'description' => esc_html__('If setup, it will appear in the employer and candidate dashboard.', 'capstone'),
				'section'    => 'title_tagline',
			)
		)
	);

	// Add: Text Field
    $wp_customize->add_setting( 'capstone_geolocation_api_key', array (
		'sanitize_callback' => 'custom_sanitize_textarea',
    ) );	

    $wp_customize->add_control('capstone_geolocation_api_key', array(
		'description' => esc_html__('Enter "ipdata.co" API key here for ip to auto-location to work.', 'capstone'),
	    'label'    => esc_html__('IPData.co API Key', 'capstone'),
	    'section'  => 'title_tagline',
	    'type'     => 'text',
	) );


	/*-----------------------------------------------------------------------------------*/
	/*	Blog Settings
	/*-----------------------------------------------------------------------------------*/

	// Add: Section
    $wp_customize->add_section( 'capstone_blog_settings', array(
	    'title'          => esc_html__( 'Blog Settings', 'capstone' ),
	    'priority'       => 50,
	) );

	// Add: Select Field
	$wp_customize->add_setting( 'capstone_blog_layout', array (
		'default' => 'traditional',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control('capstone_blog_layout', array(
		'label'    => esc_html__('Blog Layout', 'capstone'),
		'section'  => 'capstone_blog_settings',
		'type'     => 'select',
		'choices'  => array(
			'traditional'  => 'Traditional',
			'magazine'  => 'Magazine',
		),

	) );
	
	// Add: Select Field
	$wp_customize->add_setting( 'capstone_blog_pagination', array (
		'default' => 'infinite-scroll',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control('capstone_blog_pagination', array(
		'label'    => esc_html__('Blog Pagination', 'capstone'),
		'section'  => 'capstone_blog_settings',
		'type'     => 'select',
		'choices'  => array(
			'numbered'  => 'Numbered',
			'infinite-scroll'  => 'Infinite Scroll',
		),

	) );	


	/*-----------------------------------------------------------------------------------*/
	/*  Footer Settings
	/*-----------------------------------------------------------------------------------*/

	// Add: Section
	$wp_customize->add_section( 'capstone_footer_settings', array(
		'title'          => esc_html__( 'Footer Settings', 'capstone' ),
		'priority'       => 40,
	) );

	// Add: Text Field
	$wp_customize->add_setting( 'capstone_footer_copyright_title', array (
		'default' => esc_html__('Copyright', 'capstone'),
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control('capstone_footer_copyright_title', array(
		'label'       => esc_html__('Copyright Title', 'capstone'),
		'section'     => 'capstone_footer_settings',
	) );

	// Add: Text Area
	$wp_customize->add_setting( 'capstone_footer_copyright_text', array (
		'default' => wp_kses_post(__('2018 Capstone Theme <br> Crafted by Faisal Khurshid', 'capstone')),
		'sanitize_callback' => 'custom_sanitize_textarea',
	) );  

	$wp_customize->add_control('capstone_footer_copyright_text', array(
		'label'       => esc_html__('Copyright Text', 'capstone'),
		'description'   => esc_html__('You can use <br> tag or other HTML tags here.', 'capstone'),
		'section'     => 'capstone_footer_settings',
		'type'        => 'textarea',
	) );

	// Add: Text Field
	$wp_customize->add_setting( 'capstone_footer_contact_title', array (
		'default' => esc_html__('Say Hello', 'capstone'),
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control('capstone_footer_contact_title', array(
		'label'       => esc_html__('Contact Title', 'capstone'),
		'section'     => 'capstone_footer_settings',
	) );

	// Add: Text Area
	$wp_customize->add_setting( 'capstone_footer_contact_text', array (
		'default' => sprintf(__('Wants to get in touch? Lets boogie. %s', 'capstone'), '<a href="mailto:'. antispambot(get_option('admin_email')) .'">'. get_option('admin_email') .'</a>'),
		'sanitize_callback' => 'custom_sanitize_textarea',
	) );  

	$wp_customize->add_control('capstone_footer_contact_text', array(
		'label'       => esc_html__('Contact Text', 'capstone'),
		'description'   => esc_html__('You can use <br> tag or other HTML tags here.', 'capstone'),
		'section'     => 'capstone_footer_settings',
		'type'        => 'textarea',
	) );




	/*-----------------------------------------------------------------------------------*/
	/*  Global Notification
	/*-----------------------------------------------------------------------------------*/

	// Add: Section
	$wp_customize->add_section( 'capstone_global_notification', array(
		'title'          => esc_html__( 'Global Notification', 'capstone' ),
		'priority'       => 40,
	) );


	// Add: Checkbox
	$wp_customize->add_setting( 'capstone_notification_disable', array (
		'default' => false,
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control('capstone_notification_disable', array(
		'label'    => esc_html__('Disable Site Notification', 'capstone'),
		'section'  => 'capstone_global_notification',
		'type'     => 'checkbox',
	) );

	// Add: Text Field
	$wp_customize->add_setting( 'capstone_notification_title', array (
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control('capstone_notification_title', array(
		'label'       => esc_html__('Title', 'capstone'),
		'section'     => 'capstone_global_notification',
	) );

	// Add: Text Area
	$wp_customize->add_setting( 'capstone_notification_content', array (
		'sanitize_callback' => 'custom_sanitize_textarea',
	) );  

	$wp_customize->add_control('capstone_notification_content', array(
		'label'       => esc_html__('Content', 'capstone'),
		'description'   => esc_html__('You can use <br> tag or other HTML tags here.', 'capstone'),
		'section'     => 'capstone_global_notification',
		'type'        => 'textarea',
	) );

	// Add: Text Field
	$wp_customize->add_setting( 'capstone_notification_tooltip', array (
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control('capstone_notification_tooltip', array(
		'label'       => esc_html__('Tooltip Text', 'capstone'),
		'description'   => esc_html__('Displayed when you hover the notification icon.', 'capstone'),
		'section'     => 'capstone_global_notification',
	) );


	/*-----------------------------------------------------------------------------------*/
	/*	Social Networks
	/*-----------------------------------------------------------------------------------*/
	
	// Add: Section
    $wp_customize->add_section( 'capstone_social_networks', array(
	    'title'          => esc_html__( 'Social Networks', 'capstone' ),
	    'priority'       => 50,
	) );

	// Add: Checkbox
	$wp_customize->add_setting( 'capstone_enable_social_sharing', array (
		'default' => false,
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control('capstone_enable_social_sharing', array(
		'label'    => esc_html__('Enable Social Sharing Links', 'capstone'),
		'section'  => 'capstone_social_networks',
		'type'     => 'checkbox',
	) );


	// Add: Text Field
    $wp_customize->add_setting( 'capstone_facebook_profile', array (
		'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control('capstone_facebook_profile', array(
	    'label'    => esc_html__('FaceBook', 'capstone'),
	    'section'  => 'capstone_social_networks',
	) );
	
	// Add: Text Field
    $wp_customize->add_setting( 'capstone_twitter_profile', array (
		'sanitize_callback' => 'esc_url_raw',
    ) );	
    
    $wp_customize->add_control('capstone_twitter_profile', array(
	    'label'    => esc_html__('Twitter', 'capstone'),
	    'section'  => 'capstone_social_networks',
	) );

	// Add: Text Field
    $wp_customize->add_setting( 'capstone_dribbble_profile', array (
		'sanitize_callback' => 'esc_url_raw',
    ) );	
    
    $wp_customize->add_control('capstone_dribbble_profile', array(
	    'label'    => esc_html__('Dribbble', 'capstone'),
	    'section'  => 'capstone_social_networks',
	) );

	// Add: Text Field
    $wp_customize->add_setting( 'capstone_linkedin_profile', array (
		'sanitize_callback' => 'esc_url_raw',
    ) );	
    
    $wp_customize->add_control('capstone_linkedin_profile', array(
	    'label'    => esc_html__('LinkedIn', 'capstone'),
	    'section'  => 'capstone_social_networks',
	) );

	// Add: Text Field
    $wp_customize->add_setting( 'capstone_instagram_profile', array (
		'sanitize_callback' => 'esc_url_raw',
    ) );	
    
    $wp_customize->add_control('capstone_instagram_profile', array(
	    'label'    => esc_html__('Instagram', 'capstone'),
	    'section'  => 'capstone_social_networks',
	) );

	// Add: Text Field
    $wp_customize->add_setting( 'capstone_pinterest_profile', array (
		'sanitize_callback' => 'esc_url_raw',
    ) );	
    
    $wp_customize->add_control('capstone_pinterest_profile', array(
	    'label'    => esc_html__('Pinterest', 'capstone'),
	    'section'  => 'capstone_social_networks',
	) );	

	// Add: Text Field
    $wp_customize->add_setting( 'capstone_bloglovin_profile', array (
		'sanitize_callback' => 'esc_url_raw',
    ) );	
    
    $wp_customize->add_control('capstone_bloglovin_profile', array(
	    'label'    => esc_html__('Bloglovin', 'capstone'),
	    'section'  => 'capstone_social_networks',
	) );	

	// Add: Text Field
    $wp_customize->add_setting( 'capstone_google_plus_profile', array (
		'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control('capstone_google_plus_profile', array(
	    'label'    => esc_html__('Google Plus', 'capstone'),
	    'section'  => 'capstone_social_networks',
	) );

	// Add: Text Field
    $wp_customize->add_setting( 'capstone_tumblr_profile', array (
		'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control('capstone_tumblr_profile', array(
	    'label'    => esc_html__('Tumblr', 'capstone'),
	    'section'  => 'capstone_social_networks',
	) );

	// Add: Text Field
    $wp_customize->add_setting( 'capstone_youtube_profile', array (
		'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control('capstone_youtube_profile', array(
	    'label'    => esc_html__('YouTube', 'capstone'),
	    'section'  => 'capstone_social_networks',
	) );

	// Add: Text Field
    $wp_customize->add_setting( 'capstone_vimeo_profile', array (
		'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control('capstone_vimeo_profile', array(
	    'label'    => esc_html__('Vimeo', 'capstone'),
	    'section'  => 'capstone_social_networks',
	) );	

	// Add: Text Field
    $wp_customize->add_setting( 'capstone_sound_cloud_profile', array (
		'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control('capstone_sound_cloud_profile', array(
	    'label'    => esc_html__('Sound Cloud', 'capstone'),
	    'section'  => 'capstone_social_networks',
	) );	

	// Add: Text Field
    $wp_customize->add_setting( 'capstone_rss_url', array (
	    'default' => get_bloginfo('rss_url'),
		'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control('capstone_rss_url', array(
	    'label'    => esc_html__('RSS URL', 'capstone'),
	    'section'  => 'capstone_social_networks',
	    'type'     => 'url',
	) );


} 


/*-----------------------------------------------------------------------------------*/
/*	Custom Sanitization Function(s)
/*-----------------------------------------------------------------------------------*/

	// Sanitize: Text Area
	function custom_sanitize_textarea( $input ) {
		return wp_kses_post( $input );
	}

	// Sanitize: Drop Down Pages
	function custom_sanitize_dropdown_pages( $page_id, $setting ) {
		// Ensure $input is an absolute integer.
		$page_id = absint( $page_id );

		// If $page_id is an ID of a published page, return it; otherwise, return the default.
		return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}