<?php
/**
 * The template for displaying  section Blog.
 */
?>
<section class="blog">
	<div class="container d-flex flex-column">
		<div class="row">
			<div class="col-md-12">
				<h4 class="font-weight-normal text-center description"><?php esc_html_e('Our stories','mogo' ); ?></h4>
				<h3 class="font-weight-bold text-center"><?php esc_html_e('Latest blog','mogo' ); ?></h3>
				<div class="divider"></div>
			</div>
		</div>				
		<div class="row">
		<?php
            $id = 3; 
            $posts_blog = new WP_Query(array('cat' => $id, 'posts_per_page' => 3));
        ?> 
        	<?php if ($posts_blog->have_posts() ) : 
             		while ($posts_blog->have_posts() ) : $posts_blog->the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4'); ?>>
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
		  	<?php endwhile; else : ?>
					<h6 class="text-center"><?php esc_html_e('No posts published','mogo' ); ?></h6>
		<?php endif;
            wp_reset_query();
        ?>    		
				 	
				    	
		   			</div>
		   			<div class="row">
				    		<div class="col-12 text-center archive-link">
				    			<a href="<?php echo get_post_type_archive_link('post'); ?>"><?php esc_html_e('View more','mogo' ); ?></a>
				    		</div>
				    	</div>   	
				</div>						
			</section>