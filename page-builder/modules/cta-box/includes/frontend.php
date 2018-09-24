<section class="module-wrapper cta-boxes">

  <?php foreach ($settings->cta_boxes as $cta_box) : ?>

    <?php
      // Helper Variable(s)
      $title = esc_html($cta_box->cta_title);
      $desc = esc_html($cta_box->cta_desc);
      $style = esc_html($cta_box->cta_style);
      $icon = esc_html($cta_box->cta_icon);

      $button_text = esc_html($cta_box->button_text);
      $button_url = (empty($cta_box->button_url)) ? '#' : esc_url($cta_box->button_url);
      $new_window = ($cta_box->new_window == 'yes');

      // Override Variable(s)
      $target = $new_window ? ' target="_blank" ' : '';
    ?>

    <article class="cta-box" data-style="<?php echo $style; ?>">
      <?php if ($icon) { ?>
        <?php echo wp_get_attachment_image($icon, 'full'); ?>
      <?php } ?>
      <?php if ($title) { ?>
        <h4 class="title"><?php echo $title; ?></h4>
      <?php } ?>
      <?php if ($desc) { ?>
        <p class="desc"><?php echo $desc; ?></p>
      <?php } ?>
      <?php if ($button_text) { ?>
        <a class="button" href="<?php echo $button_url; ?>" <?php echo $target; ?>><?php echo $button_text; ?></a>
      <?php } ?>
    </article>

  <?php endforeach; ?>
</section>
