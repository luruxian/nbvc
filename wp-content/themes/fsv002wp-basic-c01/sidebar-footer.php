<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage FSV002WP BASIC
 * @since FSV002WP BASIC 1.0
 */
?>

	<div id="sub" class="footer-widget-area" role="complementary">

		<div class="component-inner">

			<div id="footer-widget-area-1" class="widget-area">

				<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>

				<?php dynamic_sidebar( 'sidebar-3' ); ?>

				<?php else : // is_active_sidebar( 'sidebar-3' ) ?>

				<aside class="widget widget_categories">

					<h3 class="widget-title"><?php _e( 'Category List', 'fsv002wpbasic' ); ?></h3>

					<ul>

						<?php wp_list_categories( 'orderby=name&title_li=' ); ?>

					</ul>

				</aside>

				<?php endif; // is_active_sidebar( 'sidebar-1' ) ?>

			</div><!-- #footer-widget-area-1 -->

			<div id="footer-widget-area-2" class="widget-area">

				<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>

				<?php dynamic_sidebar( 'sidebar-4' ); ?>

				<?php else : // is_active_sidebar( 'sidebar-4' ) ?>

				<aside class="widget widget_pages">

					<h3 class="widget-title"><?php _e( 'Page List', 'fsv002wpbasic' ); ?></h3>

					<ul>

						<?php  wp_list_pages( 'title_li=' ); ?>

					</ul>

				</aside>

				<?php endif; // is_active_sidebar( 'sidebar-2' ) ?>

			</div><!-- #footer-widget-area-2 -->

			<div id="footer-widget-area-3" class="widget-area">

				<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>

				<?php dynamic_sidebar( 'sidebar-5' ); ?>

				<?php else : // is_active_sidebar( 'sidebar-5' ) ?>

				<aside class="widget widget_recent_entries">

					<h3 class="widget-title">弊社QRコード </h3>

					

					<ul>
						<br>

					<img src="<?php echo get_template_directory_uri(); ?>/images/url.png" width="108" height="108" alt="Navigation Menu">

					</ul>

					

				</aside>

				<?php endif; // is_active_sidebar( 'sidebar-5' ) ?>

			</div><!-- #footer-widget-area-3 -->

		</div><!-- .component-inner -->

		<div class="clear"></div>

	</div><!-- #secondary -->
