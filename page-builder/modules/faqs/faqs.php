<?php

// Define Module Settings
class FAQsClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'FAQs', 'capstone-pro' ),
            'description'     => __('Display FAQs in multi-column grid.', 'capstone-pro'),
            'group'           => __( 'Capstone Modules', 'capstone-pro' ),
            'category'        => __( 'Marketing', 'capstone-pro' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'faqs/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'faqs/',
            'icon'            => 'playlist.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => true, // Defaults to false and can be omitted.
        ));
    }
}

// Define Module Interface (admin)
FLBuilder::register_module('FAQsClass', array(
        'general' => array(
            'title' => __('General', 'capstone-pro'),
            'sections' => array(

                'form_section' => array(
                    'title' => __('FAQs', 'capstone-pro'), // Section Title
                    'fields' =>
                        array(
                            'title' => array(
                                'type' => 'text',
                                'label' => __('Title', 'capstone-pro'),
                                'description' => __('Enter the title for the FAQ section', 'capstone-pro'),
                                'connections' => array('string', 'html'),
                            ),
                            'faqs' => array(
                                'type' => 'form',
                                'label' => __('FAQ', 'capstone-pro'),
                                'form' => 'faq_form',
                                'preview_text' => 'faq_question',
                                'multiple' => true
                            ),
                        )
                )
            )
        ),

    )
);

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form('faq_form', array(
    'title' => __('Frequently Asked Question', 'capstone-pro'),
    'tabs' => array(
        'general' => array(
            'title' => __('General', 'capstone-pro'),
            'sections' => array(
                'general' => array(
                    'title' => 'Enter Question Details',

                    'fields' => array(
                        'faq_question' => array(
                            'type' => 'text',
                            'label' => __('Question', 'capstone-pro'),
                            'description' => __('The text for the question', 'capstone-pro'),
                            'connections' => array('string', 'html'),
                        ),

                        'faq_answer' => array(
                            'type' => 'textarea',
                            'label' => __('Answer', 'capstone-pro'),
                            'description' => __('Enter the answer for the question above.', 'capstone-pro'),
                            'rows' => 6,
                            'connections' => array('string', 'html'),
                        ),

                    )
                )
            )
        ),
    )
));