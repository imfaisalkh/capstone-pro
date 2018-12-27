<header class="module-header">
  <div class="text">
    <h3 class="title"><?php echo $settings->title; ?></h3>
    <?php if ($settings->subtitle) { ?>
      <p class="subtitle"><?php echo $settings->subtitle; ?></p>
    <?php } ?>
  </div>
  <?php if ($settings->url) { ?>
    <a class="link" href="<?php echo $settings->url; ?>">
      <?php echo $settings->text; ?>
      <img class="icon svg-icon" src="<?php echo plugins_url( '/', __FILE__ ) . '../img/arrow-right.svg'; ?>" alt="<?php esc_html_e('More Link', 'capstone'); ?>">
    </a>
  <?php } ?>
</header>
