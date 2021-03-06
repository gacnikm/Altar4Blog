<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Altar
 */

get_header();
?>

	<div class="content-area">

		<?php
		if ( have_posts() ) :
			?>
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="article-wrap clearfix">
			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content' );

				endwhile;
			?>
			</div>

			<?php	
			the_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div>

<?php
get_footer();
