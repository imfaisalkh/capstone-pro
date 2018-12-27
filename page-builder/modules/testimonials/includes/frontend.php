<section class="module-wrapper testimonials main-carousel">

  <?php foreach ($settings->testimonials as $testimonial) : ?>

    <?php
      // Helper Variable(s)
      $desc = esc_html($testimonial->testimonial_desc);
      $title = esc_html($testimonial->testimonial_title);
      $subtitle = esc_html($testimonial->testimonial_subtitle);
    ?>

    <article class="testimonial carousel-cell">
      <?php if ($desc) { ?>
        <p class="desc">"<?php echo $desc; ?>"</p>
      <?php } ?>
      <?php if ($title) { ?>
        <h4 class="title"><?php echo $title; ?></h4>
      <?php } ?>
      <?php if ($subtitle) { ?>
        <span class="subtitle"><?php echo $subtitle; ?></span>
      <?php } ?>
    </article>

  <?php endforeach; ?>
</section>
