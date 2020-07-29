<?php
/***************************
Single Template
****************************/
$posts_banner_title = get_field('posts_banner_title', 'options');
$posts_banner_text = get_field('posts_banner_text', 'options');
$posts_banner_link_type = get_field('posts_banner_link_type', 'options');
$posts_banner_external_link = get_field('posts_banner_external_link', 'options');
$posts_banner_internal_link = get_field('posts_banner_internal_link', 'options');
$posts_banner_file_link = get_field('posts_banner_file_link', 'options');
$posts_banner_link_text = get_field('posts_banner_link_text', 'options');
$posts_banner_background_image = get_field('posts_banner_background_image', 'options');

get_header();

?>

<section class="theme-single">

	<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop-templates/content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>
	</div>

</section>
<?php if($posts_banner_title || $posts_banner_text): ?>
<section class="theme-banners theme-fade-up" style="background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('<?php echo $posts_banner_background_image; ?>') no-repeat;">
	<div class="container">
		<h2><?php echo $posts_banner_title;  ?></h2>
		<p><?php echo $posts_banner_text;  ?></p>
		<?php
			select_link_type(
				$posts_banner_link_type,
				$posts_banner_external_link,
				$posts_banner_internal_link,
				$posts_banner_file_link,
				$posts_banner_link_text
			);
		?>
	</div>
</section>
<?php endif; ?>
<?php
	$prev_post = get_previous_post();
	$next_post = get_next_post();
?>
<div class="nav-links">
	<div class="container">
		<div class="row">
			<div class="col-6 col-md-6">
				<?php if ( is_a( $prev_post , 'WP_Post' ) ) : ?>
						<a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo '<i class="fas fa-caret-left arrow-left"></i>&nbsp; '; ?>Previous</a>
				<?php endif; ?>
			</div>
			<div class="col-6 col-md-6 d-flex justify-content-end">
				<?php if ( is_a( $next_post , 'WP_Post' ) ) : ?>
						<a href="<?php echo get_permalink( $next_post->ID ); ?>">Next<?php echo ' &nbsp;<i class="fas fa-caret-right arrow-right"></i>'; ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
