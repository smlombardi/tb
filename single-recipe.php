<?php
/**
 * The template for displaying all pages, single posts and attachments
 *
 * This is a new template file that WordPress introduced in
 * version 4.3. Note that it uses conditional logic to display
 * different content based on the post type.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Total WordPress Theme
 * @subpackage Templates
 * @version 3.6.0
 */

get_header(); ?>


	<div id="content-wrap" class="container clr">

			<div id="primary" class="content-area clr">
			<div id="content" class="site-content clr">


				<?php while ( have_posts() ) : the_post(); ?>

				 	<header class="entry-header">
						<h1 class="recipe-title"><?php the_title(); ?></h1>
					</header>

				<?php the_post_thumbnail('recipe-thumb');; ?>





					<div class="entry-content">
						<?php the_content(); ?>

					</div><!-- .entry-content -->

					<nav id="nav-below" class="navigation">
						<span class="nav-previous"><?php previous_post_link( '%link', __( 'Previous Recipe', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next Recipe', 'twentyeleven' ) ); ?></span>
					</nav>
				<?php endwhile; // end of the loop. ?>
<div style="clear:both"></div>
			</div><!-- #content -->
			</div> <!-- primary -->
		</div><!-- #container -->

<?php get_footer(); ?>
