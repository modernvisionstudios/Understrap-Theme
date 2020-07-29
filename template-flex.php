<?php
/**********************************
Template Name: Flex
***********************************/

get_header();

?>
<?php get_template_part('global-templates/hero/hero-default'); ?>
<?php // open the WordPress loop
  if (have_posts()) : while (have_posts()) : the_post();

    // are there any rows within within our flexible content?
    if( have_rows('dynamic_sections') ):

      // loop through all the rows of flexible content
      while ( have_rows('dynamic_sections') ) : the_row();

        // General List Repeater
        if( get_row_layout() == 'general_content' ) {
          get_template_part('partials/content', 'general');
        }

        // Gallery Section
        if( get_row_layout() == 'gallery' ) {
          get_template_part('partials/content', 'gallery');
        }

        // Gallery Section
        if( get_row_layout() == 'list' ) {
          get_template_part('partials/content', 'list');
        }

        // Form Components
        if( get_row_layout() == 'form' ) {
          get_template_part('partials/content', 'form');
        }

        // Banner Components
        if( get_row_layout() == 'banner' ) {
          get_template_part('partials/content', 'banner');
        }

        // Banner Components
        if( get_row_layout() == 'contact' ) {
          get_template_part('partials/content', 'address');
        }


        endwhile; // close the loop of flexible content
      endif; // close flexible content conditional
    endwhile;
  endif; // close the WordPress loop
?>



<?php get_footer(); ?>
