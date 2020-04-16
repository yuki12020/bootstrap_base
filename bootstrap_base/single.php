
<?php wp_head(); ?>
<!--header-index.phpを読み込む-->
<?php get_header('index'); ?>
<!--------single.php　記事単体がクリックされた時用のページ----------->
<!---スマホは1列(1)　PC画面で3列（3:6:3） タブレットで3列(4:4:4)--->
<div class="row">
	<div class="col-12 col-lg-3 col-md-3 text-success bg-dark"><!--style="background: #ccc;"-->
	ad
	</div>
	
	<div class="col-12 col-lg-6 col-md-6" style="background: ;">
		<div class="row">
			<div class="col-12 col-lg-12 col-md-12 text-success bg-dark" style="background: #eee;">
			<!-------投稿ページの単体取得出力--------->
			<?php if ( have_posts() ) : ?>
			<?php while( have_posts() ) : the_post();?>
			　　　　　　<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>	  
			<?php endwhile;?>
			<?php else : ?>
			  <h2>まだ記事がありません</h2>
			<?php endif; ?>
			</div>
		</div>
	</div>
	
	<div class="col-12 col-lg-3 col-md-3 text-success bg-dark">
	カテゴリー
	<?php include("categories.php");?>
	</div>
</div>

<div class="row">
<div class="col-12 text-light bg-dark">
<?php get_footer();?>
</div>
</div>





