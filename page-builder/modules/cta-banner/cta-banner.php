<?php

// Define Module Settings
class CTABannerClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'CTA Banner', 'fl-builder' ),
            'description'     => __( 'It displays a call to action banner.', 'fl-builder' ),
            'group'           => __( 'Capstone Modules', 'fl-builder' ),
            'category'        => __( 'Basic', 'fl-builder' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'cta-banner/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'cta-banner/',
            'icon'            => 'playlist.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

// Define Module Interface (admin)
FLBuilder::register_module( 'CTABannerClass', array(
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
            'button'  => array(
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