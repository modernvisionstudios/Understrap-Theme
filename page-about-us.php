<?php
/************************
About Template - Custom
************************/

get_header();
the_post();

$team_members_description = get_field('team_members_description');
$team_members_title = get_field('team_members_title');

?>
<?php get_template_part('global-templates/hero/hero-default'); ?>
<section class="theme-team-members">
	<div class="container">
		<h2>Meet The Team</h2>
		<!-- First Loop -->
		<?php
			$args = array (
				'post_type' => 'team_members',
				'category_name' => 'featured_team_member',
				'posts_per_page' => 1
			);

			$team = new WP_Query($args);
		?>
		<?php while ( $team->have_posts() ) : $team->the_post(); ?>
			<div class="row theme-fade-up">
				<div class="col-sm-12">
					 <div class="row">
					 	 <div class="col-9 col-md-3 theme-post-card">
	             <div class="image">
	             	  <img src="<?php the_post_thumbnail_url(); ?>"/>
	             </div>
					 	 </div>
						 <div class="col-md-9">
	             <h3><?php the_title(); ?></h3>
							 <p><?php the_field('team_members_title'); ?></p>
							 <p><?php the_excerpt(); ?></p>
	             <a href="<?php the_permalink(); ?>" class="theme-btn-default">Read More</a>
					 	 </div>
					 </div>
				</div>
			</div>
	  <?php endwhile; wp_reset_postdata(); ?>
    <!-- Second Loop -->
		<div class="row">
			<?php
				$team_args = array (
					'post_type' => 'team_members',
					'cat' => '-3',
				);

			  $new_query = new WP_Query( $team_args );

		    if($new_query->have_posts()) :
		       while($new_query->have_posts()) : $new_query->the_post(); ?>

				<div class="col-12 col-sm-6 col-md-6 col-lg-3 theme-post-card theme-fade-up team-member-toggle">
					 <div class="image" style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat;">
						 	<div class="theme-post-card-overlay">
						 		<p><?php the_field('team_members_description'); ?></p>
						 	</div>
					 </div>
					 <h4><?php the_title(); ?></h4>
					 <p><?php the_field('team_members_title'); ?></p>
				</div>

      <?php endwhile; wp_reset_postdata(); endif;?>
		</div>
	 </div>
</section>

<?php get_footer();
