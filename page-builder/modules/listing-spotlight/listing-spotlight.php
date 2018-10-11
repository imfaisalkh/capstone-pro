<?php

// Define Module Settings
class ListingSpotlightClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Listing Spotlight', 'fl-builder' ),
            'description'     => __( 'It displays a hand selected listings in slider format.', 'fl-builder' ),
            'group'           => __( 'Capstone Modules', 'fl-builder' ),
            'category'        => __( 'Job Board', 'fl-builder' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'listing-spotlight/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'listing-spotlight/',
            'icon'            => 'playlist.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

// Define Module Interface (admin)
FLBuilder::register_module( 'ListingSpotlightClass', array(
    'general'      => array(
        'title'         => __( 'General', 'fl-builder' ),
        'sections'      => array(
            'query'  => array(
                'title'         => __( 'Query', 'fl-builder' ),
                'fields'        => array(
                    'type' => array(
                        'type'          => 'select',
                        'label'         => __( 'Type', 'fl-builder' ),
                        'default'       => 'job_listing',
                        'options'       => array(
                            'job_listing'      => __( 'Jobs', 'fl-builder' ),
                            'resume'      => __( 'Resumes', 'fl-builder' )
                        )
                    ),
                    'count'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Count', 'fl-builder' ),
                        'description'   => 'How many listings to display in the slider.',
                        'default'       => '3',
                    ),
                    'ids'     => array(
                        'type'          => 'text',
                        'label'         => __( 'IDs', 'fl-builder' ),
                        'description'   => 'A comma seperated IDs of listing.',
                    ),
                )
            )
        )
    )
) );