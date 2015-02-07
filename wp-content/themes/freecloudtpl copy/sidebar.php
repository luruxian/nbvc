		<!-- 左 カラム -->
		<div id="sidebar">

			<h3>最新のお知らせ一覧</h3>
			<ul class="sidemenu">
				<?php
				$my_query = new WP_Query('showposts=10');
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
            
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<?php endif; ?>

			<p><img src="<?php bloginfo('template_directory');?>/images/banner_tel.jpg" width="265" height="140" alt="banner" /></p>

		</div>
		<!-- /  左 カラム  -->
