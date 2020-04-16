<?php
//これを読み込んでやると独自ページにワードプレスの関数を使用できるようになる
require_once( $_SERVER['DOCUMENT_ROOT']. '/wp-load.php' );
?>
<!DOCTYPE html>
<html>
<head>
<style>
.bg-switcher {
    width: 100%;
    height: 200px;
    background-position: center center;
    background-size: cover;
    display: flex;
    justify-content: center;
}
.bg-title {
    font-size: 5vw;
    line-height: 1.5;
    font-weight: bold;
    text-align: center;
    text-shadow: 1px 1px 1px #000;
    font-family: "Times New Roman", Times, "serif";
}
</style>
	<!-------wp_head()が---jsの読み込み---------->
	<?php wp_head(); ?>
</head>
<body>

<div class="bg-switcher text-success">
  <h1 class="bg-title">Bootstrap  Wordpress jQuery </h1>
  <br>
  <h1 class="bg-title">Original thema</h1>
</div>
</body>
<?php// get_footer();?>
</html>