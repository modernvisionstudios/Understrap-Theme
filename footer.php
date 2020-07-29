<?php
/************************
Footer
************************/

$social_media_links = get_field('social_media_links', 'options');

$footer_title = get_field('footer_title', 'options');
$footer_text = get_field('footer_text', 'options');
$footer_copyright = get_field('footer_copyright', 'options');

?>
<footer class="theme-footer">
  <div class="theme-footer-container">
	<div class="container">
		<div class="row d-flex justify-content-between">
			<div class="col-md-4 d-flex justify-content-center justify-content-md-start">
				<?php if($footer_title || $footer_text): ?>
					<address class="theme-footer-address">
						<p class="footer-address-header"><?php echo $footer_title; ?></p>
						<?php echo $footer_text; ?>
					</address>
				<?php endif; ?>
			</div>
      <div class="col-md-4 d-flex flex-nowrap justify-content-center justify-content-md-end">
        <?php if($social_media_links): ?>
          <div class="theme-footer-social-wrapper">
    					<ul class="theme-footer-social">
                <li>Stay Updated!</li>
    						<?php foreach($social_media_links as $link): ?>
    							<li>
    								<a href="<?php echo $link['social_media_link']; ?>" target="_blank" rel="nofollow noreferrer">
    									<?php echo $link['social_media_icon']; ?>
    								</a>
    							</li>
    						<?php endforeach; ?>
    					</ul>
              <?php wp_nav_menu(
                array(
                  'theme_location'  => 'footer-menu',
                  'fallback_cb'     => '',
                  'menu_id'         => 'footer-menu',
                  'depth'           => 2,
                )
              ); ?>
              <p class="theme-copyright">
    						&copy; <?php echo $footer_copyright; ?> <?php echo date("Y"); ?>
    					</p>
          </div>
				<?php endif; ?>
      </div>
		</div>
	</div>
</div>
</footer>
<div class="theme-cookie-banner">
  <div class="container">
    <div class="theme-cookie-banner-inner">
      <span class="theme-cookie-message">
          We use cookies on this site to enhance user experience
      </span>
      <span class="theme-cookie-btn-wrapper">
        <a href="#" class="accept-cookie">Accept</a>
      </span>
    </div>
  </div>
</div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
 jQuery(document).ready(function(){

   jQuery('#lightgallery').lightGallery();

   // Drop Down menu

   jQuery(".theme-navbar #main-menu .menu-item-has-children").mouseover(function(){
     jQuery(this).children('.sub-menu').show();
   });

   jQuery(".theme-navbar #main-menu .menu-item-has-children").mouseleave(function(){
     jQuery(this).children('.sub-menu').hide();
   });

   jQuery(".theme-navbar #main-menu .menu-item-has-children sub-menu").mouseover(function(){
     jQuery(this).show();
   });

   jQuery(".theme-navbar #main-menu .menu-item-has-children sub-menu").mouseleave(function(){

     jQuery(this).hide();

   });


   // Manage Cookies

   function setCookie(cname, cvalue, exdays) {
     var d = new Date();
     d.setTime(d.getTime() + (exdays*24*60*60*1000));
     var expires = "expires="+ d.toUTCString();
     document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
   }

   function getCookie(name) {
       var dc = document.cookie;
       var prefix = name + "=";
       var begin = dc.indexOf("; " + prefix);
       if (begin == -1) {
           begin = dc.indexOf(prefix);
           if (begin != 0) return null;
       }
       else
       {
           begin += 2;
           var end = document.cookie.indexOf(";", begin);
           if (end == -1) {
           end = dc.length;
           }
       }
       // because unescape has been deprecated, replaced with decodeURI
       //return unescape(dc.substring(begin + prefix.length, end));
       return decodeURI(dc.substring(begin + prefix.length, end));
   }


   if(!getCookie('CRCC')){
     jQuery('.theme-cookie-banner').show();
   }

    jQuery('.accept-cookie').on('click', function(e){
       setCookie('CRCC','crcc', 100);
       jQuery('.theme-cookie-banner').hide();
       e.preventDefault();
    });

    // Lowercase 's' in CRO's

    var titleReplace = jQuery('.page-id-20 .hero-none h1').text();

    titleReplace.replace(/.$/,"s");


});
</script>

</body>
</html>
