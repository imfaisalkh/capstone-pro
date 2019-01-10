<?php

// Define Module Settings
class CTABannerClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'CTA Banner', 'capstone-pro' ),
            'description'     => __( 'It displays a call to action banner.', 'capstone-pro' ),
            'group'           => __( 'Capstone Modules', 'capstone-pro' ),
            'category'        => __( 'Marketing', 'capstone-pro' ),
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
        'title'         => __( 'General', 'capstone-pro' ),
        'sections'      => array(
            'text'  => array(
                'title'         => __( 'Text', 'capstone-pro' ),
                'fields'        => array(
                    'title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Title', 'capstone-pro' ),
                    ),
                    'subtitle'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Subtitle', 'capstone-pro' ),
                    )
                )
            ),
            'button'  => array(
                'title'         => __( 'Link', 'capstone-pro' ),
                'fields'        => array(
                    'text'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Text', 'capstone-pro' ),
                        'placeholder'   => __( 'Browse all', 'capstone-pro' ),
                    ),
                    'url'     => array(
                        'type'          => 'link',
                        'label'         => __( 'URL', 'capstone-pro' ),
                        'placeholder'   => __( 'http://example.com', 'capstone-pro' ),
                    )
                )
            )            
        )
    )
) );