<?php

// Define Module Settings
class TaxonomiesGridClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Taxonomies Grid', 'fl-builder' ),
            'description'     => __( 'It displays a list of taxonomies based on defined criteria.', 'fl-builder' ),
            'group'           => __( 'Capstone Modules', 'fl-builder' ),
            'category'        => __( 'Job Board', 'fl-builder' ),
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
        'title'         => __( 'General', 'fl-builder' ),
        'sections'      => array(
            'query'  => array(
                'title'         => __( 'Query', 'fl-builder' ),
                'fields'        => array(
                    'taxonomy' => array(
                        'type'          => 'select',
                        'label'         => __( 'Taxonomy', 'fl-builder' ),
                        'default'       => 'category',
                        'options'       => get_taxonomies()
                    ),
                    'terms'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Terms', 'fl-builder' ),
                        'description'   => 'A comma separate IDs for the terms from above selected taxonomy.',
                    ),
                )
            )
        )
    )
) );