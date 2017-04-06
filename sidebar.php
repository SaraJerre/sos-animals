<div class="primary-sidebar">
	<ul class="list-unstyled">
		<?php 
			if ( is_active_sidebar('sidebar-primary') ) {
				get_search_form(); 
				dynamic_sidebar('sidebar-primary');
			}
		?>
	</ul><!-- /.list-unstyled -->
</div><!-- /.sidebar -->