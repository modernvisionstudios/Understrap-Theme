<?php
/**********************************
Template Name: Mezzanine Template
***********************************/
get_header();
the_post();

$event_space_image = get_field('event_space_image');
$event_space_title = get_field('event_space_title');
$event_space_subtitle = get_field('event_space_subtitle');
$event_space_description = get_field('event_space_description');
$event_space_downloads = get_field('event_space_downloads');
$event_space_bottom_description = get_field('event_space_bottom_description');

?>

<section class="theme-mezzanine-template">
	<div class="container">
		<div class="row">
			<?php if($event_space_image): ?>
			  <div class="col-md-6 theme-mezzanine-image">
           <div class="theme-mezzanine-image" style="background:url('<?php echo $event_space_image; ?>') no-repeat;">

           </div>
			  </div>
			<?php endif; ?>
			<div class="col-md-6">
				<?php if($event_space_title): ?>
			  	<h1><?php echo $event_space_title; ?></h1>
				<?php endif; ?>
				<?php if($event_space_subtitle): ?>
					<p class="theme-mezzanine-subtitle"><?php echo $event_space_subtitle; ?></p>
				<?php endif; ?>
				<?php if($event_space_description): ?>
					<?php echo $event_space_description; ?>
				<?php endif; ?>

				<div class="theme-btn-m-group">
					<?php
						if( have_rows('event_space_downloads') ):
							while ( have_rows('event_space_downloads') ) : the_row();

							$event_space_download = get_sub_field('event_space_download');
							$event_space_download_button_text = get_sub_field('event_space_download_button_text');
					?>

						<a href="<?php echo $event_space_download; ?>" class="theme-btn-default" target="_blank">
							<?php echo $event_space_download_button_text; ?>
						</a>

					<?php
						endwhile;
						endif;
					?>
				</div>

				<?php if($event_space_bottom_description): ?>
					<?php echo $event_space_bottom_description; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer();
