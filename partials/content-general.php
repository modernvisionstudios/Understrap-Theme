<?php
  $general_content_heading = get_sub_field('general_content_heading');
  $general_content_text = get_sub_field('general_content_text');
  $general_content_link_type = get_sub_field('general_content_link_type');
  $general_content_external_link = get_sub_field('general_content_external_link');
  $general_content_internal_link = get_sub_field('general_content_internal_link');
  $general_content_file_link = get_sub_field('general_content_file_link');
  $general_content_link_text = get_sub_field('general_content_link_text');

  $general_content_padding = get_sub_field('general_content_padding');
  $general_content_alignment = get_sub_field('general_content_alignment');

?>
<section
   class="theme-general-content <?php flex_content_padding($general_content_padding); ?>"
   style="text-align:<?php flex_content_alignment($general_content_alignment); ?>">

   <div class="container">
     <?php if($general_content_heading): ?>
       <h2><?php echo $general_content_heading; ?></h2>
     <?php endif; ?>
     <?php if($general_content_text): ?>
       <p><?php echo $general_content_text; ?></p>
     <?php endif; ?>
     <?php
       select_link_type(
         $general_content_link_type,
         $general_content_internal_link,
         $general_content_external_link,
         $general_content_file_link,
         $general_content_link_text
       );
     ?>
   </div>
</section>
