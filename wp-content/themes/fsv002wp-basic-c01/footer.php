<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage FSV002WP BASIC
 * @since FSV002WP BASIC 1.0
 */
?>

	<div id="main-footer" class="footer-copy-area" role="contentinfo">

		<div class="component-inner">

			<p class="footer-copy"><?php

				$options = fsv002wpbasic_get_theme_options();
				$opFootText = $options[ 'foot_text' ];

				echo nl2br( $opFootText );

			?></p>

		</div><!-- .component-inner -->

	</div><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
