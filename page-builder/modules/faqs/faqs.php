<?php

// Define Module Settings
class FAQsClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'FAQs', 'fl-builder' ),
            'description'     => __('Display FAQs in multi-column grid.', 'fl-builder'),
            'group'           => __( 'Capstone Modules', 'fl-builder' ),
            'category'        => __( 'Capstone Modules', 'fl-builder' ),
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
            'title' => __('General', 'fl-builder'),
            'sections' => array(

                'form_section' => array(
                    'title' => __('FAQs', 'fl-builder'), // Section Title
                    'fields' =>
                        array(
                            'title' => array(
                                'type' => 'text',
                                'label' => __('Title', 'fl-builder'),
                                'description' => __('Enter the title for the FAQ section', 'fl-builder'),
                                'connections' => array('string', 'html'),
                            ),
                            'faqs' => array(
                                'type' => 'form',
                                'label' => __('FAQ', 'fl-builder'),
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
    'title' => __('Frequently Asked Question', 'fl-builder'),
    'tabs' => array(
        'general' => array(
            'title' => __('General', 'fl-builder'),
            'sections' => array(
                'general' => array(
                    'title' => 'Enter Question Details',

                    'fields' => array(
                        'faq_question' => array(
                            'type' => 'text',
                            'label' => __('Question', 'fl-builder'),
                            'description' => __('The text for the question', 'fl-builder'),
                            'connections' => array('string', 'html'),
                        ),

                        'faq_answer' => array(
                            'type' => 'textarea',
                            'label' => __('Answer', 'fl-builder'),
                            'description' => __('Enter the answer for the question above.', 'fl-builder'),
                            'rows' => 6,
                            'connections' => array('string', 'html'),
                        ),

                    )
                )
            )
        ),
    )
));