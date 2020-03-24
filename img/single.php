<?php get_header(); ?>
<?php get_header(); ?>
<section class="page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="font-weight-bold text-center"><?php single_post_title(); ?></h1>
				<div class="divider"></div>
			</div>
		</div>
	 	<div class="row">
	 		<?php while ( have_posts() ) : the_post(); ?>
			<article  id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>
				<?php the_post_thumbnail(); ?>
					<div class="post-content">
				    	<h1 class="post-title"><?php the_title(); ?></h1>
				       	<?php the_content(); ?>				       	
				   	</div>				
			</article>
			<nav aria-label="page navigation" class="pagination justify-content-end">
               <?php post_pagination(); ?>
        	</nav>				    	
			<?php  
				endwhile;			 
			?> 	    	
		</div>	
	</div>						
</section>
<?php get_footer(); 

