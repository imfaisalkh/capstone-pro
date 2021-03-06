<?php

// Define Module Settings
class ListingSpotlightClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Listing Spotlight', 'capstone-pro' ),
            'description'     => __( 'It displays a hand selected listings in slider format.', 'capstone-pro' ),
            'group'           => __( 'Capstone Modules', 'capstone-pro' ),
            'category'        => __( 'Job Board', 'capstone-pro' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'listing-spotlight/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'listing-spotlight/',
            'icon'            => 'slides.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

// Define Module Interface (admin)
FLBuilder::register_module( 'ListingSpotlightClass', array(
    'general'      => array(
        'title'         => __( 'General', 'capstone-pro' ),
        'sections'      => array(
            'query'  => array(
                'title'         => __( 'Query', 'capstone-pro' ),
                'fields'        => array(
                    'query_type' => array(
                        'type'          => 'select',
                        'label'         => __( 'Type', 'capstone-pro' ),
                        'default'       => 'job_listing',
                        'options'       => array(
                            'job_listing'      => __( 'Jobs', 'capstone-pro' ),
                            'resume'      => __( 'Resumes', 'capstone-pro' )
                        )
                    ),
                    'source' => array(
                        'type'          => 'select',
                        'label'         => __( 'Source', 'capstone-pro' ),
                        'default'       => 'featured',
                        'options'       => array(
                            'featured'  => __( 'Featured Listings', 'capstone-pro' ),
                            'latest'  => __( 'Latest Listings', 'capstone-pro' ),
                            'ids'       => __( 'Custom Defined', 'capstone-pro' )
                        )
                    ),
                    'sort' => array(
                        'type'          => 'select',
                        'label'         => __( 'Sort By', 'capstone-pro' ),
                        'default'       => 'date',
                        'options'       => array(
                            'date'  => __( 'Date', 'capstone-pro' ),
                            'title'       => __( 'Title', 'capstone-pro' ),
                            'author'       => __( 'Author', 'capstone-pro' ),
                            'rand'       => __( 'Random', 'capstone-pro' ),
                        )
                    ),
                    'order' => array(
                        'type'          => 'select',
                        'label'         => __( 'Order', 'capstone-pro' ),
                        'default'       => 'DESC',
                        'options'       => array(
                            'ASC'  => __( 'Ascending', 'capstone-pro' ),
                            'DESC' => __( 'Descending', 'capstone-pro' ),
                        )
                    ),
                    'count'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Count', 'capstone-pro' ),
                        'description'   => 'Define number of listings to show at max.',
                        'default'       => '3',
                    ),
                    'ids'     => array(
                        'type'          => 'text',
                        'label'         => __( 'IDs', 'capstone-pro' ),
                        'description'   => 'A comma seperated IDs of listing. (applicable if "Custom Defined")',
                    ),
                )
            )
        )
    )
) );