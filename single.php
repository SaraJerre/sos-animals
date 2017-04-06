<?php
	get_header();
?>
<div class="container">
  <div class="row">
   <div class="col-md-8">
<?php	if ( have_posts() ) {
		while (have_posts() ) {
			the_post();

			if ( has_post_thumbnail() ) {
				get_template_part('content-templates/article', 'with-featured-image');
			} else {
				get_template_part('content-templates/article', '');
			}	
		}	
	} else {
		_e('Sorry, could not find that post for you.', 'sos-animals');
	}
?>	
	</div>
	<div class="col-md-4">
		<!-- if the post belongs to the 'Nyheter' category, a custom sidebar will be included -->
		<?php if ( in_category('Nyheter') ) : 
	 		get_sidebar('news');
	 	endif; ?>
	</div>
  </div>
</div>	
<?php
	get_footer();
?>