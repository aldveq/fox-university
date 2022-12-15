<?php
	$hero_slides_data = $args['hero_slider_data'];
?>

<section class="home-slider owl-carousel">
	<?php
		if(!empty($hero_slides_data['slides_data']) && is_array($hero_slides_data['slides_data'])):
			foreach($hero_slides_data['slides_data'] as $slide_data):
				$slide_img_url = wp_get_attachment_image_url($slide_data['image'], 'hero_slide_image_size');
				$slide_title = $slide_data['title'];
				$slide_description = $slide_data['description'];
				$slide_link_url = $slide_data['link_url'];
				$slide_link_label = $slide_data['link_label'];
				$slide_link_target = $slide_data['link_target'] ? '_blank' : '_self';

				if(!empty($slide_img_url)):
				?>
				<div class="slider-item" style="background-image:url(<?php echo esc_attr($slide_img_url); ?>);">
					<div class="overlay"></div>
					<div class="container">
						<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
							<div class="col-md-6 ftco-animate">
								<?php
									if(!empty($slide_title)):
									?>
									<h1 class="mb-4"><?php echo esc_html($slide_title); ?></h1>
									<?php
									endif;
								?>
								<?php
									if(!empty($slide_description)):
										echo wp_kses_post( wpautop($slide_description) );
									endif;
								?>
								<?php
									if(!empty($slide_link_url)):
									?>
									<p><a href="<?php echo esc_url($slide_link_url); ?>" target="<?php echo esc_attr($slide_link_target); ?>" class="btn btn-primary px-4 py-3 mt-3"><?php echo esc_html($slide_link_label); ?></a></p>
									<?php
									endif;
								?>
							</div>
						</div>
					</div>
				</div>
				<?php
				endif;
			endforeach;
		endif;
	?>
</section>
