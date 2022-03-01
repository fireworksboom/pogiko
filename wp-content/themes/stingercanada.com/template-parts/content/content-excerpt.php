<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage WP5_Default
 * @since 1.0.0
 */

?>


<!-- <?php //if(is_single()):?>
	<article class="animated zoomIn duration1 eds-on-scroll" id="post-<?php //the_ID(); ?>" <?php //post_class(); ?>>
		<div class="blog-title">
			<?php //if ( !is_single() ): ?>
				<h2><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></h2>
			<?php //else: ?>
				<h2><?php //the_title(); ?></h2>
			<?php //endif ?>
			
		</div>
		<div class="blog-image">
			<?php  //echo get_the_post_thumbnail(); ?>
		</div>
		<div class="blog-content">
			<?php //the_content(); ?>
		</div>
	</article>
<?php //endif;?>
 -->

<div class="cat-box">


	<article class="animated zoomIn duration1" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="cat-flex">
			<div class="cat-sm">
				<div class="blog-image">
					<?php  echo get_the_post_thumbnail(); ?>
				</div>
			</div>
			<div class="cat-lg">
				<div class="blog-title">
					<?php if ( !is_single() ): ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php else: ?>
						<h2><?php the_title(); ?></h2>
					<?php endif ?>
				</div>
				<div class="blog-content">
					<h4><?php the_field('dilute');?></h4>
					<?php the_content(); ?>
					<h5><?php the_field('sizes');?></h5>
				</div>
			</div>
		</div>
		
	</article>

</div>
<!-- #post-${ID} -->