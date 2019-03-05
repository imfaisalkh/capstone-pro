<?php

#-------------------------------------------------------------------------------#
#  Get Client's IP
#-------------------------------------------------------------------------------#

    function capstone_get_ip_address() {
        $ip = $_SERVER['REMOTE_ADDR'];
        return apply_filters( 'wpb_get_ip', $ip );
    }

    add_shortcode('capstone_get_user_ip', 'capstone_get_ip_address');