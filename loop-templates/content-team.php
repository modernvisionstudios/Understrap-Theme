<?php
/************************
Team Members Posts
************************/
$team_members_title = get_field('team_members_title');
?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
   <div class="row">
       <div class="col-md-4 image" style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat;">
         <div class="image">
           <img src="<?php the_post_thumbnail_url(); ?>"/>
         </div>
       </div>
       <div class="col-md-8">
         <h2><?php the_title(); ?></h2>
         <p><?php echo $team_members_title; ?></p>
         <?php the_content(); ?>
         <a href="#" class="theme-btn-default">Download CV</a>
       </div>
   </div>
</article>
