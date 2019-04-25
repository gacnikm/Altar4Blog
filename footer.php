<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Altar
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-social">
			<?php 
			$altar_facebook_url = get_theme_mod('altar_facebook_url');
			$altar_twitter_url = get_theme_mod('altar_twitter_url');
			$altar_gplus_url = get_theme_mod('altar_gplus_url');
			$altar_linkedin_url = get_theme_mod('altar_linkedin_url');
			$altar_youtube_url = get_theme_mod('altar_youtube_url');
			$altar_pinterest_url = get_theme_mod('altar_pinterest_url');
			$altar_instagram_url = get_theme_mod('altar_instagram_url');
			
			if( $altar_facebook_url ){ ?>
			<a href="<?php echo esc_url($altar_facebook_url); ?>" class="facebook"><i class="fab fa-facebook-f"></i></a>
			<?php }

			if( $altar_twitter_url ){ 
			?>
			<a href="<?php echo esc_url($altar_twitter_url); ?>" class="twitter"><i class="fab fa-twitter"></i></a>
			<?php }

			if( $altar_gplus_url ){ 
			?>
			<a href="<?php echo esc_url($altar_gplus_url); ?>" class="google-plus"><i class="fab fa-google-plus-g"></i></a>
			<?php }

			if( $altar_linkedin_url ){ 
			?>
			<a href="<?php echo esc_url($altar_linkedin_url); ?>" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
			<?php }

			if( $altar_youtube_url ){ 
			?>
			<a href="<?php echo esc_url($altar_youtube_url); ?>" class="youtube"><i class="fab fa-youtube"></i></a>
			<?php }

			if( $altar_pinterest_url ){ 
			?>
			<a href="<?php echo esc_url($altar_pinterest_url); ?>" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
			<?php }

			if( $altar_instagram_url ){ 
			?>
			<a href="<?php echo esc_url($altar_instagram_url); ?>" class="instagram"><i class="fab fa-instagram"></i></a>
			<?php }
			?>
		</div>

		<div class="site-info">
			<?php 
			$altar_copyright_text = get_theme_mod('altar_copyright_text');
			if($altar_copyright_text){
				echo esc_html($altar_copyright_text) . ' | ';
			}
			?>
			<?php
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'altar' ), 'Altar', '<a href=" https://www.worksheetsbuddy.com/printable-worksheets-cbse/ ">Printable Worksheets</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
