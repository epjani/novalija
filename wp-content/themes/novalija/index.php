<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="left_blank_area"></div>
		<div class="site_navigation">
			<?php get_sidebar(); ?>
		</div>
		<div id="content" class="site-content" role="main">


		</div><!-- #content -->
		<div class="clear"></div>
	</div><!-- #primary -->


<?php get_footer(); ?>