<?php

function wp_roles_array() {
    $editable_roles = get_editable_roles();
    $roles = [];
    foreach ($editable_roles as $role => $details) {
        $roles[esc_attr($role)] = translate_user_role($details['name']);
    }
    return $roles;
}

#-------------------------------------------------------------------------------#
#  Theme Customizer - Dashboard Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_dashboard_settings' );

	function capstone_customize_dashboard_settings() {

        // PANEL: Dashboard Settings
		Kirki::add_panel( 'capstone_dashboard_settings', array(
			'priority'    => 75,
			'title'       => esc_html__( 'Dashboard Settings', 'capstone-pro' ),
			'description' => esc_html__( 'This panels define and configures dashboard template settings.', 'capstone-pro' ),
		) );

        // SECTION: Dashboard Pages
		Kirki::add_section( 'capstone_dashboard_pages', array(
            'title'          => esc_html__( 'Dashboard Pages', 'capstone-pro' ),
			'description'    => esc_html__( 'This section configures different dashboard pages.', 'capstone-pro' ),
            'panel'          => 'capstone_dashboard_settings',
        ) );

		// OPTION: Select Field
        Kirki::add_field( 'capstone_dashboard_main_page', array(
            'type'        => 'dropdown-pages',
            'settings'    => 'capstone_dashboard_main_page',
            'label'       => esc_html__( 'Dashboard Main Page', 'capstone-pro' ),
            'description' => esc_html__( 'This is the page where you are using `[dashboard_welcome_msg]` shortcode.', 'capstone-pro' ),
            'section'     => 'capstone_dashboard_pages',
        ) );

        // OPTION: Select Field
        Kirki::add_field( 'capstone_dashboard_manage_jobs_page', array(
            'type'        => 'dropdown-pages',
            'settings'    => 'capstone_dashboard_manage_jobs_page',
            'label'       => esc_html__( 'Manage Jobs Page', 'capstone-pro' ),
            'description' => esc_html__( 'This is the page where you are using `[job_dashboard]` shortcode.', 'capstone-pro' ),
            'section'     => 'capstone_dashboard_pages',
        ) );
        
        // OPTION: Select Field
        Kirki::add_field( 'capstone_dashboard_submit_job_page', array(
            'type'        => 'dropdown-pages',
            'settings'    => 'capstone_dashboard_submit_job_page',
            'label'       => esc_html__( 'Submit Job Page', 'capstone-pro' ),
            'description' => esc_html__( 'This is the page where you are using `[submit_job_form]` shortcode.', 'capstone-pro' ),
            'section'     => 'capstone_dashboard_pages',
        ) );

        // OPTION: Select Field
        Kirki::add_field( 'capstone_dashboard_manage_resumes_page', array(
            'type'        => 'dropdown-pages',
            'settings'    => 'capstone_dashboard_manage_resumes_page',
            'label'       => esc_html__( 'Manage Resumes Page', 'capstone-pro' ),
            'description' => esc_html__( 'This is the page where you are using `[candidate_dashboard]` shortcode.', 'capstone-pro' ),
            'section'     => 'capstone_dashboard_pages',
        ) );
        
        // OPTION: Select Field
        Kirki::add_field( 'capstone_dashboard_submit_resume_page', array(
            'type'        => 'dropdown-pages',
            'settings'    => 'capstone_dashboard_submit_resume_page',
            'label'       => esc_html__( 'Submit Resume Page', 'capstone-pro' ),
            'description' => esc_html__( 'This is the page where you are using `[submit_resume_form]` shortcode.', 'capstone-pro' ),
            'section'     => 'capstone_dashboard_pages',
        ) );

        // OPTION: Select Field
        Kirki::add_field( 'capstone_dashboard_manage_applications_page', array(
            'type'        => 'dropdown-pages',
            'settings'    => 'capstone_dashboard_manage_applications_page',
            'label'       => esc_html__( 'Manage Applications Page', 'capstone-pro' ),
            'description' => esc_html__( 'This is the page where you are using `[past_applications]` shortcode.', 'capstone-pro' ),
            'section'     => 'capstone_dashboard_pages',
        ) );

        // OPTION: Select Field
        Kirki::add_field( 'capstone_dashboard_manage_bookmarks_page', array(
            'type'        => 'dropdown-pages',
            'settings'    => 'capstone_dashboard_manage_bookmarks_page',
            'label'       => esc_html__( 'Manage Bookmarks Page', 'capstone-pro' ),
            'description' => esc_html__( 'This is the page where you are using `[my_bookmarks]` shortcode.', 'capstone-pro' ),
            'section'     => 'capstone_dashboard_pages',
        ) );

        // OPTION: Select Field
        Kirki::add_field( 'capstone_dashboard_manage_alerts_page', array(
            'type'        => 'dropdown-pages',
            'settings'    => 'capstone_dashboard_manage_alerts_page',
            'label'       => esc_html__( 'Manage Alerts Page', 'capstone-pro' ),
            'description' => esc_html__( 'This is the page where you are using `[job_alerts]` shortcode.', 'capstone-pro' ),
            'section'     => 'capstone_dashboard_pages',
        ) );

        // OPTION: Select Field
        Kirki::add_field( 'capstone_dashboard_manage_orders_page', array(
            'type'        => 'dropdown-pages',
            'settings'    => 'capstone_dashboard_manage_orders_page',
            'label'       => esc_html__( 'Manage Orders Page', 'capstone-pro' ),
            'description' => esc_html__( 'This is the page where you are using `[woocommerce_my_account]` shortcode.', 'capstone-pro' ),
            'section'     => 'capstone_dashboard_pages',
        ) );
        
        // SECTION: Welcome Messages
		Kirki::add_section( 'capstone_dashboard_welcome_msgs', array(
            'title'          => esc_html__( 'Welcome Messages', 'capstone-pro' ),
			'description' => esc_html__( 'This section defines welcome messages for the dashboard.', 'capstone-pro' ),
            'panel'          => 'capstone_dashboard_settings',
        ) );


        // OPTION: Repeater Field
        Kirki::add_field( 'capstone_dashboard_welcome_msgs_group', array(
            'type'        => 'repeater',
            'settings'    => 'capstone_dashboard_welcome_msgs_group',
            'label'       => esc_html__( 'Role Specific Messages', 'capstone-pro' ),
            'section'     => 'capstone_dashboard_welcome_msgs',
            'row_label' => array(
                'type'  => 'field',
                'value' => esc_html__('Message Group', 'capstone-pro' ),
                'field' => 'user_role',
            ),
            'button_label' => esc_html__('Add New Message', 'capstone-pro' ),
            'default'      => array(
                array(
                    'user_role' => 'administrator',
                    'welcome_msg'  => esc_html__( 'You are admin, you can do whatever you want.', 'capstone-pro' ),
                ),
                array(
                    'user_role' => 'employer',
                    'welcome_msg'  => esc_html__( 'From your account dashboard you can post new jobs and manage exisiting ones. Further, you can also manage your bookmark, job alerts and profile settings.', 'capstone-pro' ),
                ),
                array(
                    'user_role' => 'candidate',
                    'welcome_msg'  => esc_html__( 'From your account dashboard you can post new resumes and manage exisiting ones. Further, you can also manage your past applications, bookmark, job alerts and profile settings.', 'capstone-pro' ),
                ),
            ),
            'fields' => array(
                'user_role' => array(
                    'type'        => 'select',
                    'label'       => esc_html__( 'User Role', 'capstone-pro' ),
                    'description' => esc_html__( 'Choose a role for which you want to define a welcome message.', 'capstone-pro' ),
                    'choices'     => wp_roles_array(),
                ),
                'welcome_msg' => array(
                    'type'        => 'textarea',
                    'label'       => esc_html__( 'Welcome Message', 'capstone-pro' ),
                    'description' => esc_html__( 'Define welcome message for above selected role.', 'capstone-pro' ),
                    'default'     => '',
                ),
            )
        ) );
        
        
	}