<?php

// Define Module Settings
class BlogPostsClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Blog', 'fl-builder' ),
            'description'     => __( 'It displays blog posts based on defined criteria.', 'fl-builder' ),
            'group'           => __( 'Capstone Modules', 'fl-builder' ),
            'category'        => __( 'Basic', 'fl-builder' ),
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
        'title'         => __( 'General', 'fl-builder' ),
        'sections'      => array(
            'appearance'  => array(
                'title'         => __( 'Appearance', 'fl-builder' ),
                'fields'        => array(
                    'style' => array(
                        'type'          => 'select',
                        'label'         => __( 'Style', 'fl-builder' ),
                        'default'       => 'grid',
                        'options'       => array(
                            'grid'      => __( 'Posts Grid', 'fl-builder' ),
                            'carousel'      => __( 'Posts Carousel', 'fl-builder' )
                        )
                    ),
                )
            ),
            'query'  => array(
                'title'         => __( 'Query', 'fl-builder' ),
                'fields'        => array(
                    'style' => array(
                        'type'          => 'select',
                        'label'         => __( 'Style', 'fl-builder' ),
                        'default'       => 'grid',
                        'options'       => array(
                            'grid'      => __( 'Posts Grid', 'fl-builder' ),
                            'carousel'      => __( 'Posts Carousel', 'fl-builder' )
                        )
                    ),
                    'category' => array(
                        'type'          => 'select',
                        'label'         => __( 'Category', 'fl-builder' ),
                        // 'default'       => '-1',
                        'options'       => get_category_terms(),
                        'multi-select'  => true
                    ),
                    'count'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Count', 'fl-builder' ),
                        'description'   => 'How many posts to display.',
                        'default'       => '-1',
                    ),
                    'offset'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Offset', 'fl-builder' ),
                        'description'   => 'How many posts to skip.',
                        'default'       => '0',
                    ),
                    'load_more' => array(
                        'type'          => 'select',
                        'label'         => __( 'Load More', 'fl-builder' ),
                        'default'       => '0',
                        'options'       => array(
                            '0'      => __( 'Disable', 'fl-builder' ),
                            '1'      => __( 'Enable', 'fl-builder' )
                        )
                    ),

                )
            )            
        )
    )
) );