<?php

#-------------------------------------------------------------------------------#
#  Load Scripts and Styles
#-------------------------------------------------------------------------------#

    add_action('wp_enqueue_scripts', 'capstone_woocommerce_styles');

    function capstone_woocommerce_styles() {
        if ( !is_admin() ) {
            wp_enqueue_style('capstone-pro-woocommerce-styles', CAPSTONE_HOOKS_URL . 'styles/css/woocommerce.css');
        }
    }

    add_action('wp_enqueue_scripts', 'capstone_woocommerce_scripts', 20);

    function capstone_woocommerce_scripts() {
        if ( !is_admin() ) {
			wp_enqueue_script('capstone-pro-woocommerce-scripts', CAPSTONE_HOOKS_URL .'scripts/woocommerce.js', array('jquery'), null, true);
        }
    }


#-------------------------------------------------------------------------------#
#  Disable WooCommerce Checkout Fields
#-------------------------------------------------------------------------------#

    add_filter( 'woocommerce_checkout_fields' , 'capston_override_checkout_fields' );
    
    function capston_override_checkout_fields( $fields ) {
        // unset($fields['billing']['billing_first_name']);
        // unset($fields['billing']['billing_last_name']);
        unset($fields['billing']['billing_company']);
        unset($fields['billing']['billing_address_1']);
        unset($fields['billing']['billing_address_2']);
        unset($fields['billing']['billing_city']);
        unset($fields['billing']['billing_postcode']);
        unset($fields['billing']['billing_country']);
        unset($fields['billing']['billing_state']);
        unset($fields['billing']['billing_phone']);
        unset($fields['order']['order_comments']);
        unset($fields['billing']['billing_address_2']);
        unset($fields['billing']['billing_postcode']);
        unset($fields['billing']['billing_company']);
        // unset($fields['billing']['billing_email']);
        unset($fields['billing']['billing_city']);
        return $fields;
    }


#-------------------------------------------------------------------------------#
#  Checkout Hooks
#-------------------------------------------------------------------------------#

    // Personal Information - Fields
    function capstone_woocommerce_checkout_before_customer_details() {
        echo '<div class="personal-info-fields">';
            echo '<h3 class="title"><span>1</span>'. esc_html__('Personal Information', 'capstone') .'</h3>';
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
            echo '<h3 class="title"><span>2</span>'. esc_html__('Payment Methods', 'capstone') .'</h3>';
            echo '<div class="form-fields">';
    }
    add_action( 'woocommerce_review_order_before_payment', 'capstone_woocommerce_review_order_before_payment' );

    function capstone_woocommerce_review_order_after_payment() {
        echo '</div>';
    echo '</div>';
    }
    add_action( 'woocommerce_review_order_after_payment', 'capstone_woocommerce_review_order_after_payment' );
