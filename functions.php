<?php
// Setup theme
require_once('includes/sos-animals-setup.php');

// Register Custom Navigation Walker
require_once('includes/wp-bootstrap-navwalker.php');

// Add filters

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<br><a class="read-more btn btn-primary" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'sos-animals' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Add actions