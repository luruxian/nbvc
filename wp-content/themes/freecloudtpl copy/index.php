<?php get_header(); ?>

		<!-- 中央メイン画像 -->
		<p><img src="<?php bloginfo('template_directory');?>/images/main.jpg" width="910" height="300" alt="banner" /></p>
		<!-- / 中央メイン画像 -->

		<!-- 中央カラム -->
		<div id="main">

			<h2>株式会社システムガーデンの取り組み</h2>
			<p class="withImage">
				<img src="<?php bloginfo('template_directory');?>/images/banner_main.jpg" width="231" height="143" alt="banner" />
				株式会社システムガーデンでは最新のIT技術と社会との調和を目指します。
			</p>
			<p class="clear"></p>

			<h2>自然との調和を目指す企業です</h2>
			<!-- 小画像 -->
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/product1.jpg" width="195" height="100" class="box_img" alt="banner" />
				株式会社システムガーデンでは最新技術と自然との調和を目指します。
				<p class="button"><a href="#">コンサルティング事業</a></p>
			</div>
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/product2.jpg" width="196" height="100" class="box_img" alt="banner" />
				革新的な技術で世の中を動かす企業を目指しますホームページサンプル株式会社。
				<p class="button"><a href="#">マーケティング事業</a></p>
			</div>
			<div class="box last">
				<img src="<?php bloginfo('template_directory');?>/images/product3.jpg" width="196" height="100" class="box_img" alt="banner" />
				ホームページサンプル株式会社では最新技術と自然との調和を目指します。
				<p class="button"><a href="#">IT事業</a></p>
			</div>
			<!-- / 小画像 一番最後の画像にのみ class="last" を入力してください。-->

		</div>
		<!-- / 中央カラム -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
