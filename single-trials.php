<?php
/***************************
Single Trials Template
****************************/
$trial_banner_title = get_field('trial_banner_title', 'options');
$trial_banner_text = get_field('trial_banner_text', 'options');
$trial_banner_link_type = get_field('trial_banner_link_type', 'options');
$trial_banner_external_link = get_field('trial_banner_external_link', 'options');
$trial_banner_internal_link = get_field('trial_banner_internal_link', 'options');
$trial_banner_file_link = get_field('trial_banner_file_link', 'options');
$trial_banner_link_text = get_field('trial_banner_link_text', 'options');
$trial_banner_background_image = get_field('trial_banner_background_image', 'options');

get_header();

?>

<section class="theme-single">

	<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop-templates/content', 'trials' ); ?>

		<?php endwhile; // end of the loop. ?>

	</div>
</section>
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
<section class="theme-trial-form" style="background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)), url('<?php echo $trial_banner_background_image; ?>') no-repeat;">
	<div class="container">
		<h2>Apply For This Trial</h2>
		<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49"]');  ?>
	</div>
</section>
<?php get_footer(); ?>
