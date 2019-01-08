<?php

// Define Module Settings
class PricingTableClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Pricing', 'fl-builder' ),
            'description'     => __('Display pricing plans in a multi-column grid.', 'fl-builder'),
            'group'           => __( 'Capstone Modules', 'fl-builder' ),
            'category'        => __( 'Job Board', 'fl-builder' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'pricing/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'pricing/',
            'icon'            => 'playlist.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => true, // Defaults to false and can be omitted.
        ));

    }
}

// Define Module Interface (admin)
FLBuilder::register_module('PricingTableClass', array(
        'general' => array(
            'title' => __('General', 'fl-builder'),
            'sections' => array(

                'panels_section' => array(
                    'title' => __('Pricing Plans', 'fl-builder'), // Section Title
                    'fields' =>
                        array(
                            'pricing_plans' => array(
                                'type' => 'form',
                                'label' => __('Pricing Plan', 'fl-builder'),
                                'form' => 'pricing_plans_form',
                                'preview_text' => 'pricing_title',
                                'multiple' => true
                            ),
                        )
                ),

                'others_section' => array(
                    'title' => __('Others', 'fl-builder'), // Section Title
                    'fields' =>
                        array(
                            'currency_symbol' => array(
                                'type' => 'text',
                                'label' => __('Currency Symbol', 'fl-builder'),
                                'description' => __('Define the currency symbol for your pricing', 'fl-builder'),
                                'default'       => '$',
                                'connections' => array('string'),
                            ),
                            'currency_symbol_align' => array(
                                'type'          => 'select',
                                'label'         => __( 'Currency Symbol Alignment', 'fl-builder' ),
                                'description' => __('Specify if the currency symbol should be alignd left or right to the price.', 'fl-builder'),
                                'default'       => 'left',
                                'options'       => array(
                                    'left'      => __( 'Left', 'fl-builder' ),
                                    'right'     => __( 'Right', 'fl-builder' )
                                )
                            ),
                        )
                )
            )
        ),

        'options' => array(
            'title' => __('Options', 'fl-builder'),
            'sections' => array(
                'options_section' => array(
                    'fields' =>
                        array(
                            'per_line' => array(
                                'type' => 'unit',
                                'label' => __('Panels per row', 'fl-builder'),
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
    'title' => __('Pricing Plan', 'fl-builder'),
    'tabs' => array(
        'general' => array(
            'title' => __('General', 'fl-builder'),
            'sections' => array(
                'general' => array(
                    'title' => 'Enter Pricing Plan',

                    'fields' => array(
                        'pricing_title' => array(
                            'type' => 'text',
                            'label' => __('Pricing Plan Title', 'fl-builder'),
                            'description' => __('The title for the pricing plan', 'fl-builder'),
                            'connections' => array('string', 'html'),
                        ),

                        'tagline' => array(
                            'type' => 'text',
                            'label' => __('Tagline Text', 'fl-builder'),
                            'description' => __('Provide any subtitle or taglines like "One-Off Payment", "Monthly Payment" etc. This will appear below price figure.', 'fl-builder'),
                            'connections' => array('string', 'html'),
                        ),

                        'price_tag' => array(
                            'type' => 'text',
                            'label' => __('Price Tag', 'fl-builder'),
                            'description' => __('Enter the price tag for the pricing plan.', 'fl-builder'),
                            'connections' => array('custom_field')
                        ),

                        'highlight' => array(
                            'type'          => 'select',
                            'label'         => __( 'Highlight Pricing Plan', 'fl-builder' ),
                            'description' => __('Specify if you want to highlight the pricing plan.', 'fl-builder'),
                            'default'       => 'no',
                            'options'       => array(
                                'no'      => __( 'No', 'fl-builder' ),
                                'yes'     => __( 'Yes', 'fl-builder' )
                            )
                        ),

                        'pricing_content' => array(
                            'type' => 'textarea',
                            'label' => __('Pricing Plan Details', 'fl-builder'),
                            'description' => __('Type each feature in a new line. Use `span` tag to hightlight the keyword(s).</span>', 'fl-builder'),
                            'rows' => 6,
                            'connections' => array('string', 'html'),
                        ),

                    )
                )
            )
        ),
        'pricing_button' => array(
            'title' => __('Button', 'fl-builder'),
            'sections' => array(
                'general' => array(
                    'title' => 'Purchase Link',
                    'fields' => array(
                        'button_text' => array(
                            'type' => 'text',
                            'label' => __('Text for Pricing Link/Button', 'fl-builder'),
                            'description' => __('Provide the text for the link or the button shown for this pricing plan.', 'fl-builder'),
                            'connections' => array('string', 'html'),
                        ),

                        'pricing_url' => array(
                            'type' => 'link',
                            'label' => __('URL for the Pricing link/button', 'fl-builder'),
                            'description' => __('Provide the target URL for the link or the button shown for this pricing plan.', 'fl-builder'),
                            'connections' => array('url'),
                        ),

                        'new_window' => array(
                            'type'          => 'select',
                            'label'         => __( 'Open Button URL in a new window', 'fl-builder' ),
                            'default'       => 'no',
                            'options'       => array(
                                'no'      => __( 'No', 'fl-builder' ),
                                'yes'     => __( 'Yes', 'fl-builder' )
                            )
                        ),

                    )
                )
            )
        ),
    )
));
