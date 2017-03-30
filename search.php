<?php
/*
Template Name: Search Page
*/

// get the header
get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
	 	<article class="search-results">
	 		<header>
	 			<h1><?php _e('Search results', 'sos-animals'); ?></h1>
	 		</header>
	 		<main class="search-content">
	 			<?php get_search_form(); ?>
	 		</main>
	 	</article>
 		<hr>
	</div> <!-- /col-md-8 .offset-md-2-->
  </div><!-- /row -->
</div><!-- /container -->

<?php
// get the footer
get_footer();
?>