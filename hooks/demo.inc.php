<?php

#-------------------------------------------------------------------------------#
#  Add Demo Notices to the Site
#-------------------------------------------------------------------------------#

    function capstone_demo_notices() { ?>

        <!-- BEGIN: DEMO NOTICES -->
        <div id="demo-notices">

            <!-- Registration Notification -->
            <div id="registration-notice" class="mfp-hide white-popup-block">
                <header class="popup-header">
                    <h2 class="title">Not Allowed</h2>
                    <p class="subtitle">The action being performed is not allowed.</p>
                </header>

                <main class="popup-body">
                    <p class="desc">The demo site does not allow user regstraion. However, to check the dashboard you can <u>login to a demo account</u> instead.</p>
                    <div class="buttons">
                        <p><a href="#" class="button employer" data-username="elon@wpscouts.net" data-password="elon123">Login as Employer</a> or <a href="#" class="button candidate" data-username="robert@wpscouts.net" data-password="robert123">Login as Candidate</a></p>
                    </div>
                </main>
            </div>

            <!-- Login Notification -->
            <div id="login-notice" class="mfp-hide white-popup-block">
                <header class="popup-header">
                    <h2 class="title">Protected Page</h2>
                    <p class="subtitle">Page requires authetication before moving forward.</p>
                </header>

                <main class="popup-body">
                    <p class="desc">The page you are trying to access is protected and requires authentication, do you want to <u>login to a demo account</u> to access this page?</p>
                    <div class="buttons">
                        <p><a href="#" class="button employer" data-username="elon@wpscouts.net" data-password="elon123">Login as Employer</a> or <a href="#" class="button candidate" data-username="robert@wpscouts.net" data-password="robert123">Login as Candidate</a></p>
                    </div>
                </main>

                <div class="popup-clipboard">
                    <?php if ( shortcode_exists( 'wppb-login' ) ) { ?> 
                        <?php echo do_shortcode('[wppb-login]'); ?>
                    <?php } ?>
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
