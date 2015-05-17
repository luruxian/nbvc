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

				
					<h3 class="widget-title">联系我们</h3>
					<table>
						<tr>
							<td style="text-align:right">咨询:</td>
							<td style="padding-left:5px"><a href="mailto:info@nbvc.co">info@nbvc.co</a></td>
						</tr>
						<tr>
							<td style="text-align:right">&nbsp;</td>
							<td style="padding-left:5px">&nbsp;</td>
						</tr>
						<tr>
							<td>商务合作:</td>
							<td style="padding-left:5px"><a href="mailto:bd@nbvc.co">bd@nbvc.co</a></td>
						</tr>
						<tr>
							<td style="text-align:right">&nbsp;</td>
							<td style="padding-left:5px">&nbsp;</td>
						</tr>
						<tr>
							<td>加入星云:</td>
							<td style="padding-left:5px"><a href="mailto:hr@nbvc.co">hr@nbvc.co</a></td>
						</tr>
					</table>	


				
				<?php endif; // is_active_sidebar( 'sidebar-1' ) ?>

			</div><!-- #footer-widget-area-1 -->

			<div id="footer-widget-area-2" class="widget-area">

				<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>

				<?php dynamic_sidebar( 'sidebar-4' ); ?>

				<?php else : // is_active_sidebar( 'sidebar-4' ) ?>

	
					<div style="padding-left:50px">
					<img src="<?php echo get_template_directory_uri(); ?>/images/a1.png" width="261" height="100" alt="Navigation Menu">
					</div>

				
				<?php endif; // is_active_sidebar( 'sidebar-2' ) ?>

			</div><!-- #footer-widget-area-2 -->

			<div id="footer-widget-area-3" class="widget-area">

				<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>

				<?php dynamic_sidebar( 'sidebar-5' ); ?>

				<?php else : // is_active_sidebar( 'sidebar-5' ) ?>

				<aside class="widget widget_recent_entries">

					<h3 class="widget-title">星云二维码</h3>

					

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
