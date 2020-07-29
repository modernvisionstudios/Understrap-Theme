<?php

$address_heading = get_sub_field('address_heading');
$address_text = get_sub_field('address_text');

$phone_number_heading = get_sub_field('phone_number_heading');
$phone_number = get_sub_field('phone_number');
$phone_number_label = get_sub_field('phone_number_label');

$hours_heading = get_sub_field('hours_heading');
$hours_text = get_sub_field('hours_text');


$additional_text = get_sub_field('additional_text');
$additional_link = get_sub_field('additional_link');
$additional_link_text = get_sub_field('additional_link_text');

$address_section_padding = get_sub_field('address_section_padding');

?>
<section class="theme-contact-section <?php flex_content_padding($address_section_padding); ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<address>
					<?php if($address_heading): ?>
						<strong><?php echo $address_heading; ?></strong>
					<?php endif; ?>
					<?php if($address_text): ?>
						<?php echo $address_text; ?>
					<?php endif; ?>
					<?php if($phone_number_heading): ?>
				  	<strong><?php echo $phone_number_heading; ?></strong><br/>
					<?php endif; ?>
					<?php if($phone_number): ?>
						<a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number_label; ?></a><br/><br/>
					<?php endif; ?>
					<?php if($hours_heading): ?>
						<strong><?php echo $hours_heading; ?></strong><br/>
					<?php endif; ?>
					<?php if($hours_text): ?>
				  	<?php echo $hours_text; ?>
					<?php endif; ?>
				</address>
					<?php if($additional_text): ?>
						<?php echo $additional_text; ?>
	 				<?php endif; ?>
					<?php if($additional_link): ?>
						<a href="<?php echo $additional_link; ?>" class="theme-btn-default" target="_blank"><?php echo $additional_link_text; ?></a>
	        <?php endif; ?>
			</div>
			<div class="col-md-6">
				<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJmZDixI57_ogRfu5CjtxkgUY&key=AIzaSyCZa2In5-Fmmu9sUZBQt6FkXav026yiSRE" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>
