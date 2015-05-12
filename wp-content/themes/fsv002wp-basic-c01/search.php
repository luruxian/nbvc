<?php
/**
 * The template for displaying Search Results pages
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

					<?php fsv002wpbasic_breadcrumb() ; ?>

					<?php if ( have_posts() ) : ?>

					<header class="main-content-header">

						<h2 class="main-content-title"><?php printf( __( 'Search Results for : %s', 'fsv002wpbasic' ), get_search_query() ); ?></h2>

					</header><!-- .main-content-header -->

					<div class="article-group">

						<?php while ( have_posts() ) : the_post();

						get_template_part( 'content', get_post_format() );

						endwhile; 

					else : // have_posts() check

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
