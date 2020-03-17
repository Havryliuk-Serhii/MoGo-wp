<?php
/**
 *Template Name: Home Page
 */
get_header('main');
 ?>

<?php
  get_template_part( 'templates/section-about');
  get_template_part( 'templates/section-service');
  get_template_part( 'templates/section-work');
  get_template_part( 'templates/section-blog');
  get_template_part( 'templates/section-contact');
?>

<?php get_footer();
