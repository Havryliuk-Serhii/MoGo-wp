<?php
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
		'show in rest'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'taxonomies'          => array( 'category' ),
    	'menu_icon'          => 'dashicons-images-alt',
    	'menu_position'      => 8,
		'supports'           => array('title', 'editor', 'thumbnail', 'author' )
	) );
}

/**
 * Custom post Team
 **/
add_action('init', 'my_team_post');
function my_team_post(){
	register_post_type('team_post', array(
		'labels'             => array(
			'name'               => 'Team ',
			'singular_name'      => 'Team',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new team mate',
			'edit_item'          => 'Edit team',
			'new_item'           => 'New team ',
			'view_item'          => 'View team',
			'search_items'       => 'Search team',
			'not_found'          =>  'Team not found',
			'not_found_in_trash' => 'Team not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Team',
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
    'menu_icon'          => 'dashicons-groups',
    'menu_position'      => 9,
		'supports'           => array('title', 'thumbnail', )
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
		'name'          => esc_html__( 'Instagram widget', 'mogo' ),
		'id'            => 'instagram-widget',
		'description'   => esc_html__( 'Add widgets here.', 'mogo' ),
		'before_widget' => '',
		'after_widget'  => '',
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

/**
* Social icon links
**/
//Facebook
function fb_options(){
		add_settings_field(
		'facebook',
		'Fasebook link',
		'display_fb',
		'general'
	);

	register_setting(
		'general',
		'fb-link'
	);
}
add_action('admin_init', 'fb_options');
function display_fb(){
	echo "<input type='text' class='regular-text' name='fb-link' value='" . esc_attr(get_option('fb-link')) . "'>";
}

//Tweeter
function tw_options(){
		add_settings_field(
		'tweeter',
		'Tweeter link',
		'display_tw',
		'general'
	);

	register_setting(
		'general',
		'tw-link'
	);
}
add_action('admin_init', 'tw_options');
function display_tw(){
	echo "<input type='text' class='regular-text' name='tw-link' value='" . esc_attr(get_option('tw-link')) . "'>";
}
//Instagram
function in_options(){
		add_settings_field(
		'instagram',
		'Instagram link',
		'display_in',
		'general'
	);

	register_setting(
		'general',
		'in-link'
	);
}
add_action('admin_init', 'in_options');
function display_in(){
	echo "<input type='text' class='regular-text' name='in-link' value='" . esc_attr(get_option('in-link')) . "'>";
}
//Pinterest
function pin_options(){
		add_settings_field(
		'pinterest',
		'Pinterest link',
		'display_pin',
		'general'
	);

	register_setting(
		'general',
		'pin-link'
	);
}
add_action('admin_init', 'pin_options');
function display_pin(){
	echo "<input type='text' class='regular-text' name='pin-link' value='" . esc_attr(get_option('pin-link')) . "'>";
}
//Google
function gp_options(){
		add_settings_field(
		'google',
		'Google link',
		'display_gp',
		'general'
	);

	register_setting(
		'general',
		'gp-link'
	);
}
add_action('admin_init', 'gp_options');
function display_gp(){
	echo "<input type='text' class='regular-text' name='gp-link' value='" . esc_attr(get_option('gp-link')) . "'>";
}
//YouTube
function yt_options(){
		add_settings_field(
		'youtube',
		'YouTube link',
		'display_yt',
		'general'
	);

	register_setting(
		'general',
		'yt-link'
	);
}
add_action('admin_init', 'yt_options');
function display_yt(){
	echo "<input type='text' class='regular-text' name='yt-link' value='" . esc_attr(get_option('yt-link')) . "'>";
}
//Dribble
function dbl_options(){
		add_settings_field(
		'dribble',
		'Dribble link',
		'display_dbl',
		'general'
	);

	register_setting(
		'general',
		'dbl-link'
	);
}
add_action('admin_init', 'dbl_options');
function display_dbl(){
	echo "<input type='text' class='regular-text' name='dbl-link' value='" . esc_attr(get_option('dbl-link')) . "'>";
}
//Tumblr
function tl_options(){
		add_settings_field(
		'tumblr',
		'Tumblr link',
		'display_tl',
		'general'
	);

	register_setting(
		'general',
		'tl-link'
	);
}
add_action('admin_init', 'tl_options');
function display_tl(){
	echo "<input type='text' class='regular-text' name='tl-link' value='" . esc_attr(get_option('tl-link')) . "'>";
}

/**
 * Resent post widget
**/
add_image_size( 'mogo-recent-thumbnails', 120, 79, true );
function mogo_recent_posts() {
    $del_recent_posts = new WP_Query();
    $del_recent_posts->query('showposts=3');
        while ($del_recent_posts->have_posts()) : $del_recent_posts->the_post(); ?>
			<li class="d-flex flex-row">
                <a href="<?php esc_url(the_permalink()); ?>">
                    <?php the_post_thumbnail('mogo-recent-thumbnails'); ?>
                </a>
                <div class="recent-content d-flex flex-column">
                	<a href="<?php esc_url(the_permalink()); ?>">
                        <?php esc_html(the_title()); ?>
                   </a>
                	<span class="date"><?php the_time('M, j, Y'); ?></span>
				</div>
            </li>
        <?php endwhile;
    wp_reset_postdata();
}

/**
 * Add gallery size for instagram  widget
**/
function insta_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'insta_thumb' => 'Instagram image',
    ) );
}
add_filter( 'image_size_names_choose', 'insta_sizes' );
add_image_size( 'insta_thumb', 120, 120, true );

/**
 *	Default WordPress custom field
 **/
add_filter('acf/settings/remove_wp_meta_box', '__return_false');
