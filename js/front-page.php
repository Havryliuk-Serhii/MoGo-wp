<?php
/**
 *Template Name: Home Page
 */
get_header('main');
?>
<?php
	get_template_part( 'templates/section-hero'); 
  	get_template_part( 'templates/section-about');
  	get_template_part( 'templates/section-counter');
  	get_template_part( 'templates/section-service');
  	get_template_part( 'templates/section-design');
   	get_template_part( 'templates/section-accordeon');
	get_template_part( 'templates/section-blockquote');
	get_template_part( 'templates/section-team');
	get_template_part( 'templates/section-brands');
	get_template_part( 'templates/section-portfolio');
	get_template_part( 'templates/section-single-testimonial');
	get_template_part( 'templates/section-testimonials');  	
  	get_template_part( 'templates/section-blog');
  	get_template_part( 'templates/section-map');
?>
<?php get_footer();