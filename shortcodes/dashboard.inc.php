<?php

#-------------------------------------------------------------------------------#
#  Dashboard Welcome Message
#-------------------------------------------------------------------------------#

    function capstone_dashboard_welcome_msg() {
        include(locate_template( 'includes/dashboard-config.inc.php' ));
        
        $defaults = array(
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
        );
        
        // Theme_mod settings to check.
        $msgs_group = get_theme_mod( 'capstone_dashboard_welcome_msgs_group', $defaults );
        $current_role = $user->roles[0]; // get current maximum role
        $msg_key = array_search($current_role, array_column($msgs_group, 'user_role'));
    ?>
        <div class="message-box">
            <h4><?php esc_html_e('Hello', 'capstone-pro'); ?> <span><?php echo esc_html($user->display_name); ?></span>,</h4>
            <p><?php echo $msgs_group[$msg_key]['welcome_msg']; ?></p>
        </div>
    <?php
    }

    add_shortcode('dashboard_welcome_msg', 'capstone_dashboard_welcome_msg');