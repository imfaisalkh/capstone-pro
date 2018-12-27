<?php

// Define Module Settings
class TestimonialsClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Testimonials', 'fl-builder' ),
            'description'     => __('Display custom defined testimonials.', 'fl-builder'),
            'group'           => __( 'Capstone Modules', 'fl-builder' ),
            'category'        => __( 'Capstone Modules', 'fl-builder' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'testimonials/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'testimonials/',
            'icon'            => 'playlist.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => true, // Defaults to false and can be omitted.
        ));
    }
}

// Define Module Interface (admin)
FLBuilder::register_module('TestimonialsClass', array(
        'general' => array(
            'title' => __('General', 'fl-builder'),
            'sections' => array(
                'form_section' => array(
                    'title' => __('Testimonials', 'fl-builder'), // Section Title
                    'fields' =>
                        array(
                            'testimonials' => array(
                                'type' => 'form',
                                'label' => __('Testmonial', 'fl-builder'),
                                'form' => 'testimonial_form',
                                'preview_text' => 'testimonial_title',
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
FLBuilder::register_settings_form('testimonial_form', array(
    'title' => __('Testmonial', 'fl-builder'),
    'tabs' => array(
        'general' => array(
            'title' => __('General', 'fl-builder'),
            'sections' => array(
                'general' => array(
                    'title' => 'Enter Testmonial Details',
                    'fields' => array(
                        'testimonial_desc' => array(
                            'type' => 'textarea',
                            'label' => __('Description', 'fl-builder'),
                            'description' => __('Enter the description for the testimonial.', 'fl-builder'),
                            'rows' => 6,
                            'connections' => array('string', 'html'),
                        ),
                        'testimonial_title' => array(
                            'type' => 'text',
                            'label' => __('Title', 'fl-builder'),
                            'description' => __('Type name of the testimonial author.', 'fl-builder'),
                            'connections' => array('string', 'html'),
                        ),
                        'testimonial_subtitle' => array(
                            'type' => 'text',
                            'label' => __('Subtitle', 'fl-builder'),
                            'description' => __('This could be the place or position of the author.', 'fl-builder'),
                            'connections' => array('string', 'html'),
                        ),
                    )
                ),
            )
        ),
    )
));