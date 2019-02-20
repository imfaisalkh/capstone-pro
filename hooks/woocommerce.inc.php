<?php

#-------------------------------------------------------------------------------#
#  Checkout Hooks
#-------------------------------------------------------------------------------#

    // Personal Information - Fields
    function capstone_woocommerce_checkout_before_customer_details() {
        echo '<div class="personal-info-fields">';
            echo '<h3 class="title">'. esc_html__('Personal Information', 'capstone-pro') .'</h3>';
            echo '<div class="form-fields">';
    }
    add_action( 'woocommerce_checkout_before_customer_details', 'capstone_woocommerce_checkout_before_customer_details' );

    function capstone_woocommerce_checkout_after_customer_details() {
            echo '</div>';
        echo '</div>';
    }
    add_action( 'woocommerce_checkout_after_customer_details', 'capstone_woocommerce_checkout_after_customer_details' );


    // Payment Information - Fields
    function capstone_woocommerce_review_order_before_payment() {
        echo '<div class="payment-info-fields">';
            echo '<h3 class="title">'. esc_html__('Payment Methods', 'capstone-pro') .'</h3>';
            echo '<div class="form-fields">';
    }
    add_action( 'woocommerce_review_order_before_payment', 'capstone_woocommerce_review_order_before_payment' );

    function capstone_woocommerce_review_order_after_payment() {
        echo '</div>';
    echo '</div>';
    }
    add_action( 'woocommerce_review_order_after_payment', 'capstone_woocommerce_review_order_after_payment' );
