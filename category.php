<?php
// get the header
get_header();
?>

<div class="container">

	<h1><?php single_cat_title(); ?></h1>

	<div class="row">
		<div class="col-md-9">

			<div class="container">
				<div class="row">
			
					<?php
					// the loop starts here
					if ( have_posts() ) : while ( have_posts() ) : the_post();
					?>
						<article class="category col-md-12">
					 		<?php if ( has_post_thumbnail() ) {  
								    	the_post_thumbnail('medium', array('class' => 'alignleft'));
								  } 
							?>
							<header>
							 	<h1 class="the-title"><?php the_title(); ?></h1>
							</header>
							<div class="the-meta">
								<h4><?php the_time( get_option( 'date_format' ) ); ?></h4>
							</div>
							<div class="the-excerpt">
								<?php echo get_custom_excerpt(40); ?>
								<div class="read-more-wrapper">
									<a href="<?php the_permalink(); ?>" class="btn btn-success"><?php _e('Read more', 'sos-animals') ?></a>
								</div>
							</div>
						</article>
						<?php
						// the loop ends here
						endwhile;
					else :
					    _e( 'Sorry, no posts matched your criteria.', 'sos-animals' );
					endif;
					?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.col-md-9 -->
		<!-- include news sidebar -->
		<div class="col-md-3">
			<?php include ('sidebar-news.php'); ?>
		</div><!-- /.col-md-3 -->
	</div><!-- /.row -->
</div><!-- /.container -->

<?php
// get the footer
get_footer();
?>