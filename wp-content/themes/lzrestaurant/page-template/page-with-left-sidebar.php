<?php
/*
*
Template Name: Page left sidebar
*/
get_header(); ?>

<div class="container">
	<div class="content-area" >
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div id="sidebar" class="col-md-4">
					<?php dynamic_sidebar('sidebar-2'); ?>
		            <div class="clearfix"></div>  
				</div>
				<div id="" class="col-md-8 content_area">	
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/page/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
				<div class="clearfix"></div> 
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
