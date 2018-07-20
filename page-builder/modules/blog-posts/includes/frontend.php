<?php

    // WP_QUERY Arguments
    $blog_args = array(
      'post_type'     => 'post',
      'posts_per_page'    => $settings->count,
      'tax_query'       => array(),
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
  <?php if ( $blog_query->have_posts() ) : while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
  <?php endwhile; else: ?>
    <p>No posts found.</p>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
</div>

<div class="load-more"><a href="#">Load More</a></p>
