!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ) ?>">
		<title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="header" role="banner">
      <div class="container">
        <div class="row">
          <nav class="navbar navbar-expand-lg fixed-top" id="nav">
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
    			</nav>
        </div>
      </div>
		</header>
		<main role="main">
