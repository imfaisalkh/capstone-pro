<?php
// Helper Variable(s)
  $args = array(
    'posts_per_page'    => $settings->count,
  );
  $listing_query = get_job_listings($args);

// $count = $settings->count ? $settings->count : '';
// var_dump('[jobs '. $count .']');
?>
<main class="module-wrapper listing-spotlight main-carousel">
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
            <img src="<?php echo $spotlight_image; ?>">
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
          <a href="#">Apply for this job</a>
        </div>
      </article>
    <?php endwhile; ?>
  <?php } ?>
  <?php wp_reset_postdata(); ?>
</main>