<?php
/**
 * The main template file
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage FSV002WP BASIC
 * @since FSV002WP BASIC 1.0
 */
?>

<?php get_header(); ?>

	<div id="main" class="main-content-area">

		<div class="component-inner">

			<div id="wrapbox" class="main-content-wrap">

				<div id="primary" class="main-content-site" role="main">

					<?php if  ( ! is_home() && ! is_front_page() ) { fsv002wpbasic_breadcrumb(); } 

					if ( have_posts() ) : ?>

					<div class="article-group">

						<?php while ( have_posts() ) : the_post();

							get_template_part( 'content', get_post_format() );

						endwhile;

					else :

						get_template_part( 'content', 'none' );

					endif; // end have_posts() check ?>

					</div>

					<?php fsv002wpbasic_pagination(); ?>

				</div><!-- #primary -->

				<?php get_sidebar( 'left' ); ?>

			</div>

			<?php get_sidebar( 'right' ); ?>

		</div>

	</div><!-- #main -->

<?php get_sidebar( 'footer' ); ?>

<?php get_footer(); ?>
