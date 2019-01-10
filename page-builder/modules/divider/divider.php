<?php

// Define Module Settings
class DividerClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Divider', 'capstone-pro' ),
            'description'     => __( 'It displays a simple divider for modules.', 'capstone-pro' ),
            'group'           => __( 'Capstone Modules', 'capstone-pro' ),
            'category'        => __( 'Basic', 'capstone-pro' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'divider/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'divider/',
            'icon'            => 'minus.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

// Define Module Interface (admin)
FLBuilder::register_module( 'DividerClass', array(
    'general'      => array(
        'title'         => __( 'General', 'capstone-pro' ),
        'sections'      => array(
            'style'  => array(
                'title'         => __( 'Style', 'capstone-pro' ),
                'fields'        => array(
                    'weight'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Weight', 'capstone-pro' ),
                        'description'   => 'px',
                        'default'       => '1',
                    ),
                    'color'     => array(
                        'type'          => 'color',
                        'label'         => __( 'Color', 'capstone-pro' ),
                        'default'       => '333333',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    ),
                    'width' => array(
                        'type'          => 'select',
                        'label'         => __( 'Width', 'capstone-pro' ),
                        'default'       => 'is-contained',
                        'options'       => array(
                            'is-contained'      => __( 'Keep it within Container', 'capstone-pro' ),
                            'is-full-width'      => __( 'Make it Full-Width', 'capstone-pro' )
                        )
                    )
                )
            )
        )
    )
) );