<?php
/************************
Front Page Template
************************/
get_header();

$statistic_background_image = get_field('statistic_background_image');

?>
<?php get_template_part('global-templates/hero/hero-default'); ?>
<section class="theme-stat-boxes" style="background:url('<?php echo $statistic_background_image; ?>') no-repeat;">
   <div class="container">
     <div class="row">
       <?php
         if( have_rows('statistics') ):
           while ( have_rows('statistics') ) : the_row();

           $statistic_number = get_sub_field('statistic_number');
           $statistic_label = get_sub_field('statistic_label');
       ?>

       <?php if($statistic_number || $statistic_label ): ?>
         <div class="col-md-3 d-flex align-items-center justify-content-center">
           <h2 class="theme-stat">
            <span class="theme-stat-numbers"><?php echo $statistic_number; ?>+</span>
            <span class="theme-stat-label"><?php echo $statistic_label; ?></span>
           </h2>
         </div>
       <?php endif; ?>

       <?php
         endwhile;
         endif;
       ?>
     </div>
   </div>
</section>
<?php get_footer(); ?>
