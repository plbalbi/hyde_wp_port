<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package palbisblog
 */

function post_read_more_button_text() {
	return "Keep reading...";
}

function has_readmore_tag($post) {
	return string_contains($post->post_content, "<!--more-->");
}

get_header();
get_sidebar(); 
?>

		<?php
		if ( have_posts() ) : ?>

			<div class="posts">
			<?php
			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();
				/* Display the exceprt of a post */
				get_template_part( 'template-parts/content', 'excerpt' );
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>

		<?php
		// get_footer(); 
		?>

<?php 
	get_footer();
