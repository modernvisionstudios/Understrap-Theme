<?php
  $list_left = get_sub_field('list_left');
  $list_right = get_sub_field('list_right');
  $list_section_padding = get_sub_field('list_section_padding');

  $list_section_link_type = get_sub_field('list_section_link_type');
  $list_section_external_link = get_sub_field('list_section_external_link');
  $list_section_internal_link = get_sub_field('list_section_internal_link');
  $list_section_file_link = get_sub_field('list_section_file_link');
  $list_section_link_title = get_sub_field('list_section_link_title');
?>
<section class="theme-list <?php flex_content_padding($list_section_padding); ?>">
  <div class="container">
    <div class="row">
      <?php if($list_left): ?>
        <div class="col-md-6">
           <?php echo $list_left; ?>
        </div>
      <?php endif; ?>
      <?php if($list_right): ?>
        <div class="col-md-6">
           <?php echo $list_right; ?>
        </div>
      <?php endif; ?>
    </div>
    <?php
      select_link_type(
        $list_section_link_type,
        $list_section_external_link,
        $list_section_internal_link,
        $list_section_file_link,
        $list_section_link_title
      );
    ?>
  </div>
</section>
