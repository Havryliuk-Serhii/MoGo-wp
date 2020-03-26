<?php
/**
 * The template for displaying  section Work.
 */
?>
<section class="portfolio" id="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="font-weight-normal text-center description"><?php esc_html_e('What we do','mogo' ); ?></h4>
				<h3 class="font-weight-bold text-center"><?php esc_html_e('Some of our work','mogo' ); ?></h3>
				<div class="divider"></div>
				<p class="text-center specification"><?php the_field('descr_about') ?><?php the_field('descr_work') ?></p>
			</div>
		</div>
	</div>
	<div class=" gallery-work d-flex flex-row">
		<div class="col-md-3 no-pad">
			<div class="work-item">
				<?php the_field('work_img_1') ?>
				<div class="overlay"></div>
				<div class="work-content">
					<img src="<?php echo get_template_directory_uri(); ?>/img/p1.png" alt="">
					<h6><?php the_field('work_img_title1') ?></h6>
					<span><?php the_field('work_img_cat1') ?></span>					
				</div>							
			</div>					
			<div class="work-item">
				<?php the_field('work_img_2') ?>
				<div class="overlay"></div>
				<div class="work-content">
					<img src="<?php echo get_template_directory_uri(); ?>/img/p1.png" alt="">
					<h6><?php the_field('work_img_title2') ?></h6>
					<span><?php the_field('work_img_cat2') ?></span>					
				</div>							
			</div>
		</div>
		<div class="col-md-3 no-pad">
			<div class="work-item">
				<?php the_field('work_img_3') ?>
				<div class="overlay"></div>
				<div class="work-content">
					<img src="<?php echo get_template_directory_uri(); ?>/img/p1.png" alt="">
					<h6><?php the_field('work_img_title3') ?></h6>
					<span><?php the_field('work_img_cat3') ?></span>					
				</div>
			</div>
			<div class="work-item">
				<?php the_field('work_img_4') ?>
				<div class="overlay"></div>
				<div class="work-content">
					<img src="img/p1.png" alt="">
					<h6><?php the_field('work_img_title4') ?></h6>
					<span><?php the_field('work_img_cat4') ?></span>					
				</div>
			</div>							
		</div>
		<div class="col-md-3 no-pad">
			<div class="work-item tall">
				<?php the_field('work_img_5') ?>
				<div class="overlay"></div>
				<div class="work-content">
					<img src="<?php echo get_template_directory_uri(); ?>/img/p1.png" alt="">
					<h6><?php the_field('work_img_title5') ?></h6>
					<span><?php the_field('work_img_cat5') ?></span>					
				</div>
			</div>						
		</div>
		<div class="col-md-3 no-pad">
			<div class="work-item">
				<?php the_field('work_img_6') ?>
				<div class="overlay"></div>
				<div class="work-content">
					<img src="<?php echo get_template_directory_uri(); ?>/img/p1.png" alt="">
					<h6><?php the_field('work_img_title6') ?></h6>
					<span><?php the_field('work_img_cat6') ?></span>					
				</div>
			</div>
			<div class="work-item">
				<?php the_field('work_img_7') ?>
				<div class="overlay"></div>
				<div class="work-content">
					<img src="img/p1.png" alt="">
					<h6><?php the_field('work_img_title7') ?></h6>
					<span><?php the_field('work_img_cat7') ?></span>					
				</div>
			</div>												
		</div>		
	</div>
</section>