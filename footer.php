 <!-- FOOTER -->
      <footer class="site-footer">
        <div class="container footer">
          <div class="row">
          
              <!-- The footer widget area is triggered if any of the areas
               have widgets. If none of the sidebars have widgets, nothing should be output -->
              <?php
                /* Check if all of the widget areas are populated.
                 If this is the case, the theme will output the contents of all three. */
                if (   is_active_sidebar( 'first-footer-widget-area'  )
                    && is_active_sidebar( 'second-footer-widget-area' )
                    && is_active_sidebar( 'third-footer-widget-area'  )
                    ) : ?>
                      <div class="first col-md-4 widget-area">
                          <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                      </div><!-- .first .widget-area -->
                   
                      <div class="second col-md-4 widget-area">
                          <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                      </div><!-- .second .widget-area -->
                   
                      <div class="third col-md-4 widget-area">
                          <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
                      </div><!-- .third .widget-area -->

                  <!-- Checking if only two widget areas are populated.
                  If that's the case, each of the two will have it's content in a half-width element --> 
                  <?php
                    elseif ( is_active_sidebar( 'first-footer-widget-area'  )
                        && is_active_sidebar( 'second-footer-widget-area' )
                        && ! is_active_sidebar( 'third-footer-widget-area'  )
                    ) : ?> 
                         <div class="first col-md-6 widget-area">
                            <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                        </div><!-- .first .widget-area -->
                     
                        <div class="second col-md-6 widget-area">
                            <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                        </div><!-- .second .widget-area -->

                  <!-- Checking if just one widget area is populated.
                  If so, this will output the one widget area's contents in a full-width element. -->
                  <?php
                    elseif ( is_active_sidebar( 'first-footer-widget-area'  )
                        && ! is_active_sidebar( 'second-footer-widget-area' )
                        && ! is_active_sidebar( 'third-footer-widget-area'  )
                    ) :
                    ?>
                        <div class="first col-md-12 widget-area">
                            <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                        </div><!-- .first .widget-area -->
            <!-- end of all sidebar checks. -->
            <?php endif ;?>
            
          </div> <!-- /row -->
        </div><!-- /container -->
      </footer> 
    
    <?php wp_footer(); ?>
  </body>
</html>