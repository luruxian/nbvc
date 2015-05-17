<?php
/**
 * Top Page template file
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

					<?php

					$options = fsv002wpbasic_get_theme_options();
					$opWelcomeTitle = $options['welcome_title'];
					$opWelcomeText = $options['welcome_text'];

					if ( ( $opWelcomeTitle ) || ( $opWelcomeText ) ) : ?>

					<div id="topmain-welcome-area" class="topmain-widget-area">						
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p105.jpg" width="150" height="80" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p104.jpg" width="120" height="120" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p103.jpg" width="150" height="80" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p106.jpg" width="120" height="120" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p101.jpg" width="120" height="120" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p102.jpg" width="120" height="120" alt="DHC">
						</div>

					</div>
					<div id="topmain-welcome-area" class="topmain-widget-area">						
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p107.jpg" width="120" height="120" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p110.jpg" width="120" height="120" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p111.jpg" width="120" height="120" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p112.jpg" width="120" height="120" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p113.jpg" width="120" height="120" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p114.jpg" width="120" height="120" alt="DHC">
						</div>

					</div>
					<div id="topmain-welcome-area" class="topmain-widget-area">						
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p108.jpg" width="120" height="120" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p109.jpg" width="120" height="120" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p115.jpg" width="120" height="120" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p116.jpg" width="120" height="120" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p117.jpg" width="120" height="120" alt="DHC">
						</div>
						<div style="margin:5px;width:128px;height:130px;border: 1px solid #e7e7e7;box-shadow: 0 0 8px #dcdcdc;background-color:#ffffff;float:left">
						<img style="padding:5px" src="<?php echo get_template_directory_uri(); ?>/images/product/p118.jpg" width="120" height="120" alt="DHC">
						</div>

					</div>
					<p style="clear:left"></p>
					<br>

					<?php endif; ?>

					<div id="topmain-widget-area" class="topmain-widget-area">

						<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>

							<?php dynamic_sidebar( 'sidebar-6' ); ?>

						<?php else : // is_active_sidebar( 'sidebar-3' ) ?>

						<section class="widget widget_recent_entries">

							<h2 class="widget-title">新闻中心</h2>

							<?php 

							$args = array(
								'ignore_sticky_posts' => true, 
								'posts_per_page' => 5
							);

							$the_query = new WP_Query( $args );

							if ( $the_query->have_posts() ) : ?>

							<ul>

								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

								<li><span class="post-date"><?php echo get_the_date(); ?></span><span class="post-title-date-on"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>

								<?php endwhile; ?>

							</ul>

							<?php else: ?>

							<p><?php _e( 'There are currently no posts.', 'fsv002wpbasic' ); ?></p>

							<?php endif;

							wp_reset_postdata(); ?>

						</section>

						<?php endif; // is_active_sidebar( 'sidebar-6' ) ?>

					</div><!-- #topmain-widget-area -->

				</div><!-- #primary -->

				<?php get_sidebar( 'left' ); ?>

			</div>

			<?php get_sidebar( 'right' ); ?>

		</div>

	</div><!-- #main -->

<?php get_sidebar( 'footer' ); ?>

<?php get_footer(); ?>
