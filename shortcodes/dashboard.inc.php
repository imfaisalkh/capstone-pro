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
            <p><?php echo esc_html($msgs_group[$msg_key]['welcome_msg']); ?></p>
        </div>
    <?php
    }

    add_shortcode('dashboard_welcome_msg', 'capstone_dashboard_welcome_msg');


#-------------------------------------------------------------------------------#
#  Dashboard Quick Links
#-------------------------------------------------------------------------------#


    function capstone_dashboard_quick_links() {
        include(locate_template( 'includes/dashboard-config.inc.php' ));

        // Theme_mod settings to check.
        $links_group = get_theme_mod( 'capstone_dashboard_quick_links_group' );
        $current_role = $user->roles[0]; // get current maximum role
    ?>
        <?php if ($links_group) { ?> 
            <div class="quick-links">
                <h4 class="title"><?php esc_html_e('Quick Links', 'capstone-pro'); ?></h4>
                <ul class="links-list">
                    <?php foreach ($links_group as $link) { ?>
                        <?php if ($current_role == $link['user_role'] || $current_role == 'administrator' || $link['user_role'] == 'allusers') { ?>
                            <li>
                                <a class="inner" href="<?php echo esc_url(get_permalink($link['url'])); ?>">
                                    <span class="icon"><img src="<?php echo wp_get_attachment_url($link['icon']); ?> " alt="<?php echo $link['label']; ?>"/></span>
                                    <span class="label"><?php echo $link['label']; ?></span>
                                </a>
                                <?php if ($link['caption']) { ?> 
                                    <span class="caption"><?php echo $link['caption']; ?></span>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    <?php
    }

    add_shortcode('dashboard_quick_links', 'capstone_dashboard_quick_links');
