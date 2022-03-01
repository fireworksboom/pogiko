<?php
/**
 * Displays header site banner area
 *
 * @package WordPress
 * @subpackage WP5_Default
 * @since 1.0.0
 */
?>
<!-- <?php //if ( is_active_sidebar( 'site-banner' ) ) : ?> -->
<div class="site-banner">

	<!-- <?php //dynamic_sidebar( 'site-banner' ); ?> -->
	<?php 
		if ( checkoption( 'banner' ) ) : 
			echo do_shortcode('[wp5default_option var="banner" type="image" text="Banner"]');
		endif;
	?>

</div><!-- .site-banner -->
<!-- <?php //endif; ?> -->