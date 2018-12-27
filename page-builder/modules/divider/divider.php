<?php

// Define Module Settings
class DividerClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Divider', 'fl-builder' ),
            'description'     => __( 'It displays a simple divider for modules.', 'fl-builder' ),
            'group'           => __( 'Capstone Modules', 'fl-builder' ),
            'category'        => __( 'Basic', 'fl-builder' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'divider/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'divider/',
            'icon'            => 'playlist.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

// Define Module Interface (admin)
FLBuilder::register_module( 'DividerClass', array(
    'general'      => array(
        'title'         => __( 'General', 'fl-builder' ),
        'sections'      => array(
            'style'  => array(
                'title'         => __( 'Style', 'fl-builder' ),
                'fields'        => array(
                    'weight'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Weight', 'fl-builder' ),
                        'description'   => 'px',
                        'default'       => '1',
                    ),
                    'color'     => array(
                        'type'          => 'color',
                        'label'         => __( 'Color', 'fl-builder' ),
                        'default'       => '333333',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    ),
                    'width' => array(
                        'type'          => 'select',
                        'label'         => __( 'Width', 'fl-builder' ),
                        'default'       => 'is-contained',
                        'options'       => array(
                            'is-contained'      => __( 'Keep it within Container', 'fl-builder' ),
                            'is-full-width'      => __( 'Make it Full-Width', 'fl-builder' )
                        )
                    )
                )
            )
        )
    )
) );