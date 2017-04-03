<?php
// get the header
get_header();
?>

<div class="container">
  <div class="row">

<?php
// the loop starts here
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
	<header class="col-md-10 offset-md-1">
 		<h1 class="the-title"><?php the_title(); ?></h1>
 	</header>
 	<div class="category the-thumbnail col-md-5 offset-md-1">
 		
 		<?php if ( has_post_thumbnail() ) {  
			    	the_post_thumbnail('medium');
			  } 
		?>
	</div>
	<div class="category the-excerpt col-md-5 offset-md-1">
		<h4><?php the_date(); ?></h4>
		<?php echo get_custom_excerpt(40); ?>
		<div class="read-more-wrapper">
			<a href="<?php the_permalink(); ?>" class="btn btn-success"><?php _e('Read more', 'sos-animals') ?></a>
		</div>
		<hr>
	</div>
<?php
// the loop ends here
endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'sos-animals' );
endif;
?>
  </div><!-- /row -->
</div><!-- /container -->

<?php
// get the footer
get_footer();
?>