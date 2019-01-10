<?php

#-------------------------------------------------------------------------------#
#  Add Envato CTA button
#-------------------------------------------------------------------------------#

    function capstone_envato_cta_button() {
        echo '<a href="#" class="page-control envato-cta">Buy Capstone on <img src="'. esc_url( get_template_directory_uri() ) .'/images/envato-logo.png" /></a>';
    }

    // add_action('capstone_page_controls', 'capstone_envato_cta_button');


#-------------------------------------------------------------------------------#
#  Add Social Sharing Links
#-------------------------------------------------------------------------------#

    function capstone_social_sharing_links() { ?>

        <?php if ( get_theme_mod('capstone_enable_social_sharing', false) ) { ?>
            <div id="social-share">
                <span class="label"><?php esc_html_e( 'Share:', 'capstone-pro' ); ?></span>
                <span class="share-link"><a class="twitter" target="_blank" href="<?php echo esc_url('https://twitter.com/home?status='. the_title_attribute(array( 'before' => '', 'after' => '', 'echo' => false )) .' '. get_permalink() .''); ?>"><?php esc_html_e('Tw', 'capstone-pro'); ?><small>.</small></a></span>
                <span class="share-link"><a class="facebook" target="_blank" href="<?php echo esc_url('https://www.facebook.com/share.php?u='. get_permalink() .'&title='. the_title_attribute(array( 'before' => '', 'after' => '', 'echo' => false ))); ?>"><?php esc_html_e('Fb', 'capstone-pro'); ?><small>.</small></a></span>
                <span class="share-link"><a class="linkedin" target="_blank" href="<?php echo esc_url('https://www.linkedin.com/shareArticle?mini=true&url='. get_permalink() .'&title='. the_title_attribute(array( 'before' => '', 'after' => '', 'echo' => false )) .'&summary=&source='); ?>"><?php esc_html_e('Lin', 'capstone-pro'); ?><small>.</small></a></span>
            </div>
        <?php } ?>

    <?php
    }

    add_action('capstone_footer_after', 'capstone_social_sharing_links');


#-------------------------------------------------------------------------------#
#  Add Site Notification Page Controller
#-------------------------------------------------------------------------------#

    function capstone_site_notice_controller() { ?>

        <?php if ( !get_theme_mod('capstone_notification_disable') && get_theme_mod('capstone_notification_title') ) { ?>
            <a class="page-control notification" href="#site-info" data-balloon="<?php echo esc_attr(get_theme_mod('capstone_notification_tooltip')); ?>" data-balloon-pos="left"><img src="<?php echo esc_url( get_template_directory_uri() .'/images/notification-icon.svg'); ?>" alt="<?php esc_attr_e('Open Notification' ,'capstone-pro'); ?>"></a>
        <?php } ?>

    <?php
    }

    add_action('capstone_page_controls_before', 'capstone_site_notice_controller');
