<?php
/***************************
Single Team Members Template
****************************/
get_header();

?>

<section class="theme-single">

	<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop-templates/content', 'team' ); ?>

		<?php endwhile; // end of the loop. ?>

	</div>

</section>
<?php get_footer(); ?>
