<?php
/************************
Posts Template
************************/
get_header();

?>

<section class="theme-posts-archive">
	<div class="container">
		<h1>Blog</h1>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'loop-templates/content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

			<?php understrap_pagination(); ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>
