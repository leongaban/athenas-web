<?php
/*
Template Name: Blog
*/
global $post;

?>

<?php get_header(); ?>

    <div id="content_container">

        <div id="blog_content">

            <div class="blog_column">

    			<?php if (have_posts()) : ?>
    			<?php while (have_posts()) : the_post(); ?>

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

        				<p><?php the_tags('Tags: ', ', ', '<br>'); ?> Posted in <?php the_category(', '); ?> &bull; <?php edit_post_link('Edit', '', ' &bull; '); ?> <?php comments_popup_link('Comment to this article &raquo;', '1 Response &raquo;', '% Responses &raquo;'); ?></p>
        			
                    </article>

        			<?php endwhile; ?>

        			<nav>
        				<p><?php posts_nav_link('&nbsp;&bull;&nbsp;'); ?></p>
        			</nav>

        			<?php else : ?>

        			<article>
        				<h1>Not Found</h1>
        				<p>Sorry, but the requested resource was not found on this site.</p>
        				<?php get_search_form(); ?>
        			</article>

        			<?php endif; ?>
                </section>

                </div><!-- blog_post -->

            </div><!-- blog_column -->
            
        </div><!-- blog_content -->

        <div class="blog_side_bar">
            <?php get_sidebar(); ?>
        </div>


<?php get_footer(); ?>