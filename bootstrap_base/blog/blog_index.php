<?php
//これを読み込んでやると独自ページにワードプレスの関数を使用できるようになる
require_once( $_SERVER['DOCUMENT_ROOT']. '/wp-load.php' );
?>
<!--header-index.phpを読み込む-->
<?php get_header('index'); ?>
<!---------------index記述場所-------------------->
	<?php include_once("../nav.php");?>
<!------
col-: スマホ〜
col-sm-: タブレット〜
col-md-: 大きめタブレット〜
col-lg-: PC〜
col-xl-: 大きいPC〜---->
<!--class="img-fluid" で画像をレスポンシブ化-->
<!--<div class="text-center">画像</div>で画像を中央寄-->
<div class="container-fluid">

<div class="row">
	<div class="col-12 text-success bg-dark">
	<!--<div class="text-center">要素</div>で要素を中央寄-->
		<?php include("../scroll_bar.php");?>
		
	</div>
</div>

<!---スマホは1列(1)　PC画面で3列（3:6:3） タブレットで3列(4:4:4)--->
<div class="row">
	<div class="col-12 col-lg-3 col-md-3 text-success bg-dark"><!--style="background: #ccc;"-->
	ad
	</div>
	
	<div class="col-12 col-lg-6 col-md-6" style="background: ;">
		<div class="row">
			<div class="col-12 col-sm-12 col-lg-12 col-md-12 text-success bg-dark" style="background: #fff;">
			コンテンツA
			<?php ?>
			</div>
			<div class="col-12 col-lg-12 col-md-12 text-success bg-dark" style="background: #eee;">
			コンテンツB
			<?php include("blog.php");?>
			</div>
		</div>
	</div>
	
	<div class="col-12 col-lg-3 col-md-3 text-success bg-dark">
	カテゴリー
	<?php include("../categories.php");?>
	</div>
</div>

<div class="row">
<div class="col-12 text-light bg-dark">
<?php get_footer();?>
</div>
</div>

<div>
<!---------------index記述終わり-------------------->

<?php wp_footer(); ?>
</body>
</html>
