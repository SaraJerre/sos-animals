<!-- Bootstrap carousel home slider -->
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php
        // create new secondary query loop and ask for the latest post from the category Home Slider
         $the_query = new WP_Query(array(
            'category_name' => 'Home Slider',
            'posts_per_page' => 1
          ));
         while ( $the_query->have_posts() ) :
          $the_query->the_post();
        ?>
        <div class="carousel-item active">
          <?php 
            the_post_thumbnail('large');
          ?>
          <div class="container"> 
            <div class="carousel-caption d-none d-md-block">
              <h1><?php the_title(); ?></h1>
              <?php echo get_custom_excerpt(10); ?>
              <div class="read-more-wrapper">
                <a href="<?php the_permalink(); ?>" class="btn btn-success"><?php _e('Read more', 'sos-animals') ?></a>
              </div>
            </div>
          </div><!-- /.container -->
        </div><!-- /.item-active -->
        <?php
          // end secondary query loop
          endwhile;
          wp_reset_postdata();
        ?>
      <?php 
      /* start 2nd secondary query loop to include 2 more posts from the same category 
      but using offset so that the active post above doesn't get repeated */
      $the_query = new WP_Query(array(
          'category_name' => 'Home Slider',
          'posts_per_page' => 2,
          'offset' => 1
        ));
        while ( $the_query->have_posts() ) :
          $the_query->the_post();
      ?>
      <div class="carousel-item">
        <?php the_post_thumbnail('large'); ?>
        <div class="container">
          <div class="carousel-caption d-none d-md-block">
            <h1><?php the_title(); ?></h1>
            <?php echo get_custom_excerpt(10); ?>
              <div class="read-more-wrapper">
                <a href="<?php the_permalink(); ?>" class="btn btn-success"><?php _e('Read more', 'sos-animals') ?></a>
              </div>
          </div>
        </div><!-- /.container -->
      </div><!-- /.carousel-item -->
      <?php 
        endwhile;
        wp_reset_postdata();
      ?>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>