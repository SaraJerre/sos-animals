<article class="post with-featured-image">
	<div class="featured-image">
		<img src="<?php the_post_thumbnail_url('post-featured-image'); ?>">
	</div>
	<header>
		<h1 class="the-title"><?php the_title(); ?></h1>
			<h4 class="the-meta">
				<span class="the-date"><?php the_date(); ?></span>
			</h4>
	</header>
	<main class="the-content">
		<?php the_content(); ?>
	</main>
</article>