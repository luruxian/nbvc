<?php get_header(); ?>



<div id="main">



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h2><?php the_title();?></h2>

<!--<div id="date"><?php the_date('Y-m-d'); ?></div>-->

<?php the_content(); ?>



<!--

<div id="date">カテゴリー: <?php the_category(', '); ?>　<?php the_tags('タグ: ', ', '); ?></div>

<div id="next">
<?php previous_post_link('←「%link」前の記事へ　'); ?>
<?php next_post_link('　次の記事へ「%link」→'); ?>
</div>
<?php comments_template(); ?>


<p>
トラックバックURL
<input type="text" value="<?php trackback_url(); ?>">
</p>


<?php endwhile; else: ?>

<p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>

<?php endif; ?>

-->




</div>

<?php if(is_page(2)|| is_page("company/area") || is_page("company/business") || is_page("company/introduce") || is_page("company/overview")) : ?>
<?php get_sidebar('company'); ?>
<?php elseif(is_page(73) || is_page("recruit/engineer") || is_page("recruit/consultant") || is_page("recruit/pg")): ?>
<?php get_sidebar('job'); ?>
<?php elseif(is_page(18) || is_page("service/haken") || is_page("service/development") || is_page("service/cloud") || is_page("service/consulting")): ?>
<?php get_sidebar('service'); ?>
<?php else : ?>
<?php get_sidebar(); ?>
<?php endif ?>

<?php get_footer(); ?>
