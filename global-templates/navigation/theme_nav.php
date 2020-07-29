<?php
/************************
Navigation Component
************************/
$social_media_links = get_field('social_media_links', 'options');
$utility_phone_number = get_field('utility_phone_number', 'options');
$utility_email = get_field('utility_email', 'options');
$utility_address_link = get_field('utility_address_link', 'options');
$utility_address_label = get_field('utility_address_label', 'options');

?>
<div class="theme-mobile-nav">
  <div class="theme-inner-mobile-nav">
    <?php wp_nav_menu(
      array(
        'theme_location'  => 'primary',
        'fallback_cb'     => '',
        'menu_id'         => 'main-menu',
        'depth'           => 2,
      )
    ); ?>
  </div>
</div>
<header class="theme-utility-nav">
  <div class="container theme-utility-flex">

    <div class="theme-left-utility">
      <?php if($social_media_links): ?>
        <ul id="utility-left">
          <?php foreach($social_media_links as $link): ?>
            <li>
              <a href="<?php echo $link['social_media_link']; ?>" target="_blank" rel="nofollow noreferrer">
                <?php echo $link['social_media_icon']; ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
    <div class="theme-right-utility">
      <ul id="utility-right" class="utility-right">
        <?php if($utility_phone_number): ?>
          <li><a href="tel:<?php echo $utility_phone_number; ?>"><i class="fas fa-phone-alt"></i> <span class="utility-label"><?php echo $utility_phone_number; ?></span></a></li>
        <?php endif; ?>
        <?php if($utility_email): ?>
          <li><a href="mailto:<?php echo $utility_email; ?>"><i class="far fa-envelope"></i> <span class="utility-label"><?php echo $utility_email; ?></span></a></li>
        <?php endif; ?>
        <?php if($utility_address_link || $utility_address_label): ?>
          <li><a href="<?php echo $utility_address_link; ?>" target="_blank"><i class="fas fa-map-marker-alt"></i> <span class="utility-label"><?php echo $utility_address_label; ?></span></a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</header>
<header class="theme-header">
    <!-- Main Nav Container -->
    <div class="theme-header-container">
      <!-- Site Logo -->
      <div class="branding">
         <?php the_custom_logo(); ?>
      </div>
      <!-- Mobile Nav Button -->
      <button class="hamburger hamburger--spring theme-mobile-nav-button" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
       <!-- Main Navbar -->
      <nav class="theme-navbar">
          <!-- Menu Goes Here -->
          <?php wp_nav_menu(
            array(
              'theme_location'  => 'primary',
              'fallback_cb'     => '',
              'menu_id'         => 'main-menu',
              'depth'           => 2,
            )
          ); ?>
      </nav>
      <?php //get_search_form(); ?>
    </div>
</header>
