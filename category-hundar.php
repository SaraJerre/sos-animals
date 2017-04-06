<?php
get_header();
?>
<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading"><?php single_cat_title(); ?></h1>
      <p class="lead text-muted">Good Boy drool lazy cat right paw ID tag finch slobbery bed chow nest run fast. Kisses Scooby snacks yawn play dead lick bird seed chew tongue walk cage bird food heel harness fur biscuit?</p>
      <p>
        <a href="http://sarajerre.se/sos-animals/kontakt/kontaktformular/" class="btn btn-primary">Kontakta oss</a>
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