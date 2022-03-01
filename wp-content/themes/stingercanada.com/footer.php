<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage WP5_Default
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">


		
	</footer><!-- #colophon -->

	<a class="cta" href="tel:<?php if ( checkoption( 'phone' ) ): echo do_shortcode('[wp5default_option var="phone" text="" link_type="phone"]');
						endif; ?>"></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
