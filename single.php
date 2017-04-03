<?php
	get_header();
?>
<div class="container">
  <div class="row">
   <div class="col-md-10 offset-md-1">
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
  </div>
</div>
<?php
	get_footer();
?>