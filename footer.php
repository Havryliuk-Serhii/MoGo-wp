</main>
<footer class="footer" role="contentinfo">
	<div class="container">
		<div class="row upper-footer">
			<div class="col-md-4">
				<a href="<?php echo home_url(); ?>" class="logo"><?php bloginfo( 'name' ); ?></a>
				<p class="footer-descr"><?php the_field('footer_descr'); ?></p>
				<small><span class="font-weight-bold follow-number"><?php the_field('follow_number'); ?></span>followers</small>
				<div class="border"></div>
				<div class="follow-icon">
 					<span>Follow Us:</span>
					<a href="<?php echo get_option('fb-link'); ?>"><i class="fab fa-facebook-f"></i></a>
					<a href="<?php echo get_option('tw-link'); ?>"><i class="fab fa-twitter"></i></a>
					<a href="<?php echo get_option('in-link'); ?>"><i class="fab fa-instagram"></i></a>
					<a href="<?php echo get_option('pin-link'); ?>"><i class="fab fa-pinterest-p"></i></a>
					<a href="<?php echo get_option('gp-link'); ?>"><i class="fab fa-google-plus-g"></i></a>
					<a href="<?php echo get_option('yt-link'); ?>"><i class="fab fa-youtube"></i></a>
					<a href="<?php echo get_option('dbl-link'); ?>"><i class="fab fa-dribbble"></i></a>
					<a href="<?php echo get_option('tl-link'); ?>"><i class="fab fa-tumblr"></i></a>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="137" title="Contact form 1"]');?>
			</div>
			<div class="col-md-4 recent-post">
				<h5>Blogs</h5>
				<ul>
					<?php echo mogo_recent_posts(); ?>
				</ul>
			</div>
			<div class="col-md-4 insta-gallery">
				<h5>Instagram</h5>
					<?php dynamic_sidebar( 'instagram-widget' ); ?>
				<a href="">View more photos</a>
			</div>
		</div>
		<div class="row copyright">
			<div class="col-md-12 text-center">
				&copy;<script>document.write(new Date().getFullYear());</script> MoGo free PSD template by <a href="<?php echo home_url(); ?>">Laaqiq</a>
			</div>
		</div>
	</div>
</footer>
		<?php wp_footer(); ?>
	</body>
</html>
