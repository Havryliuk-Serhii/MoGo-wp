<?php
/**
 * The template for displaying  section Team.
 */
?>
<section class="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="font-weight-normal text-center description"><?php esc_html_e('Who we are','mogo' ); ?></h4>
				<h3 class="font-weight-bold text-center"><?php esc_html_e('Meet our team','mogo' ); ?></h3>
				<div class="divider"></div>
				<p class="text-center specification"><?php the_field('descr_team') ?></p>
			</div>
		</div>
		<div class="row">
		<?php
            $team_mate = new WP_Query(array('post_type' => 'team_post','order' => 'ASC', 'posts_per_page' => 3));
       	?> 
		<?php if ($team_mate->have_posts() ) : 
           	while ($team_mate->have_posts() ) : $team_mate->the_post(); ?>
			<div class="col-md-4 col-sm-12 team-item">
				<div class="card photo">
					<?php echo get_the_post_thumbnail(); ?>					
					<div class="team-content text-center">
						<h6 class="font-weight-normal "><?php the_title() ?></h6>
						<span class="specialty"><?php the_field('team_mate_spec'); ?></span>
					</div>
					<div class="overlay-team"></div>
	            	<div class="photo-social-links">
	                	<div class="social-link">
		                    <a href="<?php the_field('team_mate_fb'); ?>">
		                       	<i class="fab fa-facebook-f"></i>
		                    </a>
		            	    <a href="<?php the_field('team_mate_tw'); ?>">
		                        <i class="fab fa-twitter"></i>
		                    </a>
		                    <a href="<?php the_field('team_mate_pn'); ?>">
		                        <i class="fab fa-pinterest-p"></i>
		                    </a>
		                    <a href="<?php the_field('team_mate_in'); ?>">
		                        <i class="fab fa-instagram"></i>
		                    </a>                                        
	                	</div>    
	            	</div>
				</div>													
			</div>
			<?php endwhile;  
					 endif;
	            wp_reset_query();
	        ?>    		
		</div>
			<div class="row">
				    		<div class="col-12 text-center archive-link">
				    			<a href="<?php echo get_post_type_archive_link('team_post'); ?>"><?php esc_html_e('View more','mogo' ); ?></a>
				    		</div>
				    	</div>
	</div>
</section>