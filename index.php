<?php
// get the header and slider on front page
get_header();
get_sidebar('carousel');
?>

<div class="container">
  <div class="row">
    <div class="col-md-8">

<?php
// the loop starts here
 if ( have_posts() ) : while ( have_posts() ) : the_post();
 ?>
 	<article class="post">
 		<header>
 			<h1 class="the-title"><?php the_title(); ?></h1>
 		</header>
 		<main class="the-content">
 			<?php the_content(); ?>
 		</main>
 	</article>
<?php
// the loop ends here
endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'sos-animals' );
endif;
?>
	</div> <!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->

<?php
// get the footer
get_footer();
?>