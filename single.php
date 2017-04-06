<!-- solution to be able to have a different single page layout for the Home Slider och Hundar category posts -->
<?php
	if (in_category('Home Slider' || 'Hundar')) {
		include ( 'content-templates/single-custom.php');
	} else { 
		include ( 'content-templates/single-default.php');
	}
?>