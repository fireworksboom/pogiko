<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage WP5_Default
 * @since 1.0.0
 */

?>
<div class="row">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<header class="entry-header">
			<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
		</header>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="blog-image">
					<?php  echo get_the_post_thumbnail(); ?>
				</div>
				<h3><?php the_field('dilute');?></h3>
				<div class="blog-content">
					<?php if (! is_single() ): ?>
						<?php the_excerpt(); ?>
					<?php else: ?>
						<?php the_content(); ?>
					<?php endif ?>
					<h4><?php the_field('sizes');?></h4>
				</div>
				<div class="blog-btn">
					<?php if ( ! is_single() ): ?>
						<a href="<?php the_permalink(); ?>" class="btn btn1">Read More</a>
					<?php endif ?>
				</div>
			</article><!-- #post-${ID} -->
		<footer class="entry-footer">
			<?php wp5default_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	</article><!-- #post-${ID} -->
</div>