<?php get_header(); ?>
<section class="page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ( have_posts() ) : ?>
					<?php
						the_archive_title( '<h1 class="font-weight-bold text-center">', '</h1>' );
				?>		
			</div>
		</div>	
	 	<div class="row">
	 	<?php while ( have_posts() ) : the_post(); ?>
	 		<article  id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>
				<div class="card-post">
				    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
				    <div class="post-date d-flex flex-column align-items-center">
                       	<span class="day font-weight-bold"><?php the_time('j')?></span>
                       	<span class="month font-weight-normal"><?php the_time('M')?></span>
                    </div>    
				    <div class="post-content">
				    	<h6 class="post-title"><?php the_title(); ?></h6>
				       	<?php the_excerpt(); ?>
				       	<div class="sub-content d-flex justify-content-start align-items-center">
				           	<small class="text-muted views"><img src="<?php echo get_template_directory_uri(); ?>/img/view2.png" alt=""><?php the_field('views_count') ?></small>
							<small class="text-muted comments"><img src="<?php echo get_template_directory_uri(); ?>/img/bubble.png" alt=""><?php comments_number('0', '1', '%')?></small>
				       	</div>
				   	</div>
				</div>
			</article>				    	
		<?php   endwhile;
				the_posts_navigation();
				else : ?>
					<h6 class="text-center"><?php esc_html_e('No posts published','mogo' ); ?></h6>
		<?php
			endif;
		?> 	    	
		</div>	
	</div>						
</section>
<?php get_footer(); 