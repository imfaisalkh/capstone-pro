<?php

// Define Module Settings
class JobListingClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Job Listing', 'fl-builder' ),
            'description'     => __( 'It displays a list of jobs based on defined criteria.', 'fl-builder' ),
            'group'           => __( 'Capstone Modules', 'fl-builder' ),
            'category'        => __( 'Job Board', 'fl-builder' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'jobs/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'jobs/',
            'icon'            => 'playlist.svg',
            'partial_refresh' => true, // Defaults to false and can be omitted.
        ));
    }
}

// Define Module Interface (admin)
FLBuilder::register_module( 'JobListingClass', array(
    'general'      => array(
        'title'         => __( 'General', 'fl-builder' ),
        'sections'      => array(
            'query'  => array(
                'title'         => __( 'Query', 'fl-builder' ),
                'fields'        => array(
                    'count'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Count', 'fl-builder' ),
                        'description'   => 'How many jobs to list.',
                        'default'       => '-1',
                    ),
                )
            )
        )
    )
) );