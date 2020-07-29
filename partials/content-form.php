<?php

$form = get_sub_field('select_form');
$form_title = get_sub_field('');
$form_section_padding = get_sub_field('form_section_padding');

?>

<section class="theme-form <?php flex_content_padding($form_section_padding); ?>">
  <div class="container">
    <?php echo do_shortcode('[gravityform id="' . $form . '" title="false" description="false" ajax="true"]'); ?>
  </div>
</section>
