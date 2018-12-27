<section class="module-wrapper pricing-faqs">
  <?php if ( $settings->faqs ) { ?>
    <h3 class="title"><?php echo $settings->title; ?></h3>
  <?php } ?>

  <div class="questions-list">
    <?php foreach ($settings->faqs as $faq) : ?>

      <?php
        // Helper Variable(s)
        $question = esc_html($faq->faq_question);
        $answer = $faq->faq_answer;
      ?>

      <article class="question">
        <h4><?php echo $question; ?></h4>
        <p><?php echo $answer; ?></p>
      </article>

    <?php endforeach; ?>
  </div>
</section>
