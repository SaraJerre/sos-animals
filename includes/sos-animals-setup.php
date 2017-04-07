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

  // add which sizes the images need to have in the theme
  add_image_size( 'page-featured-image', 2580, 450, array('center', 'center') );
  add_image_size( 'post-featured-image', 9999, 400, false ); // width, height
  // add support for featured images 
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 300, 300, true );

  // register header menu
  register_nav_menu('header-menu', __( 'Header Menu', 'sos-animals' ) );

  // register support for custom logo
  add_theme_support( 'custom-logo', array(
  'height'      => 100,
  'width'       => 400,
  'flex-height' => false,
  'flex-width'  => false,
  'header-text' => array( 'site-title', 'site-description' ),
  ) );

  // register which post formats that are supported in the theme
  add_theme_support('post-formats', array('image') );

}
add_action('after_setup_theme', 'setup');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function sos_animals_widgets_init() {
    /* Register 3 footer area widgets */
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name'          => __( 'First Footer Widget Area', 'sos-animals' ),
        'id'            => 'first-footer-widget-area',
        'description'   => __( 'The first footer widget area', 'sos-animals' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name'          => __( 'Second Footer Widget Area', 'sos-animals' ),
        'id'            => 'second-footer-widget-area',
        'description'   => __( 'The second footer widget area', 'sos-animals' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name'          => __( 'Third Footer Widget Area', 'sos-animals' ),
        'id'            => 'third-footer-widget-area',
        'description'   => __( 'The third footer widget area', 'sos-animals' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    // Register primary sidebar widget
    register_sidebar(array(
      'name'          => __( 'Sidebar', 'sos-animals' ),
      'id'            => 'sidebar-primary',
      'description'   => __( 'The sidebar widget area', 'sos-animals' ),
      'before_widget' => '<li class="sidebar-widget">',
      'after_widget'  => '</li>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ) );

    // Register news sidebar widget
    register_sidebar(array(
      'name'          => __( 'News Sidebar', 'sos-animals' ),
      'id'            => 'sidebar-news',
      'description'   => __( 'The news sidebar widget area', 'sos-animals' ),
      'before_widget' => '<li class="sidebar-widget">',
      'after_widget'  => '</li>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ) );
}
add_action( 'widgets_init', 'sos_animals_widgets_init' );

// Setting up theme logo with custom size
function sos_animals_theme_logo_setup() {
  
  add_theme_support( 'custom-logo', array(
    'height'      => 60,
    'width'       => 180,
    'flex-width' => true,
  ) );

}
add_action( 'after_setup_theme', 'sos_animals_theme_logo_setup' );

// Add languages
function sos_animals_load_theme_textdomain() {
  load_theme_textdomain( 'sos-animals', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'sos_animals_load_theme_textdomain' );

/* Combining Enqueue Functions (combine all enqueued scripts and styles into a single function, and then call them)*/
function add_theme_scripts() {
  wp_enqueue_style( 'bootstrap4', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css", '4.0.0-alpha.6' );

  wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/main.css', array('bootstrap4'), '2017031701');

  wp_deregister_script( 'jquery' ); /* first, deregister old jquery that's not compatible with our bootstrap version */
  wp_enqueue_script( 'jquery', "https://code.jquery.com/jquery-3.1.1.slim.min.js", array(), '3.1.1', true);

  wp_enqueue_script( 'tether', "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js", array('jquery'), '1.4.0', true);

  wp_enqueue_script( 'bootstrap4', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js", array('jquery', 'tether'), '4.0.0-alpha.6', true);
 
  wp_enqueue_script('carousel-jquery', get_template_directory_uri() - '/assets/js/carousel-ready.js', array('bootstrap4', 'jquery'), '2017032601' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// add custom excerpt length to any post
function get_custom_excerpt($num_words) {
  $post = get_post();
  $excerpt = $post->post_excerpt;
  if (empty($excerpt)) {
    $excerpt = strip_tags($post->post_content);
  }

  $words = explode(" ", $excerpt);
  $words = array_slice($words, 0, $num_words);
  $excerpt = implode(" ", $words);

  return $excerpt;
}
