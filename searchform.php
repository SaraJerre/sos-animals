<?php
/**
 * Search Form Template
 *
 */
?>

<form method="get" class="form-search ml-auto" action="<?php echo home_url( '/' ); ?>">
	<div class="input-group">
		<input type="text" class="form-control search-query" name="s" placeholder="<?php esc_attr_e('search here', 'sos-animals'); ?>" />
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default" name="submit" id="searchsubmit" value="<?php esc_attr_e('Search', 'sos-animals'); ?>"><?php _e('Search', 'sos-animals'); ?></button>
		</span>
	</div>
</form>

