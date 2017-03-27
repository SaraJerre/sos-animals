<?php

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

function setup() {

  // show admin bar only if the logged in user is allowed to edit pages
  if (current_user_can('edit_posts')) {
    show_admin_bar(true);
  } else {
    show_admin_bar(false);
  }

  // add which sizes the images need to have in our theme
  add_image_size( 'post-featured-image', 760, 9999 ); // width and height
  // add support for featured images 
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 300, 300, true ); // default Featured Image dimensions (cropped/not cropped = true/false)

  // register header menu
  register_nav_menu('header-menu', __( 'Header Menu', 'sos-animals' ) );

  // register which post formats that are supported in the theme
  add_theme_support('post-formats', array('image') );

}
add_action('after_setup_theme', 'setup');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function sos_animals_widgets_init() {
    // register footer area widget
    register_sidebar( array(
    	'name'          => 'Footer area',
    	'id'            => 'footer-area',
    	'before_widget' => '<li class="list-inline-item">',
    	'after_widget'  => '</li>',
    	'before_title'  => '<h2>',
    	'after_title'   => '</h2>',
	 ) );
    // register news sidebar widget
    register_sidebar(array(
      'name'          => 'News sidebar',
      'id'            => 'news-sidebar',
      'before_widget' => 'li class="sidebar-widget"',
      'after_widget'  => '</li>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ) );
}
add_action( 'widgets_init', 'sos_animals_widgets_init' );

/**
 * Register our custom logo.
 *
 */
function sos_animals_custom_logo_setup() {
  $defaults = array(
        'height'      => 50,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'sos_animals_custom_logo_setup' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<br><a class="read-more btn btn-primary" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'sos-animals' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/* Combining Enqueue Functions (combine all enqueued scripts and styles into a single function, and then call them)*/
function add_theme_scripts() {
  wp_enqueue_style( 'bootstrap4', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css", '4.0.0-alpha.6' );

  wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/main.css', array('bootstrap4'), '2017031701');

  wp_deregister_script( 'jquery' ); /* first, deregister old jquery that's not compatible with our bootstrap version */
  wp_enqueue_script( 'jquery', "https://code.jquery.com/jquery-3.1.1.slim.min.js", array(), '3.1.1', true);

  wp_enqueue_script( 'tether', "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js", array('jquery'), '1.4.0', true);

  wp_enqueue_script( 'bootstrap4', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js", array('jquery', 'tether'), '4.0.0-alpha.6', true);
 
  wp_enqueue_script('carousel-jquery', get_template_directory_uri() - '/js/carousel-ready.js', array('bootstrap4', 'jquery'), '2017032601' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );