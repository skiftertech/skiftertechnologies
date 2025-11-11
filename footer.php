<footer class="webintern-footer">
<div class="webintern-footer-inner">
<div class="container">
<div class="row">
<div class="col-sm-6 col-md-3">
<h4 class="webintern_footer_title h5"><small>Skifter Technologies</small></h4>
<div class="simple-text dark padding-sm">
<p>Skifter Technologies is the hi-tech advent in the modern era. It is a Hi-Fi Web Design organization which is a mastery in the field of innovative Website Designing and Search Engine Optimization (SEO). The company has its head quarters setup in Chennai, Tamil Nadu.The prime motto behind the setup is to excavate latest<a href="about-us.php">Read More...</a></p>
</div>
</div>
<div class="col-sm-6 col-md-3">
<!-- webintern_footer_title -->
<h4 class="webintern_footer_title h5"><small>Quick Links</small></h4>
<ul class="webintern-footer-list">
<li><a href="responsive-web-design.php">Responsive Web Design</a></li>
<li><a href="website-redesign.php">Website Redesign</a></li>
<li><a href="website-maintenance.php">Website Maintenence</a></li>
<li><a href="ecommerce-web-design.php">E-commerce Web Design</a></li>
<li><a href="wordpress-development.php">Wordpress Development</a></li>
<li><a href="drupal-development.php">Drupal Web Design</a></li>
<li><a href="joomla-development.php">Joomla Web Design</a></li>
<li><a href="broucher-flyers.php">Brouchre & Flyers</a></li>
</ul>

</div>
<div class="col-sm-6 col-md-3  extramargin">
<!-- webintern_footer_title -->

<ul class="webintern-footer-list">
<li><a href="logo-design.php">Branded Logo Design</a></li>
<li><a href="animations.php">2D & 3D Animations</a></li>
<li><a href="search-engine-optimization.php">Search Engine Optimization</a></li>
<li><a href="social-media-marketing.php">Social Media Marketing</a></li>
<li><a href="pay-per-click.php">Pay Per Click(PPC)</a></li>
<li><a href="domain-registration.php">Domain Registration</a></li>
<li><a href="web-hosting.php">Web Hosting</a></li>
</ul>

</div>

<div class="col-xs-12 col-md-3 col-sm-6">
<div class="marg-sm-b30"></div>
<!-- webintern_footer_title -->
<h4 class="webintern_footer_title h5"><small>Subscribe Newsletter</small></h4>
<div class="empty-space marg-lg-b20"></div>
<!--
<div class="simple-text last dark ">
<p>Get latest updates and offers.</p>
</div>
-->
<div class="empty-space marg-lg-b15"></div>
<!-- TT-SUBSCRIBE -->
<form method="post">
<div class="tt-subscribe">
<input type="text" required="" placeholder="Enter your email">
<div class="tt-subscribe-submit">
<i class="fa fa-envelope" aria-hidden="true"></i>
<input type="submit" value="">
</div>
</div>
</form>
<div class="empty-space marg-lg-b30"></div>
<!-- TT-SOCAIL -->
<ul class="tt-socail">
<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="tt-copy">
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="tt-copy-left">Copyright © 2019.All rights reserved. </div>
</div>
<div class="col-sm-6">

</div>
</div>
</div>
</div>
</footer>
<!--Ends Here-->



<script>
(function($){
	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
	  if (!$(this).next().hasClass('show')) {
		$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
	  }
	  var $subMenu = $(this).next(".dropdown-menu");
	  $subMenu.toggleClass('show');

	  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
		$('.dropdown-submenu .show').removeClass("show");
	  });

	  return false;
	});
})(jQuery)
</script>
<script>
     $('.flexslider').flexslider({
	animation: "slide",
	controlNav: false
});
</script>
