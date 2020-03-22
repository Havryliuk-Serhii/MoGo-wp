<?php
/**
 * The template for displaying  section Design.
 */
?>
<section class="design" style="background-image: url(<?php echo get_theme_file_uri('/img/des-bg.png'); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="font-weight-normal text-center description"><?php esc_html_e('For ll devices','mogo' ); ?></h4>
				<h3 class="font-weight-bold text-center"><?php esc_html_e('Unique design','mogo' ); ?></h3>
				<div class="divider"></div>
			</div>
		</div>
	</div>				
	<div class="container">
		<div class="feauture-img d-lg-block">
			<img src="<?php echo get_template_directory_uri(); ?>/img/feauture.png" alt="">
		</div>
	</div>								
</section>