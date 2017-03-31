<?php

// Filter the excerpt length to various amount of words, depending on category archive page
/*function sos_animals_custom_excerpt_length( $length ) {
    if ( is_category( 'Nyheter' ) ) {
        return 50;
    } else {
        return 12;
    }
}
add_filter( 'excerpt_length', 'sos_animals_custom_excerpt_length' );*/

// Filter the "read more" excerpt string link to the post.
/*function sos_animals_excerpt_more( $more ) {
    return sprintf( '<br><a class="read-more btn btn-primary" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'sos-animals' )
    );
}
add_filter( 'excerpt_more', 'sos_animals_excerpt_more' );*/

// replaces ':)' and '=)' with a extremely cute and annoying dog emoji
function sos_animals_emoji($emoji) {
	$emoji = str_replace( array(':)', '=)'), '<img src="https://cdn.shopify.com/s/files/1/1061/1924/products/Dog_Emoji_1024x1024.png?v=1480481035" alt="sos-animals-dog-smiley" height="25" width="25">', $emoji );
	return $emoji;
}
add_filter('the_content', 'sos_animals_emoji');

