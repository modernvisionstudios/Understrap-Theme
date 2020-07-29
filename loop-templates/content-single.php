<?php
/************************
Single Post
************************/
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
   <h2><?php the_title(); ?></h2>
   <span class="theme-date"><?php the_time('F  d , Y') ?> | <?php the_author(); ?></span>
   <?php if(has_post_thumbnail()): ?>
     <div class="featured-image" style="background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)), url('<?php the_post_thumbnail_url(); ?>') no-repeat;">
     </div>
   <?php endif; ?>
   <?php the_content(); ?>
</article><!-- #post-## -->
