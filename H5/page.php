<?php get_header(); ?>

<!-- Body Content -->
<div id="content_container">

	<?php while(the_flexible_field("layout")): ?>
 
	    <?php if(get_row_layout() == "2_column"): // layout: Content ?>


	        <!-- Body Content -->
            <!-- <div id="content_container"> -->

               <div class="two_col_layout">

                    <div class="left_column column_copy">
                    	<?php the_sub_field("left_column"); ?>
                    </div><!-- left_column -->

                    <div class="right_column">
                        <?php the_sub_field("right_column"); ?>
                    </div><!-- right_column -->


                </div><!-- two_col_layout -->
	

		<!-- line 29 add 3 column -->

		<?php endif; ?>
	 
	<?php endwhile; ?>


<?php get_footer(); ?>

