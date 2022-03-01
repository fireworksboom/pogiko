<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage WP5_Default
 * @since 1.0.0
 */

get_header();
?>



	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<div class="cat-search">
				<form action="<?php bloginfo('url'); ?>" method="get" id="catform">
					<?php
						$parent = get_the_category()[0]->category_parent;
						$select = wp_dropdown_categories("child_of=".$parent."&hide_empty=0&orderby=name&echo=0");
						$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
						echo $select;
					?>
				</form>
			</div>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>

			</header><!-- .page-header -->

			
		<div class="cat-container">
		
			
	
		<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

	
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content/content', 'excerpt' );

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			wp5default_the_posts_navigation();

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>

		</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
