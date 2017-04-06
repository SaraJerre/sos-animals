<?php
/*
Template Name: Right Sidebar Page
*/
get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-1">

<?php
 if ( have_posts() ) : while ( have_posts() ) : the_post();
 ?>

  <h1><?php the_title(); ?></h1>

 <?php
        the_content();
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'sos-animals' );
    endif;
?>

    </div> <!-- /col-md-8 -->
     <div class="col-md-4"><!-- col-md-4 -->
      <?php
      get_sidebar('primary');
      ?>
    </div> <!-- /col-md-4 -->
  </div><!-- /row -->
</div><!-- /container -->
 
<?php
get_footer();
?>