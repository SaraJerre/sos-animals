<!-- 3 news posts from news category on front page -->
<div class="container">
  <div class="row">
<!-- create 3 columns that will only be visible on front page showing 3 news posts -->
<?php 
$news_posts = new WP_Query('cat=5&posts_per_page=3');
	if ($news_posts->have_posts() ) {
		while ( $news_posts->have_posts() ) {
		?>
			<div class="col-md-4 news-post">
			<?php
			$news_posts->the_post();
			?>
				<h3><?php the_title(); ?></h3>
				<?php 
				  // check if the post has a Featured Image assigned to it.
				  if ( has_post_thumbnail() ) {
				    the_post_thumbnail();
				  } 
				?>
				<div class="custom-excerpt">
					<?php echo get_custom_excerpt(10); ?>
		 			<div class="read-more-wrapper">
		 				<a href="<?php the_permalink(); ?>" class="btn btn-success front-news"><?php _e('Read more', 'sos-animals') ?></a>
		 			</div>
		 		</div>
		 	</div><!-- /.col-md-4 -->
		<?php 
		}
		?>
	<?php
	}
	?>
  </div><!-- /row -->
</div><!-- /container