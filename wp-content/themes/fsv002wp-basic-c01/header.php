<?php
/**
 * The Header template for our theme
 *
 * @package WordPress
 * @subpackage FSV002WP BASIC
 * @since FSV002WP BASIC 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page">

	<div id="masthead" class="site-header-area" role="banner">

		<div class="component-inner">

			<div id="header-menu-button" class="mmenu-load-button">

				<a href="#site-navigation"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_nav.png" width="32" height="28" alt="Navigation Menu"></a>

			</div>
			<?php

			$options = fsv002wpbasic_get_theme_options();
			$opHeaderLogo = $options[ 'header_logo' ];
			$opHeadLargeText = $options[ 'head_large_text' ];
			$opHeadText = $options[ 'head_text' ];
			$opLinkMap = $options[ 'link_sitemap' ];
			$opLinkCont = $options[ 'link_contact' ];

			if ( ( $opLinkMap ) && ( $opLinkCont ) ) { $hw_linkclass = 'hw_link2'; }
			elseif ( ! ( $opLinkMap ) && ! ( $opLinkCont ) ) { $hw_linkclass = 'hw_link0'; }
			else { $hw_linkclass = 'hw_link1'; }

			if ( ( $opHeadLargeText == "" ) && ( $opHeadText == "" ) && ( $opLinkMap == "" ) && ( $opLinkCont == "" ) ) : ?>

			<div id="header-title-area" class="header-title-only">

			<?php else: ?>

			<div id="header-title-area" class="header-title-area">

			<?php endif;

				if ( $opHeaderLogo ) : ?>

				<h1 class="site-title-img"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><img src="<?php echo $opHeaderLogo; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" /></a></h1>

				<?php else : ?>

				<h1 class="site-title">
					<a style="font-size:32px;color:darkcyan;" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></a>
				</h1>

				<?php endif; ?>

				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

			</div><!-- #header-title-area -->

			<div id="header-widget-area"><?php

				if ( ( $opLinkMap ) || ( $opLinkCont ) ) : ?>

					<p class="<?php echo $hw_linkclass; ?>">


					<?php if ( $opLinkCont ) : ?><a href="mailto:hanlin_trading@hotmail.com"><span><?php _e( 'Contact', 'fsv002wpbasic' ); ?></span></a><?php endif; ?>
					</p>
				<?php endif;

				if ( $opHeadText ) : ?><p class="hw_text"><?php echo "联络我们" ?></p><?php endif;
				if ( $opHeadLargeText ) : ?><p class="hw_text_large"><?php echo "080-4292-1782"; ?></p><?php endif; ?>

			</div><!-- #header-widget-area -->

		</div><!-- .component-inner -->

	</div><!-- #masthead -->

	<div id="header-nav-area" class="navigation-area">

		<div class="component-inner">

			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'fsv002wpbasic' ); ?>"><?php _e( 'Skip to content', 'fsv002wpbasic' ); ?></a>

			<nav id="site-navigation" class="main-navigation" role="navigation">

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'div', 'container_class' => 'menu' , 'menu_class' => 'menu' ) ); ?>

			</nav><!-- #site-navigation -->

		</div><!-- .component-inner -->

	</div><!-- #header-nav-area -->

	<?php

	if ( is_home() || is_front_page() ) :

		$slide_count = 0;

		for ( $i = 1 ; $i < 6 ; $i++ ) {

			${ "opSlide" . $i . "Url" } =  $options{ "slide" . $i . "_url" };
			${ "opSlide" . $i . "Cap" } =  $options{ "slide" . $i . "_cap" };
			${ "opSlide" . $i . "Pic" } =  $options{ "slide" . $i . "_pic" };

			if ( ${ "opSlide" . $i . "Url" } ) {

				${ "opSlide" . $i . "Url" } = '<a href="' . ${ "opSlide" . $i . "Url" } . '">' ;

			}

			if ( ${ "opSlide" . $i . "Pic" } ) {

				$slide_count++ ;

				if ( ! strstr( ${ "opSlide" . $i . "Pic" } , get_template_directory_uri() ) ) {

					${ "opSlide" . $i . "Pic" } = aq_resize( ${ "opSlide" . $i . "Pic" }, 1200, 300, $crop = true , $single = true, $upscale = true );

				}

				${ "opSlide" . $i . "Pic" } = '<img src="' . ${ "opSlide" . $i . "Pic" } . '" alt="' . ${ "opSlide" . $i . "Cap" } . '">' . "\n" ;

			}

			if ( ${ "opSlide" . $i . "Cap" } ) {

				${ "opSlide" . $i . "Cap" } = '<div class="bx-caption"><span>' . ${ "opSlide" . $i . "Cap" } . '</span></div>' . "\n" ;

			}

		}

		if ( $slide_count > 0 ) : ?>

	<div id="header-image" class="header-image-area">

		<div class="component-inner">

			<?php if ( $slide_count == 1 ) : ?><div class="main_slider_one"><?php endif; ?>

			<ul class="main_slider">

			<?php for ( $i = 1 ; $i < 6 ; $i++ ) {

				if ( ${ "opSlide" . $i . "Pic" } ) {

					echo '<li>' . "\n";

					echo ${ "opSlide" . $i . "Url" } ;
					echo ${ "opSlide" . $i . "Pic" } ;
					echo ${ "opSlide" . $i . "Cap" } ;

					if ( ${ "opSlide" . $i . "Url" } ) { echo '</a>' . "\n"; }

					echo '</li>' . "\n\n";

				}

			} ?>

			</ul>

			<?php if ( $slide_count == 1 ) : ?></div><?php endif; ?>

		</div>

	</div><!-- #header-title-area --><?php

		endif;

	endif; // is_home()/is_front_page() ?>
