<?php
// Helper Variable(s)
$thumbnail_size = 'blog-widget-post';
?>

<h3 class="title">Editor's Choice</h3>

<div class="posts-grid" data-layout="hybrid">
    <?php
    // WP_QUERY Arguments
    $blog_args = array(
    'post_type'       => 'post',
    'posts_per_page'  => 1,
    'offset'          => 1,
    );

    $blog_query = new WP_Query($blog_args);
    ?>

    <?php if ( $blog_query->have_posts() ) : while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
        <?php include(locate_template( 'content.php' )); ?>
    <?php endwhile; else: ?>
        <p>No posts found.</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>


