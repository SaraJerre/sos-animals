<?php
// get the header
get_header();
?>

<div class="container">

	<div class="row">
		<div class="col-md-12">

			<div class="container">
				<div class="row">
			
					<?php
					// the loop starts here
					if ( have_posts() ) : while ( have_posts() ) : the_post();
					?>
						<article class="col-md-12">
							<header>
							 	<h1 class="the-title"><?php the_title(); ?></h1>
							</header>
					 		<?php if ( has_post_thumbnail() ) {  
								    	the_post_thumbnail('post-featured-image', array('class' => 'alignright') );
								  } 
							?>
							
							<div class="the-content">
								<?php the_content(); ?>
							</div>
						</article>
						<?php
						// the loop ends here
						endwhile;
					else :
					    _e( 'Sorry, no post matched your criteria.', 'sos-animals' );
					endif;
					?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.col-md-12 -->
	</div><!-- /.row -->
</div><!-- /.container -->

<?php
// get the footer
get_footer();
?>