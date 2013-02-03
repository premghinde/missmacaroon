<?php
/**
 * Template Name: Showing Sub Page navigation
 *
 * Description: Will show sub nav for this section of the site
 *
 * @package WordPress
 * @subpackage MissMacaroon
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="sub-nav">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
		<div id="subnav">
		<ul>
		<?php
			$output = wp_list_pages('echo=0&depth=1&title_li=<h2>Top Level Pages </h2>' );
			if (is_page( )) {
			  $page = $post->ID;
			  if ($post->post_parent) {
			    $page = $post->post_parent;
			  }
			  $children=wp_list_pages( 'echo=0&child_of=' . $page . '&title_li=' );
			  if ($children) {
			    //$output = wp_list_pages ('echo=0&child_of=' . $page . '&title_li=<h2>Child Pages</h2>');
 			   $output = wp_list_pages ('echo=0&child_of=' . $page);
			  }
			}
			echo $output;
			?>
		</ul>
		</div><!-- #secondary -->
	</div><!-- #primary -->

<?php get_footer(); ?>