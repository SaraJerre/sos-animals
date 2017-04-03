<?php

// replaces ':)' and '=)' with a extremely cute and annoying dog emoji
function sos_animals_emoji($emoji) {
	$emoji = str_replace( array(':)', '=)'), '<img src="https://cdn.shopify.com/s/files/1/1061/1924/products/Dog_Emoji_1024x1024.png?v=1480481035" alt="sos-animals-dog-smiley" height="25" width="25">', $emoji );
	return $emoji;
}
add_filter('the_content', 'sos_animals_emoji');

