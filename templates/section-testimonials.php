<?php
/**
 * The template for displaying  section Testimonial.
 */
?>
<section class="testimonials" style="background-image: url(<?php echo get_theme_file_uri('/img/testim-bg.png'); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="font-weight-normal text-center description"><?php esc_html_e('Happy Clients','mogo' ); ?></h4>
				<h3 class="font-weight-bold text-center"><?php esc_html_e('What people say','mogo' ); ?></h3>
				<div class="divider"></div>
			</div>
		</div>
		<div class="row">
			<?php
            $id = 4; 
            $posts_testim = new WP_Query(array('cat' => $id, 'order' => 'ASC','posts_per_page' => 4));
        ?> 
			<?php if ($posts_testim->have_posts() ) : while ( $posts_testim->have_posts() ) : $posts_testim->the_post(); ?>
			<div class="col-md-6">
				<div class="media client-item">
					<div class="client-img">
						<?php echo get_the_post_thumbnail(); ?>	
					</div>					
				  	<div class="testimonials-body">
				    	<h6 class="font-weight-normal client"><?php the_title() ?></h6>
						<span class="client-spec"><?php the_field('client_spec'); ?></span>
						<div class="divider-client"></div>
				    	<p class="client-post"><?php the_content(); ?></p>  
				  	</div>
				</div>
			</div>
			<?php endwhile; else : ?>
				<h6 class="text-center"><?php esc_html_e('No testimonials published','mogo' ); ?></h6>
			<?php endif; 
					wp_reset_query();
			?>			
		</div>				
	</div>				
</section>