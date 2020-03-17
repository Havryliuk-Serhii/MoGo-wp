<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ) ?>">
		<title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="header" role="banner">
          <nav class="navbar navbar-expand-lg fixed-top" id="nav">
						<!--<div class="search-wrap">
			        <div class="container">
			          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
			          <form action="#" method="post">
			            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
			          </form>
			        </div>
			      </div>-->
						<div class="container">
			        <div class="row">
      				<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
      				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        				<span class="navbar-toggler-icon"></span>
      				</button>
      				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <?php
                      wp_nav_menu( [
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'menu',
                            'menu_id' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav ml-auto">%3$s</ul>',
                            'depth' => 0,
                            'walker' => new Bootstrap_Menu_Walker(),
                      ] );
                ?>
      				</div>
              <div class="icons">
                <a href="#" class="icons-btn d-inline-block js-search-open"><i class="far fa-search"></i></a>
                <a href="cart.html" class="icons-btn d-inline-block bag"><i class="far fa-shopping-cart"></i></a>
              </div>
						</div>
					</div>
    			</nav>
		</header>
		<main role="main">
<?php get_template_part( 'templates/section-slider'); ?>
