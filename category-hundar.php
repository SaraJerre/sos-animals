<?php
get_header();
?>
<section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary">Main call to action</a>
          <a href="#" class="btn btn-secondary">Secondary action</a>
        </p>
      </div>
    </section>

    <div class="album text-muted">
      <div class="container">
        <div class="row">
          <?php 
            $dogs_posts = new WP_Query('cat=6');
              if ($dogs_posts->have_posts() ) {
              ?>
              
               <?php
                  while ( $dogs_posts->have_posts() ) {
                    $dogs_posts->the_post();
                    ?>
                  <div class="card">
                      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                      <?php 
                      // check if the post has a Featured Image assigned to it.
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                      } 
                      ?>
                    <p class="card-text"><?php echo get_custom_excerpt(20); ?></p>
                    <div class="read-more-wrapper">
                      <a href="<?php the_permalink(); ?>" class="btn btn-success"><?php _e('Read more', 'sos-animals') ?></a>
                    </div>
                  </div>
                <?php 
                  }
              }
              ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.album.text-muted -->
<?php
get_footer();
?>