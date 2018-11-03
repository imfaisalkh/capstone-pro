<?php
    // var_dump($instance['ids']);
    $listing_IDs = $instance['ids'];

  // Helper Variable(s)
  $args = array(
    'posts_per_page'    => 750, // arbitrary value to differentiate it from main [jobs] query
  );

  // append listings IDs filter
  add_filter('get_job_listings_query_args', function($query_args) use($listing_IDs){
    // var_dump($query_args);
    if ($query_args['posts_per_page'] == 750) {
      $query_args['post__in'] = array_map('intval', explode(',', $listing_IDs));
      return $query_args;
    } else {
      return $query_args;
    }
  });

  // custom query variable
  $listing_query = get_job_listings($args);

?>
<section class="module-wrapper listing-spotlight">
  <h3 class="module-title"><?php echo esc_html__('Listing Spotlight', 'capstone'); ?></h3>
  <div class="main-carousel">
    <?php if ($listing_query->have_posts()) { ?>
      <?php while( $listing_query->have_posts() ) : $listing_query->the_post(); ?>
        <?php
          // Helper Variavle(s)
          $job_categories = wp_get_post_terms( get_the_ID(), 'job_listing_category' );
          $spotlight_image = get_field('listing_spotlight_image');
        ?>
        <article class="listing-entry carousel-cell">
          <div class="image">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo $spotlight_image; ?>" alt="<?php printf(esc_html__('Open Position at %s', 'capstone'), get_the_company_name()); ?>">
            </a>
          </div>
          <div class="desc">
            <span class="category"><?php echo $job_categories[0]->name; ?></span>
            <a href="<?php the_permalink(); ?>">
              <h4 class="title"><?php the_title(); ?></h4>
            </a>
            <span class="location"><?php the_job_location(); ?></span>
          </div>
          <div class="action">
            <a href="#add-bookmark-<?php the_ID(); ?>" class="add-bookmark">Save for later &xrarr;</a>
          </div>
          <?php get_template_part('includes/popup-add-bookmark.inc' ); ?>
        </article>
      <?php endwhile; ?>
      <?php } else { ?>
        <p>There is no job found with mentioned criteria.</p>
      <?php } ?>
    <?php wp_reset_postdata(); ?>
  </div>
</section>