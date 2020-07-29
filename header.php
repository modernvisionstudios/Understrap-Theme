<?php
/************************
Header
************************/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Call Navigation -->
<div class="theme-site-wrapper">
	<?php get_template_part('global-templates/navigation/theme_nav' ); ?>
