<?php
/************************
Archive Template
************************/
get_header();

?>

<section class="theme-posts-archive">
	<div class="container">
		<h1><?php post_type_archive_title(); ?></h1>
		<ul class="row">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'loop-templates/content', 'archive' ); ?>

			<?php endwhile; // end of the loop. ?>
		</ul>
	</div>
	<div class="container theme-faqs">
		<h2>Faq's</h2>
		<div class="row">
			<?php
				if( have_rows('faqs', 'options') ):
					while ( have_rows('faqs', 'options') ) : the_row();

					$faqs_question = get_sub_field('faqs_question', 'options');
					$faqs_answer = get_sub_field('faqs_answer', 'options');
			?>

			<div class="theme-faq-listing col-12">
				<?php if($faqs_question): ?>
					<h3><?php echo $faqs_question; ?></h3>
				<?php endif; ?>
				<?php if($faqs_answer): ?>
					<?php echo $faqs_answer; ?>
				<?php endif; ?>
			</div>

			<?php
				endwhile;
				endif;
			?>

		</div>
	</div>
</section>

<?php get_footer(); ?>
