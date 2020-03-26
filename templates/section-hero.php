<?php
/**
 * The template for displaying  section About.
 */
?>

<?php
$posts = get_posts( array(
    'post_type' => 'slider',
    'category'    => 9,
) );
if($posts):
?>
<section class="hero">
	<div id="myCarousel" class="carousel slide main-carousel" data-ride="carousel">
    	<ol class="carousel-indicators">
    		<?php for($i = 0; $i < count($posts); $i++): ?>
      		<li data-target="#myCarousel" data-slide-to="<?php $i ?>" class="<?php if(!$i) echo 'class="active"' ?>">
      			<div class="bullet-box d-flex flex-row">
      		 		<span class="bullet-text"><?php the_field('bullet_name') ?></span>
      			</div>
      		</li>
      		<?php endfor; ?>      		
    	</ol>
    	<div class="carousel-inner">
    		<?php $i = 0; foreach($posts as $post): ?>    		
      		<div class="carousel-item <?php if(!$i) echo 'active' ?>">
        		<?php echo get_the_post_thumbnail(); ?>		
        		<div class="carousel-caption slider-content d-flex flex-column align-items-center mx-auto">
        			<h2 class="font-weight-normal"><?php the_field('slide_uptext') ?></h2>
                    <h1 class="font-weight-bold"><?php the_title(); ?></h1> 
        			<div class="divider-white"></div>        						
                    <a href="<?php the_permalink(); ?>" class="btn-lead"><?php esc_html_e('Learn more','mogo' ); ?></a>
      			</div>
      		</div>
      		<?php $i++; endforeach; ?>
    	</div>    				
  	</div>
</section>
<?php endif; ?>
