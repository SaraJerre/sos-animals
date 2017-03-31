<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
  </head>
  <body <?php echo body_class(); ?>> <!-- adds class to body tag -->
    <div class="navbar-wrapper">
      <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
          <!-- menu that works with Bootstrap with dropdown-support -->
          <?php
            wp_nav_menu( array(
              'theme_location'  => 'header-menu',
              'container'     => 'div',
              'container_class' => 'collapse navbar-collapse',
              'container_id'      => 'navbarCollapse',
              'menu_class'    => 'nav navbar-nav',
              'fallback_cb'   => '__return_false',
              'items_wrap'    => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'       => 2,
              'walker'      => new bootstrap_4_walker_nav_menu()
            ) );
          ?>

          <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- <form class="form-inline mt-2 mt-md-0 ml-auto">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
            <?php get_search_form(); ?>
          </div>
        </div><!-- /.container -->
      </nav>
    </div><!-- /.navbar-wrapper -->

 
