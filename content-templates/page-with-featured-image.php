<article class="page with-featured-image">
	<div class="featured-image" style="background-image: url(<?php the_post_thumbnail_url('page-featured-image'); ?>)"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<header>
					<h1 class="the-title"><?php the_title(); ?></h1>
				</header>
			</div><!-- /.col-md-10 offset-md-1 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<main class="the-content">
					<?php the_content(); ?>
				</main>
			</div><!-- /.col-md-10 offset-md-1 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</article>