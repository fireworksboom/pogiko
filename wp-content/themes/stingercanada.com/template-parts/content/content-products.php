
<article class="animated zoomIn duration1" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-title">
		<?php if ( !is_single() ): ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php else: ?>
			<h2><?php the_title(); ?></h2>
		<?php endif ?>
		
	</div>
	<div class="blog-image">
		<?php  echo get_the_post_thumbnail(); ?>
	</div>
	<div class="blog-content">
		<?php if (! is_single() ): ?>
			<?php the_excerpt(); ?>
		<?php else: ?>
			<?php the_content(); ?>
		<?php endif ?>
	</div>
	<div class="blog-btn">
		<?php if ( ! is_single() ): ?>
			<a href="<?php the_permalink(); ?>" class="btn btn1">Read More</a>
		<?php endif ?>
	</div>
</article><!-- #post-${ID} -->