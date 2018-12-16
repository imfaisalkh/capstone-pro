<?php
  // Helper Variable(s)
  $taxonomy_name = $settings->taxonomy;
  $terms_ids = array_map("intval", explode(",", $settings->terms));
?>
<?php if ($terms_ids) { ?>
<section class="module-wrapper taxonomies-grid">
  <div class="inner">
    <?php foreach ( $terms_ids as $term_id ) : ?>
      <?php
        $term_data = get_term( $term_id, $taxonomy_name );
        $term_icon   = get_field('term_icon', get_term($term_id));
        // $category_icon_width      = get_field('job_category_icon_width', get_term($term_id));
        // $category_icon_style      = ($category_icon_width == 50) ? '' : ' style="width: '. $category_icon_width .'px"';
      ?>
      <?php if ($term_data) { ?>
        <div class="taxonomy-term-<?php echo esc_attr($term_id); ?>">
          <a href="<?php echo get_term_link($term_id); ?>">
            <img class="icon" src="<?php echo esc_url($term_icon); ?>">
            <h4 class="title"><?php echo esc_html($term_data->name); ?></h4>
            <span class="count"><?php echo esc_html($term_data->count); ?> Jobs</span>
          </a>
        </div>
      <?php } ?>
    <?php endforeach; ?>
  </div>
  <p class="more-terms">Looking to browse? <a href="#browsing-panel">See all Categories ⟶</a></p>
</section>
<?php } ?>