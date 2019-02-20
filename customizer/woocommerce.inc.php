<?php

#-------------------------------------------------------------------------------#
#  Theme Customizer - WooCommerce Settings
#-------------------------------------------------------------------------------#

	add_action( 'init', 'capstone_customize_woocommerce_settings' );

	function capstone_customize_woocommerce_settings() {

        // SECTION: Companies Master
		Kirki::add_section( 'woocommerce_theme_capstone', array(
			'title'          => esc_html__( 'Theme Settings', 'capstone-pro' ),
			'description'    => esc_html__( 'This section configures woocommerce options relevant to capstone theme.', 'capstone-pro' ),
			'panel'          => 'woocommerce',
        ) );
        
        // OPTION: Checkbox
		Kirki::add_field( 'capstone_woocommerce_restore_products_grid', array(
			'type'        => 'checkbox',
			'settings'    => 'capstone_woocommerce_restore_products_grid',
			'label'       => esc_html__( 'Restore Vanilla "Products Grid"', 'capstone-pro' ),
			'description' => esc_html__( 'Check this to restore to default products grid.', 'capstone-pro' ),
            'panel'       => 'woocommerce',
            'section'     => 'woocommerce_theme_capstone',
			'default'     => false,
		) );

		// OPTION: Checkbox
		Kirki::add_field( 'capstone_woocommerce_restore_my_account', array(
			'type'        => 'checkbox',
			'settings'    => 'capstone_woocommerce_restore_my_account',
			'label'       => esc_html__( 'Restore Vanilla "My Account"', 'capstone-pro' ),
			'description' => esc_html__( 'Check this to disable [woocommerce_my_account] shortcode override.', 'capstone-pro' ),
			'panel'       => 'woocommerce',
			'section'     => 'woocommerce_theme_capstone',
			'default'     => false,
		) );

		// OPTION: Checkbox
		Kirki::add_field( 'capstone_woocommerce_restore_checkout_fields', array(
			'type'        => 'checkbox',
			'settings'    => 'capstone_woocommerce_restore_checkout_fields',
			'label'       => esc_html__( 'Restore Vanilla "Checkout Fields"', 'capstone-pro' ),
			'description' => esc_html__( 'Check this to restore to default checkout fields.', 'capstone-pro' ),
			'panel'       => 'woocommerce',
			'section'     => 'woocommerce_theme_capstone',
			'default'     => false,
		) );
		

	}
