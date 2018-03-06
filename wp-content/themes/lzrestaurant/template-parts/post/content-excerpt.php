<?php
/**
 * Template part for displaying posts with excerpts
 * @package WordPress
 * @subpackage lzrestaurant
 * @since 1.0
 * @version 1.4
 */

?>

<article class="article_content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
		<?php elseif ( 'page' === get_post_type() && get_edit_post_link() ) : ?>
			<div class="entry-meta">
				<?php lzrestaurant_edit_link(); ?>
			</div>
		<?php endif; ?>

		<?php if ( is_front_page() && ! is_home() ) {
			the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
		} else {
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		} ?>
	</header>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>

</article>
