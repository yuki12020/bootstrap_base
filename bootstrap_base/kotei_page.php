<!-------固定ページのみ出力--------->
<?php if(is_page()): //固定ページの判定関数?>
	<?php if ( have_posts() ) : ?>
	  <?php while( have_posts() ) : the_post();?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
	  <?php endwhile;?>
	  <?php else : ?>
	  <h2>まだ記事がありません</h2>
	<?php endif; ?>
<?php elseif(!is_page()): ?>
　初期表示
<?php endif; ?>