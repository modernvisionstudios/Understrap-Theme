
<?php
$images = get_sub_field('gallery');
$gallery_section_padding = get_sub_field('gallery_section_padding');

if( $images ): ?>
<section class="theme-gallery <?php flex_content_padding($gallery_section_padding); ?>">
   <div class="container">
      <ul id="lightgallery" class="row">
          <?php foreach( $images as $image ): ?>
              <li data-src="<?php echo esc_url($image['url']); ?>" class="col-6 col-md-4 theme-fade-up">
                <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </li>
          <?php endforeach; ?>
      </ul>
  </div>
</section>
<?php endif; ?>
