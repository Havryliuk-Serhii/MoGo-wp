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
          <nav class="navbar navbar-expand-lg" id="nav">
						<div class="container">
      				<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
      				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        				<span class="navbar-toggler-icon"></span>
      				</button>
      				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <?php
                      wp_nav_menu( [
                            'theme_location' => 'header_menu',
                            'container' => false,
                            'menu_class' => 'navbar-nav ml-auto',
                            'menu_id' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav ml-auto mt-2 mt-lg-0">%3$s</ul>',
                            'depth' => 0,
                            'walker' => new Bootstrap_Menu_Walker(),
                      ] );
                ?>
      				</div>
              <div class="icon-top">
              <ul class="top-menu list-inline">
                <li class="dropdown cart-nav dropdown-slide">
                  <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <li class="dropdown search dropdown-slide">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="fas fa-search"></i></a>
                    <ul class="dropdown-menu search-dropdown">
                      <li>
                        <?php get_search_form(); ?>
                      </li>
                    </ul>
                </li>
              </ul>
            </div>
					</div>
    		</nav>
		</header>
		<main role="main">
