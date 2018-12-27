<section class="module-cta-banner">
  <div class="text">
    <h3 class="title"><?php echo $settings->title; ?></h3>
    <?php if ($settings->subtitle) { ?>
      <p class="subtitle"><?php echo $settings->subtitle; ?></p>
    <?php } ?>
  </div>
  <?php if ($settings->url) { ?>
    <a class="button button-default" href="<?php echo $settings->url; ?>">
      <?php echo $settings->text; ?>
    </a>
  <?php } ?>
</section>
