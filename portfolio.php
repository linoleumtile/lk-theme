<?php
/*
Template Name: Portfolio
*/
get_header();
?>
<div class="page-header">
<h1>Portfolio</h1>
	</div>
		<div class="clicky row col-md-12 container">
			<h2>Storyboarding</h2>
			<div id="storyboarding">
				<?php
				query_posts('cat=4');
				while (have_posts()) : the_post();
				the_content();
				endwhile;
	 			?>
			</div><!--storyboarding-->
		</div>
		<div class="row col-md-12 container">
			<h2>Life drawing</h2>
			<div id="life-drawing">
				<?php
				query_posts('cat=5');
				while (have_posts()) : the_post();
				the_content();
				endwhile;
				?>
			</div><!--life drawing-->
		</div>
</div>
<?php get_footer(); ?>