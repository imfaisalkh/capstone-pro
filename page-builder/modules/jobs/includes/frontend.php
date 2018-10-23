<?php
// Helper Variable(s)
// $count = $settings->count ? $settings->count : '';
// var_dump('[jobs '. $count .']');
?>
<main class="module-wrapper jobs-list">
  <?php echo '[jobs per_page="'. $settings->count .'" orderby="'. $settings->order_by .'" order="'. $settings->order .'" show_filters="false" categories="'. $settings->categories .'" job_types="'. $settings->job_types .'" location="'. $settings->location .'" keywords="'. $settings->keywords .'" post_status="'. $settings->post_status .'" show_pagination="'. $settings->show_pagination .'" ]'; ?>
</main>