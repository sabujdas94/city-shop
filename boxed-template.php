<?php
/**
 * Template Name: Boxed Template Without Sidebar
 *
 * This is the template that displays content with full width.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CitySHop
 */

get_header();
?>
	
	<div class="boxed-content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
		?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="entry-content">
					<?php
						the_content();
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-<?php the_ID(); ?> -->
		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
