<?php

#-------------------------------------------------------------------------------#
#  Add Demo Notices to the Site
#-------------------------------------------------------------------------------#

    function capstone_demo_notices() { ?>

        <!-- BEGIN: DEMO NOTICES -->
        <div id="demo-notices">

            <!-- Registration Notification -->
            <div id="registration-notice" class="demo-notice">
                <a href="#" class="close"><img src="<?php echo esc_url( get_template_directory_uri() .'/images/close.svg' ); ?>" alt="<?php esc_attr_e('Close Notification' ,'capstone'); ?>"></a>
                <div class="container">
                    <div class="text">
                        <h5 class="title"><?php echo esc_html__('Note:', 'capstone'); ?></h5>
                        <p class="desc"><?php echo esc_html__('You are are not allowed to create a new account in demo, you can login to a demo account instead.', 'capstone'); ?></p>
                    </div>
                    <div class="buttons">
                        <p>Login as: <a href="#" class="button employer" data-username="elon@wpscouts.net" data-password="elon123">Employer</a> or <a href="#" class="button candidate" data-username="robert@wpscouts.net" data-password="robert123">Candidate</a></p>
                    </div>
                </div>
            </div>

            <!-- Login Notification -->
            <div id="login-notice" class="demo-notice">
                <a href="#" class="close"><img src="<?php echo esc_url( get_template_directory_uri() .'/images/close.svg' ); ?>" alt="<?php esc_attr_e('Close Notification' ,'capstone'); ?>"></a>
                <div class="container">
                    <div class="text">
                        <h5 class="title"><?php echo esc_html__('Note:', 'capstone'); ?></h5>
                        <p class="desc"><?php echo esc_html__('You are trying to access a protected page, you can login to a demo account to access it.', 'capstone'); ?></p>
                    </div>
                    <div class="buttons">
                        <p>Login as: <a href="#" class="button employer" data-username="elon@wpscouts.net" data-password="elon123">Employer</a> or <a href="#" class="button candidate" data-username="robert@wpscouts.net" data-password="robert123">Candidate</a></p>
                    </div>
                    <div class="clipboard">
                        <?php if ( shortcode_exists( 'wppb-login' ) ) { ?> 
                            <?php echo do_shortcode('[wppb-login]'); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- Not Allowed Notification -->
            <div id="not-allowed-notice" class="demo-notice">
                <a href="#" class="close"><img src="<?php echo esc_url( get_template_directory_uri() .'/images/close.svg' ); ?>" alt="<?php esc_attr_e('Close Notification' ,'capstone'); ?>"></a>
                <div class="container">
                    <div class="text">
                        <h5 class="title"><?php echo esc_html__('Note:', 'capstone'); ?></h5>
                        <p class="desc"><?php echo esc_html__('You are are not allowed to perform this action on demo site.', 'capstone'); ?></p>
                    </div>
                    <div class="buttons">
                        <p><a href="https://themeforest.net/checkout/from_item/22355387?license=regular&size=source&ref=wpscouts" class="button employer">Purchase Now</a></p>
                    </div>
                </div>
            </div>


        </div>
        <!-- END: DEMO NOTICES -->

    <?php
    }

    add_action('capstone_site_container_end', 'capstone_demo_notices');
