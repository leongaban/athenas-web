<?php get_header(); ?>

<?php get_header(); ?>

    <div id="content_container">

        <div id="blog_content">

            <div class="blog_column">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="blog_post">

				<section>
					<article id="post-<?php the_ID(); ?>">
						<header>
							<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<p>Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
							<div class="fb-like" data-send="true" data-width="450" data-show-faces="true" data-font="verdana"></div>
						</header>

						<section>
							<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>
						</section>
						
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

					</article>

					<?php comments_template(); ?>

					<!-- Next and Previous -->
					<!-- <p><?php previous_post_link(); ?> &bull; <?php next_post_link(); ?></p> -->
				</section>

			<?php endwhile; else: ?>

				<section>
					<article>
						<p>Sorry, no posts matched your criteria.</p>
					</article>
				</section>

			<?php endif; ?>

		</div><!-- blog_post -->

	</div><!-- blog_column -->

	<div class="blog_side_bar">
        <?php get_sidebar(); ?>
    </div>

</div><!-- blog_content -->

<?php get_footer(); ?>