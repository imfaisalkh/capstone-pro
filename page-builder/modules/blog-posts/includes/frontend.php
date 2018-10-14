<?php

    // WP_QUERY Arguments
    $blog_args = array(
      'post_type'       => 'post',
      'posts_per_page'  => $settings->count,
      'tax_query'       => array(),
      'paged'           => get_query_var('page') ? get_query_var('page') : 1, // https://wordpress.stackexchange.com/questions/180784/what-is-the-difference-between-paged-and-page
    );

    // Check if category(ies) is/are defined, if yes, inject it in 'tax_query' array.
    if ($settings->category) {

      $category_query = array(
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms' => $settings->category
      );

      array_push($blog_args['tax_query'], $category_query);

    }

    $blog_query = new WP_Query($blog_args);

    $wrapper_class = ($settings->style == 'carousel') ? ' is-full-width' : '';

?>

<div class="module-wrapper posts-grid <?php echo $wrapper_class; ?>" data-layout="<?php echo $settings->style; ?>">
  <?php
    if ( $blog_query->have_posts() ) :
      $counter = 1; $excerpt_length = 'medium';
      while( $blog_query->have_posts() ) : $blog_query->the_post();
        include( locate_template( 'content-post.php' ) ); 
        $counter++;
      endwhile;
    else:
      get_template_part( 'content', 'none' );
    endif;
  ?>	
</div>

<?php if ( !(get_query_var('page') >= $blog_query->max_num_pages) && $settings->load_more ) { ?> 
  <div class="load-more"><?php echo get_next_posts_link( esc_html__('Load More', 'capstone'), $blog_query->max_num_pages ); ?></div>
  <div class="page-load-status">
    <p class="infinite-scroll-last"><?php esc_html_e('End of content', 'capstone'); ?></p>
    <p class="infinite-scroll-error"><?php esc_html_e('No more pages to load', 'capstone'); ?></p>
  </div>
<?php } ?>

<?php wp_reset_postdata(); ?>
