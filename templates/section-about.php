<?php
/**
 * The template for displaying  section About.
 */
?>
<section  id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="font-weight-normal text-center description-about"><?php esc_html_e('What we do','mogo' ); ?></h4>
				<h3 class="font-weight-bold text-center"><?php esc_html_e('Story about us','mogo' ); ?></h3>
				<div class="divider"></div>
				<p class="text-center specification-about"><?php the_field('descr_about') ?></p>
			</div>
		</div>				
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="card mt-5 mb-5 photo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle1.png" alt="">
					<div class="overlay"></div>
	           	    <div class="photo-content">
	                   	<div class="photo-link">
	                        <i class="fas fa-user-friends"></i>
	                        <h5 class="font-weight-bold text-center"><?php esc_html_e('Super team','mogo' ); ?></h5>   
	                    </div>  
	           	    </div>
				</div>							
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="card mt-5 mb-5 photo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle2.png" alt="">
					<div class="overlay"></div>
	                <div class="photo-content">
	        	        <div class="photo-link">
	                        <i class="fas fa-user-friends"></i>
	                        <h5 class="font-weight-bold text-center"><?php esc_html_e('Super team','mogo' ); ?></h5>   
	                	</div>  
	            	</div>
				</div>		
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="card mt-5 mb-5 photo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle3.png" alt="">
					<div class="overlay"></div>
	                <div class="photo-content">
	                    <div class="photo-link">
                            <i class="fas fa-user-friends"></i>
	                        <h5 class="font-weight-bold text-center"><?php esc_html_e('Super team','mogo' ); ?></h5>   
	                    </div>  
	                </div>
				</div>								
			</div>
		</div>
	</div>
</section>	