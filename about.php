<?php
/*
Template Name: About
*/
get_header();
?>
<div class="page-header">
<h1>About</h1>
	</div>
		<div class="clicky row col-md-12 container">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		      <p><?php the_content(__('(more...)')); ?></p>
		      <hr>
		      <?php endwhile; else: ?>
		      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		      <?php endif; ?>
	    </div>
	</div>

<?php get_footer(); ?>