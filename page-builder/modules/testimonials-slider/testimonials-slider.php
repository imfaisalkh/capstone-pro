<?php

// Define Module Settings
class TestimonialsClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Testimonials', 'capstone-pro' ),
            'description'     => __('Display custom defined testimonials.', 'capstone-pro'),
            'group'           => __( 'Capstone Modules', 'capstone-pro' ),
            'category'        => __( 'Marketing', 'capstone-pro' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'testimonials-slider/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'testimonials-slider/',
            // 'icon'            => 'playlist.svg',
            'icon' 			  => 'format-quote.svg',
            'partial_refresh' => true, // Defaults to false and can be omitted.
        ));
    }
}

// Define Module Interface (admin)
FLBuilder::register_module('TestimonialsClass', array(
        'general' => array(
            'title' => __('General', 'capstone-pro'),
            'sections' => array(
                'general' => array(
                    'title' => __('Testimonials', 'capstone-pro'), // Section Title
                    'fields' =>
                        array(
                            'testimonials' => array(
                                'type' => 'form',
                                'label' => __('Testmonial', 'capstone-pro'),
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
    'title' => __('Testmonial', 'capstone-pro'),
    'tabs' => array(
        'general' => array(
            'title' => __('General', 'capstone-pro'),
            'sections' => array(
                'general' => array(
                    'title' => 'Enter Testmonial Details',
                    'fields' => array(
                        'testimonial_desc' => array(
                            'type' => 'textarea',
                            'label' => __('Description', 'capstone-pro'),
                            'description' => __('Enter the description for the testimonial.', 'capstone-pro'),
                            'rows' => 6,
                            'connections' => array('string', 'html'),
                        ),
                        'testimonial_title' => array(
                            'type' => 'text',
                            'label' => __('Title', 'capstone-pro'),
                            'description' => __('Type name of the testimonial author.', 'capstone-pro'),
                            'connections' => array('string', 'html'),
                        ),
                        'testimonial_subtitle' => array(
                            'type' => 'text',
                            'label' => __('Subtitle', 'capstone-pro'),
                            'description' => __('This could be the place or position of the author.', 'capstone-pro'),
                            'connections' => array('string', 'html'),
                        ),
                    )
                ),
            )
        ),
    )
));