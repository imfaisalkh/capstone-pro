<?php

// Define Module Settings
class JobListingClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Job Listing', 'capstone-pro' ),
            'description'     => __( 'It displays a list of jobs based on defined criteria.', 'capstone-pro' ),
            'group'           => __( 'Capstone Modules', 'capstone-pro' ),
            'category'        => __( 'Job Board', 'capstone-pro' ),
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
        'title'         => __( 'General', 'capstone-pro' ),
        'sections'      => array(
            'query'  => array(
                'title'         => __( 'Query', 'capstone-pro' ),
                'fields'        => array(
                    'count'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Count', 'capstone-pro' ),
                        'description'   => 'How many jobs to list.',
                        'default'       => '-1',
                    ),
                    'order_by' => array(
                        'type'          => 'select',
                        'label'         => __( 'Order By', 'capstone-pro' ),
                        'default'       => 'featured',
                        'options'       => array(
                            'featured'      => __( 'Featured', 'capstone-pro' ),
                            'title'      => __( 'Title', 'capstone-pro' ),
                            'ID'      => __( 'ID', 'capstone-pro' ),
                            'name'      => __( 'Name', 'capstone-pro' ),
                            'date'      => __( 'Date', 'capstone-pro' ),
                            'modified'      => __( 'Date Modified', 'capstone-pro' ),
                            'rand'      => __( 'Random', 'capstone-pro' )
                        )
                    ),
                    'order' => array(
                        'type'          => 'select',
                        'label'         => __( 'Order', 'capstone-pro' ),
                        'default'       => 'desc',
                        'options'       => array(
                            'desc'      => __( 'Descending', 'capstone-pro' ),
                            'asc'      => __( 'Ascending', 'capstone-pro' )
                        )
                    ),
                    'categories'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Categories', 'capstone-pro' ),
                        'description'   => 'A comma separate slugs to limit the jobs to certain categories.',
                    ),
                    'job_types'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Job Types', 'capstone-pro' ),
                        'description'   => 'A comma separate slugs to limit the jobs to certain job types.',
                    ),
                    'location'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Location', 'capstone-pro' ),
                        'description'   => 'Enter a location keyword to search by default.',
                    ),
                    'keywords'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Keyword', 'capstone-pro' ),
                        'description'   => 'Enter a keyword to search by default.',
                    ),
                    'post_status' => array(
                        'type'          => 'select',
                        'label'         => __( 'Status', 'capstone-pro' ),
                        'default'       => 'publish',
                        'options'       => array(
                            'publish'      => __( 'Active Jobs', 'capstone-pro' ),
                            'expired'      => __( 'Expired Jobs', 'capstone-pro' )
                        )
                    ),
                    'featured' => array(
                        'type'          => 'select',
                        'label'         => __( 'Featured Jobs', 'capstone-pro' ),
                        'default'       => '',
                        'options'       => array(
                            ''      => __( 'Show BOTH Featured + Non-Featured Jobs', 'capstone-pro' ),
                            'true'      => __( 'Show Featured Jobs ONLY', 'capstone-pro' ),
                            'false'      => __( 'Show Non-Featured Jobs ONLY', 'capstone-pro' )
                        )
                    ),
                    'show_pagination' => array(
                        'type'          => 'select',
                        'label'         => __( 'Pagination', 'capstone-pro' ),
                        'default'       => 'false',
                        'options'       => array(
                            'true'      => __( 'Show Numbered Pagination', 'capstone-pro' ),
                            'false'      => __( 'Show Load More Button', 'capstone-pro' )
                        )
                    ),
                )
            )
        )
    )
) );