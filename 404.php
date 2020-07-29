<?php
/************************
404 Error Template
************************/

get_header();
?>

<section class="theme-error-404">

	<div class="theme-error-inner">
	  <h2>404 ERROR</h2>
		<p>We cant spot the page you are looking for!</p>
    <a href="<?php echo site_url(); ?>" class="theme-btn-default">Return Home</a>
	</div>
</section>

<?php get_footer();
