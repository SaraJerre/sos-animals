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
				get_template_part('content-templates/page', 'with-featured-image');
			} else {
				get_template_part('content-templates/page', '');
			}
		}
	} else {
		_e('Sorry, could not find that page for you.', 'sos-animals');
	}
?>
		</div><!-- /.col-md-10.offset-md-1 -->
	</div><!-- /.row -->
</div><!-- /.container -->

<?php
	get_footer();
?>