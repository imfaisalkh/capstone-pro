<section class="module-wrapper pricing-plans" data-col="<?php echo $settings->per_line; ?>">

  <?php foreach ($settings->pricing_plans as $pricing_plan) : ?>

    <?php
      // Helper Variable(s)
      $title = esc_html($pricing_plan->pricing_title);
      $tagline = esc_html($pricing_plan->tagline);
      $price_tag = htmlspecialchars_decode(wp_kses_post($pricing_plan->price_tag));
      $highlight = ($pricing_plan->highlight == 'yes');
      $pricing_content = $pricing_plan->pricing_content;

      $button_text = esc_html($pricing_plan->button_text);
      $pricing_url = (empty($pricing_plan->pricing_url)) ? '#' : esc_url($pricing_plan->pricing_url);
      $new_window = ($pricing_plan->new_window == 'yes');

      // Override Variable(s)
      $active = $highlight ? ' highlight ' : '';
      $target = $new_window ? ' target="_blank" ' : '';
    ?>


    <article class="pricing-panel">
      <div class="inner <?php echo $active;?>">
        <?php if ($title) { ?>
          <h3 class="title"><?php echo $title; ?></h3>
        <?php } ?>
        <div class="pricing">
          <?php if ($price_tag) { ?>
            <div class="price"><span>$</span><?php echo wp_kses_post($price_tag); ?></div>
          <?php } ?>
          <?php if ($tagline) { ?>
            <span class="caption"><?php echo $tagline; ?></span>
          <?php } ?>
        </div>
        <div class="features">
          <p><?php echo $pricing_content; ?></p>
        </div>
        <?php if ($button_text) { ?>
          <a class="button-default" href="<?php echo $pricing_url; ?>" <?php echo $target; ?>><?php echo $button_text; ?></a>
        <?php } ?>
      </div>
    </article>

  <?php endforeach; ?>

</section>