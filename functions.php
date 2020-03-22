<?php
show_admin_bar(false);
function mogo_setup() {

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'mogo' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
}
add_action( 'after_setup_theme', 'mogo_setup' );

/**
 * Enqueue scripts and styles.
 */
function mogo_scripts() {
	// add styles
	wp_enqueue_style( 'mogo-style', get_stylesheet_uri() );
	wp_enqueue_style( 'mogo-grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css');
  wp_enqueue_style( 'mogo-reboot', get_template_directory_uri() . '/css/bootstrap-reboot.min.css');
  wp_enqueue_style( 'mogo-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'mogo-fontawesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css', array(), '5.11.2' );
	wp_enqueue_style( 'mogo-main-style', get_template_directory_uri() . '/css/main.css');
// add scripts
	wp_enqueue_script( 'mogo-jquery-slim',  get_template_directory_uri() . '/js/jquery-3.4.1.slim.min.js', array(),'3.4.1', true);
	wp_enqueue_script( 'mogo-popper-script', get_template_directory_uri() . '/js/popper.min.js', array(), '', true );
	wp_enqueue_script( 'mogo-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'mogo-main-script', get_template_directory_uri() . '/js/custom.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'mogo_scripts' );

/**
 * Bootstrap Walker Nav menu
**/
class Bootstrap_Menu_Walker extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

      if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
        $t = '';
        $n = '';
      } else {
        $t = "\t";
        $n = "\n";
      }
      $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $classes[] = 'menu-item-' . $item->ID;

      // Filters the arguments for a single nav menu item
      $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

      // Filters the CSS class(es) applied to a menu item's list item element
      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
      $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

      // Filters the ID applied to a menu item's list item element
      $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
      $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

      $output .= $indent . '<li' . $id . $class_names .'>';

      // it would be better to enter the class in Appearance -> Menus -> Screen Options -> CSS classes
      // $output .= $indent . '<li' . $id . $class_names .'>';
      $output .= $indent . '<li class="nav-item">';

      $atts = array();
      $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
      $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
      $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
      $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

      // Filters the HTML attributes applied to a menu item's anchor element
      $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

      $attributes = '';
      foreach ( $atts as $attr => $value ) {
        if ( ! empty( $value ) ) {
          $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
          $attributes .= ' ' . $attr . '="' . $value . '"';
        }
      }
      $title = apply_filters( 'the_title', $item->title, $item->ID );

      // Filters a menu item's title
      $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

      $item_output = $args->before;
      $item_output .= '<a class="nav-link js-scroll-trigger"'. $attributes .'>';
      $item_output .= $args->link_before . $title . $args->link_after;
      $item_output .= '</a>';
      $item_output .= $args->after;

	  $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**
 * Delete menu item class
**/
add_filter('nav_menu_item_id', 'filter_menu_id');
add_filter( 'nav_menu_css_class', 'filter_menu_li' );
function filter_menu_li(){
    return array('');
}
function filter_menu_id(){
    return;
}

/**
 * Custom Slider
 **/
add_action('init', 'my_custom_slider');
function my_custom_slider(){
	register_post_type('slider', array(
		'labels'             => array(
			'name'               => 'Slider',
			'singular_name'      => 'Slider',
			'add_new'            => 'Add new ',
			'add_new_item'       => 'Add new slider',
			'edit_item'          => 'Edit slider',
			'new_item'           => 'New slider',
			'view_item'          => 'View slider',
			'search_items'       => 'Search slider',
			'not_found'          =>  'Slider not found',
			'not_found_in_trash' => 'Slider not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Slider',
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
    'menu_icon'          => 'dashicons-images-alt',
    'menu_position'      => 9,
		'supports'           => array('title','editor', 'thumbnail', )
	) );
}

/**
*  Options fallback
*/
if ( ! function_exists( 'mogo_all_option' ) ) {
	function mogo_all_option()
	{
		return get_option('mogo');
	}
}
if ( ! function_exists( 'mogo_of_get_option' ) ) {
	function mogo_of_get_option( $name, $default = false )
	{
			$config = mogo_all_option();

			if ( ! isset( $config['id'] ) )
				return $default;

			$options = get_option( $config['id'] );

			if ( isset( $options[$name] ) )
				return $options[$name];

			return $default;
	}
}


function mogo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mogo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mogo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mogo_widgets_init' );

/**
*  Delete square brackets
**/
add_filter('excerpt_more', 'my_func');
function my_func($more) {
	return '';
}
/**
 *  Pagination
**/
if ( ! function_exists( 'post_pagination' ) ) :
   function post_pagination() {
     global $wp_query;
     $pager = 999999999; // need an unlikely integer

        echo paginate_links( array(
             'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
             'format' => '?paged=%#%',
						 'prev_text'    => esc_html__('Previous'),
						 'next_text'    => esc_html__('Next'),
             'current' => max( 1, get_query_var('paged') ),
             'total' => $wp_query->max_num_pages
        ) );
   }
endif;
