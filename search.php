<?php
// get the header
get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1">
    	<?php if ( have_posts() ) : ?>
	 	<article class="search-results">
 			<!-- prints 'Search results' followed by the user's search input as title -->
 			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
 	
 			<?php /* Start the Loop */ ?>
        	<?php while ( have_posts() ) : the_post(); ?>
 			<header>
 				<h1 class="the-title"><?php the_title(); ?></h1>
 			</header>
				<?php if ( has_post_thumbnail() ) {
			    	the_post_thumbnail();
			  	} 
			?>
				<main class="the-excerpt">
					<?php the_excerpt(50); ?>
					 <div class="read-more-wrapper">
                      <a href="<?php the_permalink(); ?>" class="btn btn-success"><?php _e('Read more', 'sos-animals') ?></a>
                    </div>
 				</main>
 			<?php
 			// the loop ends here
			endwhile;
			else :
    			_e( 'Sorry, no search results matched your criteria.', 'sos-animals' );
			endif;
			?>
	 	</article>
	</div> <!-- /col-md-10 .offset-md-1-->
  </div><!-- /row -->
</div><!-- /container -->

<?php
// get the footer
get_footer();
?>