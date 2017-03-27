<div class="sidebar">
	<ul class="list-unstyled">
		<?php 
			if ( is_active_sidebar('news-sidebar') ) {
				dynamic_sidebar('news-sidebar');
			}
		?>
	</ul><!-- /.list-unstyled -->
</div><!-- /.sidebar -->