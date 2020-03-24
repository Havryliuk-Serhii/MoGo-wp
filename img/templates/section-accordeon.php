<?php
/**
 * The template for displaying the work section
 */
?>
<section class="accordeon-section">				
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="font-weight-normal text-center description"><?php esc_html_e('Service','mogo' ); ?></h4>
				<h3 class="font-weight-bold text-center"><?php esc_html_e('What we do','mogo' ); ?></h3>
				<div class="divider"></div>
				<p class="text-center specification"><?php the_field('accord_descr'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<img class="accord-img" src="<?php echo get_template_directory_uri(); ?>/img/accord-img.png" alt="">
			</div>
			<?php
			$id = 7; 
			$posts_accord = new WP_Query(array('cat' => $id, 'posts_per_page' => 3, 'order' => 'ASC'));
			?>
			<div class="col-md-6">
				<div class="accordion" id="accordionExample">
					<?php if ($posts_accord->have_posts() ) : while ( $posts_accord->have_posts() ) : $posts_accord->the_post(); ?>
					<div class="card">
						<div class="card-header d-flex flex-row" id="heading<?php the_ID(); ?>">
							<?php echo get_the_post_thumbnail(); ?>	
							<h5 class="mb-0">
				   				<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?php the_ID(); ?>"><?php the_title() ?></button>
							</h5>
					    </div>
					   	<div id="collapse<?php the_ID(); ?>" class="collapse show" aria-labelledby="heading<?php the_ID(); ?>" data-parent="#accordionExample">
					    	<div class="card-body">
					    		<?php the_content(); ?>	
					    	</div>
					    </div>
					</div>
					<?php endwhile; else : ?>
						<h6 class="text-center"><?php esc_html_e('No accordeon posts published','mogo' ); ?></h6>
					<?php endif; 
							wp_reset_query();
					?>					  			
				</div>
			</div>	
		</div>
	</div>
</section>	