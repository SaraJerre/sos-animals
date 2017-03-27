<?php
	get_header();
	if ( have_posts() ) {
		while (have_posts() ) {
			the_post();

			get_template_part('content-templates/page', '');
		}
	} else {
		_e('Sorry, could not find that page for you.', 'sos-animals');
	}
	get_footer();
?>