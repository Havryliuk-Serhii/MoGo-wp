<?php
/**
 * The template for displaying  section About.
 */
?>
<?php
$quotes = get_posts( array(
    'post_type' => 'slider',
    'category'    => 11,
    'numberposts' => 2,
) );
if($quotes):
?>
<section class="single-testimonial">
	<h3 class="section-title-none">single-testimonial</h3>
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  		<div class="carousel-inner">
  			<?php $i = 0; foreach($quotes as $post): ?> 
		    <div class="carousel-item <?php if(!$i) echo 'active' ?>">
		      	<div class="container">
		      		<div class="row testimonial-slide">
		      			<div class="col-md-4">
		      				<div class="testim-img">
								<?php echo get_the_post_thumbnail(); ?>
							</div>
		      			</div>
		      			<div class="col-md-8">
			      			<div class="quote-content">
								<?php  the_excerpt() ; ?>
							</div>
							<div class="slide-author d-flex flex-row justify-content-start">
								<div class="quote-divider"></div>
								<cite><?php the_author(); ?></cite>
							</div>
		      			</div>
		      		</div>
		      	</div>
		   	</div>
		    <?php $i++; endforeach; ?>				    
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>
<?php endif; ?>