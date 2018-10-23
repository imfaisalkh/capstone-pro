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
                    'order_by' => array(
                        'type'          => 'select',
                        'label'         => __( 'Order By', 'fl-builder' ),
                        'default'       => 'featured',
                        'options'       => array(
                            'featured'      => __( 'Featured', 'fl-builder' ),
                            'title'      => __( 'Title', 'fl-builder' ),
                            'ID'      => __( 'ID', 'fl-builder' ),
                            'name'      => __( 'Name', 'fl-builder' ),
                            'date'      => __( 'Date', 'fl-builder' ),
                            'modified'      => __( 'Date Modified', 'fl-builder' ),
                            'rand'      => __( 'Random', 'fl-builder' )
                        )
                    ),
                    'order' => array(
                        'type'          => 'select',
                        'label'         => __( 'Order', 'fl-builder' ),
                        'default'       => 'desc',
                        'options'       => array(
                            'desc'      => __( 'Descending', 'fl-builder' ),
                            'asc'      => __( 'Ascending', 'fl-builder' )
                        )
                    ),
                    'categories'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Categories', 'fl-builder' ),
                        'description'   => 'A comma separate slugs to limit the jobs to certain categories.',
                    ),
                    'job_types'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Job Types', 'fl-builder' ),
                        'description'   => 'A comma separate slugs to limit the jobs to certain job types.',
                    ),
                    'location'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Location', 'fl-builder' ),
                        'description'   => 'Enter a location keyword to search by default.',
                    ),
                    'keywords'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Keywrod', 'fl-builder' ),
                        'description'   => 'Enter a keyword to search by default.',
                    ),
                    'post_status' => array(
                        'type'          => 'select',
                        'label'         => __( 'Status', 'fl-builder' ),
                        'default'       => 'publish',
                        'options'       => array(
                            'publish'      => __( 'Active Jobs', 'fl-builder' ),
                            'expired'      => __( 'Expired Jobs', 'fl-builder' )
                        )
                    ),
                    'featured' => array(
                        'type'          => 'select',
                        'label'         => __( 'Featured Jobs', 'fl-builder' ),
                        'default'       => '',
                        'options'       => array(
                            ''      => __( 'Show BOTH Featured + Non-Featured Jobs', 'fl-builder' ),
                            'true'      => __( 'Show Featured Jobs ONLY', 'fl-builder' ),
                            'false'      => __( 'Show Non-Featured Jobs ONLY', 'fl-builder' )
                        )
                    ),
                    'show_pagination' => array(
                        'type'          => 'select',
                        'label'         => __( 'Pagination', 'fl-builder' ),
                        'default'       => 'false',
                        'options'       => array(
                            'true'      => __( 'Show Numbered Pagination', 'fl-builder' ),
                            'false'      => __( 'Show Load More Button', 'fl-builder' )
                        )
                    ),
                )
            )
        )
    )
) );