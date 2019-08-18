<?php
  // Helper Variable(s)
  $taxonomy_name = $settings->taxonomy;
  $taxonomy_object = get_taxonomy($taxonomy_name);
  if (!$settings->terms) {
    $terms_ids = get_terms( $taxonomy_name, array('fields' => 'ids') );
  } else {
    $terms_ids = array_map('intval', explode(',', $settings->terms));
  }
  $terms_limit = $settings->terms_count ? $settings->terms_count : 6;

  switch ($taxonomy_name) {
    case 'job_listing_category':
    case 'job_listing_type':
    case 'job_listing_tag':
    case 'job_listing_company':
    case 'job_listing_industry':
    case 'job_listing_region':
      $singular_name = esc_html__('job', 'capstone-pro');
      $plural_name = esc_html__('jobs', 'capstone-pro');
      break;
    case 'resume_category':
    case 'resume_skill':
    case 'resume_region':
      $singular_name = esc_html__('resume', 'capstone-pro');
      $plural_name = esc_html__('resumes', 'capstone-pro');
      break;
    default:
      $singular_name = esc_html__('entry', 'capstone-pro');
      $plural_name = esc_html__('entries', 'capstone-pro');
}

  $count = count($terms_ids);
  $has_more = $count > $terms_limit;
  $has_more_class = $has_more ? 'has-more' : '';

  global $taxonomy_grid_name;
  if ($has_more) {
    $taxonomy_grid_name = $taxonomy_name;
  }
?>
<?php $i = 0; ?>
<?php if (taxonomy_exists($taxonomy_name)) { ?>
  <?php if ($terms_ids) { ?>
    <section class="module-wrapper taxonomies-grid <?php echo esc_attr($has_more_class); ?>">
      <div class="inner">
        <?php foreach ( $terms_ids as $term_id ) : ?>
          <?php
            $term_data = get_term( $term_id, $taxonomy_name );
            $term_icon = get_field('term_icon', get_term($term_id));
            $category_icon_size = get_field('term_icon_size', get_term($term_id));
            $category_icon_style = ($category_icon_size == 1) ? '' : ' style="transform: scale('. $category_icon_size .'); "';
          ?>
          <?php if ($term_data) { ?>
            <div class="taxonomy-term-<?php echo esc_attr($term_id); ?>">
              <a href="<?php echo get_term_link($term_id); ?>">
                <img class="icon" src="<?php echo esc_url($term_icon); ?>" <?php echo $category_icon_style; ?>>
                <h4 class="title"><?php echo esc_html($term_data->name); ?></h4>
                <span class="count"><?php echo esc_html($term_data->count) .' '. $plural_name; ?></span>
              </a>
            </div>
          <?php } ?>
          <?php if (++$i == $terms_limit) break; ?>
        <?php endforeach; ?>
      </div>
      <?php if ($has_more) { ?>
        <p class="more-link"><?php echo esc_html__('Looking for more?', 'capstone-pro'); ?> <a href="#taxonomy-<?php echo $taxonomy_name; ?>"><?php printf(esc_html__('See all %s ', 'capstone-pro'), $taxonomy_object->labels->name); ?> <em>&#8594;</em></a></p>
      <?php } ?>
    </section>
  <?php } else { ?>
    <p><?php echo esc_html__('No term defined or assigned a listing.', 'capstone-pro'); ?></p>
  <?php } ?>
<?php } else { ?>
  <p><?php echo esc_html__('Taxonomy does not exist.', 'capstone-pro'); ?></p>
<?php } ?>