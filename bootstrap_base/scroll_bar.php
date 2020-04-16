<?php
//これを読み込んでやると独自ページにワードプレスの関数を使用できるようになる
require_once( $_SERVER['DOCUMENT_ROOT']. '/wp-load.php' );
?>
<!DOCTYPE html>
<html>
<head>
<style>
div.new_article {
  width: 100%;
  height: 100px;
  background-color: #ffffff;
  overflow-y:scroll;
  font-size:0.8em;
  padding:10px;
  margin-left:3px;
  border:solid 1px #f1f1f1;
  -webkit-overflow-scrolling: touch;
}
</style>
	<!-------wp_head()が---jsの読み込み---------->
	<?php wp_head(); ?>
</head>
<body>
新着記事6件
<div class="new_article">
	<?php
	$tmp = get_posts('post_type=post&numberposts=6');
	//var_dump($tmp);
	foreach ($tmp as $foreach_tmp){
		$permalink = get_permalink( $foreach_tmp->ID, $leavename );
		///$img = get_the_post_thumbnail_url($foreach_tmp->ID);
		$title = get_the_title( $foreach_tmp->ID );
		if(mb_strlen($title,'UTF-8') > 22){
			$title_fixed = mb_substr($title,0,22,'UTF-8');
			$title_fixed .= '<span class="omit">…</span>';
		}else{
			$title_fixed = $title;
		}
	?>
	<a href="<?php echo $permalink; ?>"><?php echo $title; ?></a><hr>
	<?php  } // ココまでforeach文 ?>
</div>
</body>
<?php wp_footer();?>
</html>