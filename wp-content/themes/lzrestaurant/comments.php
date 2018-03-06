<?php
/**
 * The template for displaying comments
 * @package WordPress
 * @subpackage lzrestaurant
 * @since 1.0
 * @version 1.4
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( esc_html(_x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'lzrestaurant' ), get_the_title() ) );
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					esc_html( _nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'lzrestaurant'
					) ),
					esc_html (number_format_i18n( $comments_number ) ),
					get_the_title()
				);
			}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 100,
					'style'       => 'ol',
					'short_ping'  => true,
				) );
			?>
		</ol>
		
	<?php

	endif; 
	
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'lzrestaurant' ); ?></p>
	<?php
	endif;

	comment_form();
	?>

</div>
