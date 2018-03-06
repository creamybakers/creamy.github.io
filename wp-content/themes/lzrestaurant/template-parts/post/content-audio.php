<?php
/**
 * Template part for displaying audio posts
 * @package WordPress
 * @subpackage lzrestaurant
 * @since 1.0
 * @version 1.4
 */

?>

<article class="article_content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<header class="entry-header">
		<?php		

			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} elseif ( is_front_page() && is_home() ) {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>
	</header>

	<?php
		$content = apply_filters( 'the_content', get_the_content() );
		$audio = false;

		// Only get audio from the content if a playlist isn't present.
		if ( false === strpos( $content, 'wp-playlist-script' ) ) {
			$audio = get_media_embedded_in_content( $content, array( 'audio' ) );
		}

	?>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'lzrestaurant-featured-image' ); ?>
			</a>
		</div>
	<?php endif; ?>

	<div class="entry-content">

		<?php
		if ( ! is_single() ) {

			// If not a single post, highlight the audio file.
			if ( ! empty( $audio ) ) {
				foreach ( $audio as $audio_html ) {
					echo '<div class="entry-audio">';
						echo esc_url( $audio_html );
					echo '</div><!-- .entry-audio -->';
				}
			};

		};

		if ( is_single() || empty( $audio ) ) {

			
			the_content( sprintf(
			/* translators: %s: Name of current post */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lzrestaurant' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'lzrestaurant' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );

		};
		?>

	</div>

	<?php
	if ( is_single() ) {
		lzrestaurant_entry_footer();
	}
	?>

</article>
