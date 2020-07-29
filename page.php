<?php
/************************
Default Page Template
************************/
get_header();
the_post();

?>

<section class="theme-default-page">
	<div class="container">
		<h2><?php echo get_the_title(); ?></h2>
		<?php echo get_the_content(); ?>
	</div>
</section>

<?php get_footer();
