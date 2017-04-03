<?php
// Shortcode for map
function sos_animals_map( $atts ){
	return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6397.786438463861!2d-4.703505176742681!3d36.70110376987628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72e86fcc5697f1%3A0xcee35df27a3b07ac!2s29570+Villafranco+de+Guadalhorce%2C+M%C3%A1laga%2C+Spanien!5e0!3m2!1ssv!2sse!4v1491167865805" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
}
add_shortcode( 'sos_animals_map', 'sos_animals_map' );