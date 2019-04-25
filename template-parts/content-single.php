<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Altar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php 
	if( has_post_thumbnail() ){
		$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'altar-1040x460');
		?>
		<div class="page-banner">
			<img src="<?php echo esc_url($image[0]); ?>">
		</div>
		<?php
	}
	?>
	
	<div class="page-content">

		<header>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php 
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				altar_posted_by();
				altar_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		</header>

		<div class="entry-content">
		<?php
		the_content();
		?>
		</div>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'altar' ),
			'after'  => '</div>',
		) );
		?>

		<footer class="entry-footer">
			<?php altar_entry_footer(); ?>
		</footer><!-- .entry-footer -->

		<?php
		the_post_navigation();

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
