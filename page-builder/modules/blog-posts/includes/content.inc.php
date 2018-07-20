	<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>

			<?php if ( has_post_thumbnail() ) { ?>
				<figure class="entry-media">
					<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
				</figure>
			<?php } ?>

			<header class="entry-header">
				<p class="date"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_time('jS F, Y'); ?></a></p>
				<h3 class="title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
			</header>

			<div class="entry-desc">
				<?php the_excerpt( esc_html__( 'Read More &rarr;', 'wpscout' ) ); ?>
				<div class="read-more">
					<a href="<?php the_permalink(); ?>">Read More</a>
				</div>
			</div>

	</article>
