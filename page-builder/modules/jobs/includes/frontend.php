<?php
// Helper Variable(s)
// $count = $settings->count ? $settings->count : '';
// var_dump('[jobs '. $count .']');
?>
<main class="module-wrapper jobs-list">
  <?php echo do_shortcode('[jobs per_page="'. $settings->count .'"]'); ?>
</main>