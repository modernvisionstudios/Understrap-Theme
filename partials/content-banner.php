<?php
  $banner_heading = get_sub_field('banner_heading');
  $banner_text = get_sub_field('banner_text');
  $banner_link_type = get_sub_field('banner_link_type');
  $banner_external_link = get_sub_field('banner_external_link');
  $banner_internal_link = get_sub_field('banner_internal_link');
  $banner_file_link = get_sub_field('banner_file_link');
  $banner_link_text = get_sub_field('banner_link_text');

  $banner_padding = get_sub_field('banner_padding');
  $banner_alignment = get_sub_field('banner_alignment');

  $banner_background_type = get_sub_field('banner_background_type');
  $banner_theme_select = get_sub_field('banner_theme_select');
  $banner_background_image = get_sub_field('banner_background_image');


?>
<section class="theme-banner theme-fade-up <?php flex_content_padding($banner_padding); ?> <?php set_theme_colors($banner_background_type, $banner_theme_select); ?>"
  style="text-align:<?php flex_content_alignment($banner_alignment); ?>; background:<?php set_banner_image($banner_background_type, $banner_background_image) ?>;">
  <div class="container">
    <?php if($banner_heading): ?>
      <h2><?php echo $banner_heading; ?></h2>
    <?php endif; ?>
    <?php if($banner_text): ?>
      <p><?php echo $banner_text; ?></p>
    <?php endif; ?>
    <?php
      select_link_type(
        $banner_link_type,
        $banner_internal_link,
        $banner_external_link,
        $banner_file_link,
        $banner_link_text );?>
	</div>
</section>
