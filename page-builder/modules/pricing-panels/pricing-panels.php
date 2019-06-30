<?php

// Define Module Settings
class PricingTableClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Pricing', 'capstone-pro' ),
            'description'     => __('Display pricing plans in a multi-column grid.', 'capstone-pro'),
            'group'           => __( 'Capstone Modules', 'capstone-pro' ),
            'category'        => __( 'Job Board', 'capstone-pro' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'pricing-panels/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'pricing-panels/',
            'icon'            => 'editor-table.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => true, // Defaults to false and can be omitted.
        ));

    }
}

// Define Module Interface (admin)
FLBuilder::register_module('PricingTableClass', array(
        'general' => array(
            'title' => __('General', 'capstone-pro'),
            'sections' => array(

                'panels_section' => array(
                    'title' => __('Pricing Plans', 'capstone-pro'), // Section Title
                    'fields' =>
                        array(
                            'pricing_plans' => array(
                                'type' => 'form',
                                'label' => __('Pricing Plan', 'capstone-pro'),
                                'form' => 'pricing_plans_form',
                                'preview_text' => 'pricing_title',
                                'multiple' => true
                            ),
                        )
                ),

                'others_section' => array(
                    'title' => __('Others', 'capstone-pro'), // Section Title
                    'fields' =>
                        array(
                            'currency_symbol' => array(
                                'type' => 'text',
                                'label' => __('Currency Symbol', 'capstone-pro'),
                                'description' => __('Define the currency symbol for your pricing', 'capstone-pro'),
                                'default'       => '$',
                                'connections' => array('string'),
                            ),
                            'currency_symbol_align' => array(
                                'type'          => 'select',
                                'label'         => __( 'Currency Symbol Alignment', 'capstone-pro' ),
                                'description' => __('Specify if the currency symbol should be alignd left or right to the price.', 'capstone-pro'),
                                'default'       => 'left',
                                'options'       => array(
                                    'left'      => __( 'Left', 'capstone-pro' ),
                                    'right'     => __( 'Right', 'capstone-pro' )
                                )
                            ),
                        )
                )
            )
        ),

        'options' => array(
            'title' => __('Options', 'capstone-pro'),
            'sections' => array(
                'options_section' => array(
                    'fields' =>
                        array(
                            'per_line' => array(
                                'type' => 'unit',
                                'label' => __('Panels per row', 'capstone-pro'),
                                'min' => 1,
                                'max' => 6,
                                'default' => 3,
                                'description' => 'Pricing plans per row (max: 4)',
                                'connections' => array('custom_field')
                            ),

                        )
                ),
            )
        ),
    )
);

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form('pricing_plans_form', array(
    'title' => __('Pricing Plan', 'capstone-pro'),
    'tabs' => array(
        'general' => array(
            'title' => __('General', 'capstone-pro'),
            'sections' => array(
                'general' => array(
                    'title' => 'Enter Pricing Plan',

                    'fields' => array(
                        'pricing_title' => array(
                            'type' => 'text',
                            'label' => __('Pricing Plan Title', 'capstone-pro'),
                            'description' => __('The title for the pricing plan', 'capstone-pro'),
                            'connections' => array('string', 'html'),
                        ),

                        'tagline' => array(
                            'type' => 'text',
                            'label' => __('Tagline Text', 'capstone-pro'),
                            'description' => __('Provide any subtitle or taglines like "One-Off Payment", "Monthly Payment" etc. This will appear below price figure.', 'capstone-pro'),
                            'connections' => array('string', 'html'),
                        ),

                        'price_tag' => array(
                            'type' => 'text',
                            'label' => __('Price Tag', 'capstone-pro'),
                            'description' => __('Enter the price tag for the pricing plan.', 'capstone-pro'),
                            'connections' => array('custom_field')
                        ),

                        'highlight' => array(
                            'type'          => 'select',
                            'label'         => __( 'Highlight Pricing Plan', 'capstone-pro' ),
                            'description' => __('Specify if you want to highlight the pricing plan.', 'capstone-pro'),
                            'default'       => 'no',
                            'options'       => array(
                                'no'      => __( 'No', 'capstone-pro' ),
                                'yes'     => __( 'Yes', 'capstone-pro' )
                            )
                        ),

                        'pricing_content' => array(
                            'type' => 'textarea',
                            'label' => __('Pricing Plan Details', 'capstone-pro'),
                            'description' => __('Type each feature in a new line. Use `span` tag to hightlight the keyword(s).</span>', 'capstone-pro'),
                            'rows' => 6,
                            'connections' => array('string', 'html'),
                        ),

                    )
                )
            )
        ),
        'pricing_button' => array(
            'title' => __('Button', 'capstone-pro'),
            'sections' => array(
                'general' => array(
                    'title' => 'Purchase Link',
                    'fields' => array(
                        'button_text' => array(
                            'type' => 'text',
                            'label' => __('Text for Pricing Link/Button', 'capstone-pro'),
                            'description' => __('Provide the text for the link or the button shown for this pricing plan.', 'capstone-pro'),
                            'connections' => array('string', 'html'),
                        ),

                        'pricing_url' => array(
                            'type' => 'link',
                            'label' => __('URL for the Pricing link/button', 'capstone-pro'),
                            'description' => __('Provide the target URL for the link or the button shown for this pricing plan.', 'capstone-pro'),
                            'connections' => array('url'),
                        ),

                        'new_window' => array(
                            'type'          => 'select',
                            'label'         => __( 'Open Button URL in a new window', 'capstone-pro' ),
                            'default'       => 'no',
                            'options'       => array(
                                'no'      => __( 'No', 'capstone-pro' ),
                                'yes'     => __( 'Yes', 'capstone-pro' )
                            )
                        ),

                    )
                )
            )
        ),
    )
));
