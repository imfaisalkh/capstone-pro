<?php

// Define Module Settings
class TaxonomiesGridClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Taxonomies Grid', 'capstone-pro' ),
            'description'     => __( 'It displays a list of taxonomies based on defined criteria.', 'capstone-pro' ),
            'group'           => __( 'Capstone Modules', 'capstone-pro' ),
            'category'        => __( 'Job Board', 'capstone-pro' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'taxonomies-grid/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'taxonomies-grid/',
            'icon'            => 'playlist.svg',
            'partial_refresh' => true, // Defaults to false and can be omitted.
        ));
    }
}

// Define Module Interface (admin)
FLBuilder::register_module( 'TaxonomiesGridClass', array(
    'general'      => array(
        'title'         => __( 'General', 'capstone-pro' ),
        'sections'      => array(
            'query'  => array(
                'title'         => __( 'Query', 'capstone-pro' ),
                'fields'        => array(
                    'taxonomy' => array(
                        'type'          => 'select',
                        'label'         => __( 'Taxonomy', 'capstone-pro' ),
                        'default'       => 'category',
                        'options'       => get_taxonomies()
                    ),
                    'terms'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Terms', 'capstone-pro' ),
                        'description'   => 'A comma separate IDs for the terms from above selected taxonomy.',
                    ),
                )
            )
        )
    )
) );