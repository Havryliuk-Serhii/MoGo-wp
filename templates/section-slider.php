<?php
/**
 * The template for displaying the Slider hero section
 */
?>
    <section class="hero">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
    				<ol class="carousel-indicators">
      					<li data-target="#myCarousel" data-slide-to="0" class=""></li>
      					<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      					<li data-target="#myCarousel" data-slide-to="2" class=""></li>
                <li data-target="#myCarousel" data-slide-to="3" class=""></li>
    				</ol>
    				<div class="carousel-inner">
              <?php $slidecount = mogo_of_get_option('mogo_slide_count','3');
									$args = array( 'posts_per_page' => $slidecount , 'order' => 'ASC'  );
									$slider = new WP_Query( $args );
									$count = 0;
									while ( $slider->have_posts() ) : $slider->the_post(); ?>
      					<div class="carousel-item <?php echo esc_attr( $count == 0 ? 'active' : '' ); ?>">
                  <?php
											$thumb = get_post_thumbnail_id();
											$img_url = wp_get_attachment_url( $thumb,'full' );
										?>
										<img src="<?php echo $img_url ?>" alt="<?php the_title(); ?>">
        					<div class="container">
          						<div class="carousel-caption">

            						<h1><?php the_title(); ?></h1>

            						<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          						</div>
        					</div>
      					</div>
                <?php
                    $count++;
                		endwhile;
                    wp_reset_postdata();
        			  ?>
    				</div>
  				</div>
			</section>
