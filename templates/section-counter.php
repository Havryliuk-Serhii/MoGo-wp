<?php
/**
 * The template for displaying  section Counter.
 */
?>
<section class="counter-section">
	<h3 class="section-title-none">counter</h3>
	<div class="container">
		<div class="row">	
			<div class="number text-center">
				<h2 class="timer count-title count-number numeral-text font-weight-bold" data-to="<?php the_field('counter_project'); ?>" data-speed="1500"></h2>
				<span class="lead"><?php esc_html_e('Web design projects','mogo' ); ?></span>
			</div>
			<div class="number text-center">
				<h2 class="timer count-title count-number numeral-text font-weight-bold" data-to="<?php the_field('counter_client'); ?>" data-speed="1500"></h2>
				<span class="lead"><?php esc_html_e('Happy client','mogo' ); ?></span>
			</div>
			<div class="number text-center">
				<h2 class="timer count-title count-number numeral-text font-weight-bold" data-to="<?php the_field('counter_award'); ?>" data-speed="1500"></h2>
				<span class="lead"><?php esc_html_e('Award winner','mogo' ); ?></span>
			</div>
			<div class="number text-center">
				<h2 class="timer count-title count-number numeral-text font-weight-bold" data-to="<?php the_field('counter_coffee'); ?>" data-speed="1500"></h2>
				<span class="lead"><?php esc_html_e('Cup of coffee','mogo' ); ?></span>
			</div>
			<div class="number text-center">
				<h2 class="timer count-title count-number numeral-text font-weight-bold" data-to="<?php the_field('counter_members'); ?>" data-speed="1500"></h2>
				<span class="lead"><?php esc_html_e('Members','mogo' ); ?></span>
			</div>
		</div>
	</div>			
</section>