<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Altar
 */


$index = $wp_query->current_post;
$small_post_array = array(4, 5, 8, 9, 12, 13);

if( $index == 0 ){
	$class = '';
}else if( $index == 1 || $index == 2 ){
	$class = 'even-post';
}else if( in_array($index, $small_post_array) ){
	$class = 'small-post';
}else if( ($index > 2 && $index < 15) ){
	$class = 'big-post';
}else{
	$class = 'even-post';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('article-block', $class)); ?>>
	<?php 
	$image_style = '';

	if( has_post_thumbnail() ){
		$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'altar-615x400');
		if( $index == 0 ){
			$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'altar-1040x460');
		}
		$image_style = 'style=background-image:url('. esc_url($image[0]) .')';
	}
	?>

	<a href="<?php echo esc_url( get_permalink() ); ?>" <?php echo esc_attr($image_style); ?>>
	</a>


	<header class="entry-header">

		<?php
		if ( 'post' === get_post_type() ) { ?>
		<div class="entry-meta">
			<?php
			altar_posted_by();
			altar_posted_on();
			?>
		</div><!-- .entry-meta -->
		<?php } ?>

		<?php
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
	</header><!-- .entry-header -->
	
</article><!-- #post-<?php the_ID(); ?> -->
