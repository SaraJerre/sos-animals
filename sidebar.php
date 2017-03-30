<div class="sidebar">
	<ul class="list-unstyled">
		<?php 
			if ( is_active_sidebar('sidebar') ) {
				dynamic_sidebar('sidebar');
			}
		?>
	</ul><!-- /.list-unstyled -->
</div><!-- /.sidebar -->