<?php
/**
 * The template for displaying the service section
 */
?>
<section class="service" id="service">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="font-weight-normal text-center description"><?php esc_html_e('We work with','mogo' ); ?></h4>
				<h3 class="font-weight-bold text-center"><?php esc_html_e('Amazing services','mogo' ); ?></h3>
				<div class="divider"></div>
			</div>
		</div>
		<div class="row">
			<?php
            $id = 5; 
            $posts_service_upper = new WP_Query(array('cat' => $id, 'order' => 'ASC','posts_per_page' => 3));
        ?> 
			<?php if ($posts_service_upper->have_posts() ) : while ( $posts_service_upper->have_posts() ) : $posts_service_upper->the_post(); ?>
			<div class="col-md-4 d-flex flex-row">
				<div class="service-icon">
					<?php echo get_the_post_thumbnail(); ?>		
				</div>
				<div class="service-content">
					<h3><?php the_title() ?></h3>
					<?php the_content(); ?>
				</div>				
			</div>
			<?php endwhile; else : ?>
				<h6 class="text-center"><?php esc_html_e('No posts published','mogo' ); ?></h6>
			<?php endif; 
					wp_reset_query();
			?>
		</div>
		<div class="border"></div>
		<div class="row">
			<?php
            $id = 6; 
            $posts_service_lower = new WP_Query(array('cat' => $id, 'order' => 'ASC','posts_per_page' => 3));
        ?> 
			<?php if ($posts_service_lower->have_posts() ) : while ( $posts_service_lower->have_posts() ) : $posts_service_lower->the_post(); ?>
			<div class="col-md-4 d-flex flex-row">
				<div class="service-icon">
					<?php echo get_the_post_thumbnail(); ?>		
				</div>
				<div class="service-content">
					<h3><?php the_title() ?></h3>
					<?php the_content(); ?>
				</div>				
			</div>
			<?php endwhile; else : ?>
			<h6 class="text-center"><?php esc_html_e('No posts published','mogo' ); ?></h6>
			<?php endif; 
					wp_reset_query();
			?>
		</div>			
	</div>
</section>
			