<?php
/************************
Hero Component
************************/
$hero_type = get_field('hero_type');

$hero_image_background = get_field('hero_image_background');
$hero_heading = get_field('hero_heading');
$hero_text = get_field('hero_text');
$hero_link = get_field('hero_link');
$hero_link_title = get_field('hero_link_title');
$hero_link_two = get_field('hero_link_two');
$hero_link_title_two = get_field('hero_link_title_two');
$hero_padding = get_field('hero_padding');

?>
<?php if($hero_type == 'none'): ?>
<!-- No Hero -->
<section class="hero-none <?php flex_content_padding($hero_padding) ?>">
  <div class="container">
    <?php if(!$hero_heading): ?>
      <h1><?php echo get_the_title(); ?></h1>
    <?php else: ?>
      <h1><?php echo $hero_heading; ?></h1>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>
<?php if($hero_type == 'large'): ?>
<!-- Large Hero -->
<section class="hero-default" style="background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('<?php echo $hero_image_background; ?>') no-repeat;">
	 <div class="hero-inner-container">
		 <?php if($hero_heading): ?>
		 	<h1><?php echo $hero_heading; ?></h1>
		 <?php endif; ?>
		 <?php if($hero_text): ?>
		   <p><?php echo $hero_text; ?></p>
		 <?php endif; ?>
     <div class="hero-btn-wrapper">
       <?php if($hero_link): ?>
         <a href="<?php echo $hero_link ?>" class="theme-btn-default"><?php echo $hero_link_title; ?></a>
       <?php endif; ?>
       <?php if($hero_link_two): ?>
         <a href="<?php echo $hero_link_two ?>" class="theme-btn-default"><?php echo $hero_link_title_two; ?></a>
       <?php endif; ?>
     </div>
	 </div>
</section>
<?php endif; ?>
<!-- Small Hero -->
<?php if($hero_type == 'small'): ?>
	<section class="hero-inner-page" style="background:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url('<?php echo $hero_image_background; ?>') no-repeat;">
		 <div class="container">
			 <?php if($hero_heading): ?>
			 	<h1><?php echo $hero_heading; ?></h1>
			 <?php endif; ?>
			 <?php if($hero_text): ?>
			   <p><?php echo $hero_text; ?></p>
			 <?php endif; ?>
			 <?php if($hero_link): ?>
			 	 <a href="<?php echo $hero_link ?>" class="theme-btn-default"><?php echo $hero_link_title; ?></a>
			 <?php endif; ?>
       <?php if($hero_link_two): ?>
         <a href="<?php echo $hero_link_two ?>" class="theme-btn-default"><?php echo $hero_link_title_two; ?></a>
       <?php endif; ?>
		</div>
	</section>
<?php endif; ?>
