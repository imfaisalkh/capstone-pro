<?php

// Define Module Settings
class CTAsClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'CTAs', 'fl-builder' ),
            'description'     => __('Display CTAs in multi-column grid.', 'fl-builder'),
            'group'           => __( 'Capstone Modules', 'fl-builder' ),
            'category'        => __( 'Capstone Modules', 'fl-builder' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'cta-box/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'cta-box/',
            'icon'            => 'playlist.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => true, // Defaults to false and can be omitted.
        ));
    }
}

// Define Module Interface (admin)
FLBuilder::register_module('CTAsClass', array(
        'general' => array(
            'title' => __('General', 'fl-builder'),
            'sections' => array(
                'form_section' => array(
                    'title' => __('CTA Boxes', 'fl-builder'), // Section Title
                    'fields' =>
                        array(
                            'cta_boxes' => array(
                                'type' => 'form',
                                'label' => __('CTA Box', 'fl-builder'),
                                'form' => 'cta_box_form',
                                'preview_text' => 'cta_title',
                                'multiple' => true
                            ),
                        ),
                )
            )
        ),

    )
);

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form('cta_box_form', array(
    'title' => __('CTA Box', 'fl-builder'),
    'tabs' => array(
        'general' => array(
            'title' => __('General', 'fl-builder'),
            'sections' => array(
                'general' => array(
                    'title' => 'Enter CTA Box Details',
                    'fields' => array(
                        'cta_title' => array(
                            'type' => 'text',
                            'label' => __('Title', 'fl-builder'),
                            'description' => __('The text for the title.', 'fl-builder'),
                            'connections' => array('string', 'html'),
                        ),
                        'cta_desc' => array(
                            'type' => 'textarea',
                            'label' => __('Description', 'fl-builder'),
                            'description' => __('Enter the description for the box.', 'fl-builder'),
                            'rows' => 6,
                            'connections' => array('string', 'html'),
                        ),
                        'cta_style' => array(
                            'type'          => 'select',
                            'label'         => __( 'Style', 'fl-builder' ),
                            'default'       => 'blue',
                            'options'       => array(
                                'blue'      => __( 'Blue', 'fl-builder' ),
                                'red'      => __( 'Red', 'fl-builder' )
                            )
                        ),
                        'cta_icon' => array(
                            'type'          => 'photo',
                            'label'         => __('Icon', 'fl-builder'),
                            'show_remove'   => false,
                        ),
                    )
                ),
            )
        ),
        'button' => array(
            'title' => __('Button', 'fl-builder'),
            'sections' => array(
                'general' => array(
                    'title' => 'CTA Link',
                    'fields' => array(
                        'button_text' => array(
                            'type' => 'text',
                            'label' => __('Text for CTA box button', 'fl-builder'),
                            'description' => __('Provide the text for the link or the button shown for this pricing plan.', 'fl-builder'),
                            'connections' => array('string', 'html'),
                        ),

                        'button_url' => array(
                            'type' => 'link',
                            'label' => __('URL for the CTA box button', 'fl-builder'),
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