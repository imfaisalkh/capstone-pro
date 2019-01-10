<?php

// Define Module Settings
class BlogPostsClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Blog', 'capstone-pro' ),
            'description'     => __( 'It displays blog posts based on defined criteria.', 'capstone-pro' ),
            'group'           => __( 'Capstone Modules', 'capstone-pro' ),
            'category'        => __( 'Basic', 'capstone-pro' ),
            'dir'             => CAPSTONE_PAGE_BUILDER_MODULES_DIR . 'blog-posts/',
            'url'             => CAPSTONE_PAGE_BUILDER_MODULES_URL . 'blog-posts/',
            'icon'            => 'playlist.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

function get_category_terms() {
    
    $blog_terms = get_terms('category');
    
    $blog_terms_options = array();

    foreach ($blog_terms as $term) {
        $blog_terms_options[$term->slug] = $term->name;
    }

    return $blog_terms_options;
}


// Define Module Interface (admin)
FLBuilder::register_module( 'BlogPostsClass', array(
    'general'      => array(
        'title'         => __( 'General', 'capstone-pro' ),
        'sections'      => array(
            'query'  => array(
                'title'         => __( 'Query', 'capstone-pro' ),
                'fields'        => array(
                    'count'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Count', 'capstone-pro' ),
                        'description'   => 'How many posts to display.',
                        'default'       => '-1',
                    ),
                    'category' => array(
                        'type'          => 'select',
                        'label'         => __( 'Category', 'capstone-pro' ),
                        // 'default'       => '-1',
                        'options'       => get_category_terms(),
                        'multi-select'  => true
                    ),
                    'offset'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Offset', 'capstone-pro' ),
                        'description'   => 'How many posts to skip.',
                        'default'       => '0',
                    ),
                    'load_more' => array(
                        'type'          => 'select',
                        'label'         => __( 'Load More', 'capstone-pro' ),
                        'default'       => '0',
                        'options'       => array(
                            '0'      => __( 'Disable', 'capstone-pro' ),
                            '1'      => __( 'Enable', 'capstone-pro' )
                        )
                    ),

                )
            )            
        )
    )
) );