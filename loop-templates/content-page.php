<?php
/************************
Blog Posts
************************/
?>
<article class="theme-post-card theme-post-entry theme-fade-up">
	<div class="row">
		<div class="col-lg-4">
			<div class="theme-post-card-image" style="background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)), url('<?php the_post_thumbnail_url(); ?>') no-repeat;">

			</div>
		</div>
		<div class="col-lg-8">
			<div class="theme-post-card-inner">
				 <h3><?php the_title(); ?></h3>
				 <span class="theme-date"><?php the_time('F  d , Y') ?> | <?php the_author(); ?></span>
				 <p><?php the_excerpt(); ?></p>
				 <a href="<?php the_permalink() ?>" class="theme-btn-default">READ MORE</a>
			</div>
		</div>
	</div>
</article>
