<?php
// get the header and slider on front page
get_header();
get_template_part('partials/content', 'carousel');
// get page template 
get_template_part('content-templates/page');
// get 3 posts from news category 
get_template_part('partials/content', 'frontnews');
// get the footer
get_footer();
?>