<?php
/**
 * The template for displaying  section Map.
 */
?>
<section class="map" style="bacground-image: url(<?php echo get_template_directory_uri('/img/map.png'); ?>);">
	<div class="container">
	  	<div class="row">
	  		<div class="col-md-12">
				<div class="text-center map-marker">
					<img src="<?php echo get_template_directory_uri(); ?>/img/pin2.png" alt="">
				</div>
				<h4 class="font-weight-bold text-center"><?php esc_html_e('Open map','mogo' ); ?></h4>
				<div class="divider-map"></div>
			</div>
		</div>
	</div>			
</section>