<!-- 3 news posts from news category on front page -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
<!-- create 3 columns that will only be visible on front page showing 3 news posts -->
<?php 
$news_posts = new WP_Query('cat=5&posts_per_page=3');
	if ($news_posts->have_posts() ) {
	?>
		<div class="row news-posts">
		<?php
		while ( $news_posts->have_posts() ) {
		?>
			<div class="col-md-4 news-post">
			<?php
			$news_posts->the_post();
			?>
				<h4><?php the_title(); ?></h4>
				<?php 
				  // check if the post has a Featured Image assigned to it.
				  if ( has_post_thumbnail() ) {
				    the_post_thumbnail('medium');
				  } 
				?>
				<p><?php the_excerpt(); ?></p>
		<?php 
		?>
			</div><!-- /.col-md-4 -->
	<?php 
	}
	?>
	</div><!-- /.row -->
<?php
}
?>
	</div> <!-- /col-md-12 -->
  </div><!-- /row -->
</div><!-- /container -->