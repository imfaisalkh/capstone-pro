<?php

// Define Module Settings
class HeaderClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Header', 'fl-builder' ),
            'description'     => __( 'It displays a simple header for custom modules.', 'fl-builder' ),
            'group'           => __( 'Capstone Modules', 'fl-builder' ),
            'category'        => __( 'Basic', 'fl-builder' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'header/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'header/',
            'icon'            => 'playlist.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

// Define Module Interface (admin)
FLBuilder::register_module( 'HeaderClass', array(
    'general'      => array(
        'title'         => __( 'General', 'fl-builder' ),
        'sections'      => array(
            'text'  => array(
                'title'         => __( 'Text', 'fl-builder' ),
                'fields'        => array(
                    'title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Title', 'fl-builder' ),
                    ),
                    'subtitle'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Subtitle', 'fl-builder' ),
                    )
                )
            ),
            'link'  => array(
                'title'         => __( 'Link', 'fl-builder' ),
                'fields'        => array(
                    'text'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Text', 'fl-builder' ),
                        'placeholder'   => __( 'Browse all', 'fl-builder' ),
                    ),
                    'url'     => array(
                        'type'          => 'link',
                        'label'         => __( 'URL', 'fl-builder' ),
                        'placeholder'   => __( 'http://example.com', 'fl-builder' ),
                    )
                )
            )            
        )
    )
) );