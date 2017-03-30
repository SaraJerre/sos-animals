<?php
// get the header
get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">

<?php
// the loop starts here
 if ( have_posts() ) : while ( have_posts() ) : the_post();
 ?>
 	<article class="post">
 		<header>
 			<h1 class="the-title"><?php the_title(); ?></h1>
 		</header>
 		<?php if ( has_post_thumbnail() ) {
			    the_post_thumbnail();
			  } 
		?>
 		<main class="the-excerpt">
 			<?php the_excerpt(); ?>
 		</main>
 	</article>
 	<hr>
<?php
// the loop ends here
endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'sos-animals' );
endif;
?>
	
	</div> <!-- /col-md-8 .offset-md-2-->
  </div><!-- /row -->
</div><!-- /container -->

<?php
// get the footer
get_footer();
?>