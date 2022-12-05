<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Site
 */


$utilities = \FOX_UNIVERSITY_THEME\Inc\UTILITIES::get_instance();
$footer_nav_items = $utilities->get_menu_items_by_location('footer');

// Global Address
$label_address = carbon_get_theme_option( 'ci_label_address' );
$address_link = carbon_get_theme_option( 'ci_address_link' );

// Global Secondary Phone
$first_secondary_phone_label = carbon_get_theme_option('ci_first_secondary_phone_label');
$second_secondary_phone_label = carbon_get_theme_option('ci_second_secondary_phone_label');
$secondary_phone = carbon_get_theme_option('ci_secondary_phone');

// Global Primary Email
$second_primary_email_label = carbon_get_theme_option('ci_second_primary_email_label');
$primary_email = carbon_get_theme_option('ci_primary_email');

?>

	<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <?php
						if (!empty($label_address)):
							if (!empty($address_link)):
								?>
									<li><span class="icon icon-map-marker"></span><a href="<?php echo esc_url( $address_link ); ?>" target="_blank" class="text"><?php echo esc_html($label_address); ?></a></li>
								<?php
							else:
								?>
									<li><span class="icon icon-map-marker"></span><span class="text"><?php echo esc_html($label_address); ?></span></li>
								<?php
							endif;
						endif;
					?>

					<?php
						if (!empty($secondary_phone)):
							if (!empty($first_secondary_phone_label)):
								?>
	                				<li><a href="tel:<?php echo esc_attr( $secondary_phone );?>"><span class="icon icon-phone"></span><span class="text"><?php echo esc_html( $first_secondary_phone_label ); ?></span></a></li>
								<?php
							else:
								?>
									<li><a href="tel:<?php echo esc_attr( $secondary_phone );?>"><span class="icon icon-phone"></span><span class="text"><?php echo esc_html( $second_secondary_phone_label ); ?></span></a></li>
								<?php
							endif;
						endif;
					?>

					<?php
						if (!empty($second_primary_email_label) && !empty($primary_email)):
							?>
	                			<li><a href="mailto:<?php echo esc_attr( $primary_email ); ?>"><span class="icon icon-envelope"></span><span class="text"><?php echo esc_html($second_primary_email_label); ?></span></a></li>
							<?php
						endif;
					?>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
			  	<?php
					foreach ($footer_nav_items as $fn_item):
						$fn_item_target = !empty( $fn_item->{'target'} ) ? $fn_item->{'target'} : '_self';
						?>	
							<li><a href="<?php echo esc_url( $fn_item->{'url'} );?>" target="<?php echo esc_attr( $fn_item_target );?>"><span class="ion-ios-arrow-round-forward mr-2"></span><?php echo esc_html( $fn_item->{'title'} );?></a></li>
						<?php
					endforeach;
				?>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
          </div>
        </div>
      </div>
    </footer>

	<!-- loader -->
  	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
