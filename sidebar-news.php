<!-- a news category sidebar with the 10 latest news will be displayed by default if 'news-sidebar' is not active -->
<?php if ( !is_active_sidebar('sidebar-news') ) :
	// The Query
	$news_archive_posts = new WP_Query('cat=5&posts_per_page=10');
?>
	<!-- get search form and custom default sidebar -->
	<?php get_search_form(); ?>
 	<h3><?php _e('News Archive', 'sos-animals') ?></h3>
	<!--  The Loop -->
	<?php while ( $news_archive_posts->have_posts() ) : $news_archive_posts->the_post(); ?>
	<ul class="list-unstyled">
	    <li>
	  		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	  	</li>
	</ul><!-- /.list-unstyled -->
	<?php endwhile; 
		else: ?>
<div class="news-sidebar">
	<ul class="list-unstyled">
		<?php 
			/* get search form and dynamic sidebar */
			get_search_form();
			dynamic_sidebar('news-sidebar');	
		?>
	</ul><!-- /.list-unstyled -->
</div><!-- /.news-sidebar -->
<?php endif; ?>

