	<div class="copyright">
		<p><?php
			$site_info = get_bloginfo( 'description' ) . ' - ' . get_bloginfo( 'name' ) . ' &copy; ' . date( 'Y' );

			if ( get_theme_mod( 'copyright' ) ) :
				echo get_theme_mod( 'copyright' ); ?>

				<span class="techno">
					<img src="http://localhost/solidstonesolutionsllc.com/wp-content/themes/solidstonesolutionsllc.com/assets/images/hd-logo.png" alt="Technodream LLC Company Logo"><a href="https://technodreamwebdesign.com/" target="_blank">Web Design</a> Done by <a href="https://technodreamwebdesign.com/" target="_blank"> TechnoDream LLC</a>
				</span>
		<?php
			else :
				echo $site_info;
			endif;
		?></p>
	</div>
