<?php
//これを読み込んでやると独自ページにワードプレスの関数を使用できるようになる
require_once( $_SERVER['DOCUMENT_ROOT']. '/wp-load.php' );
?>
<!DOCTYPE html>
<html>
<head>
<style>
html, body {
    height: 100%;
    margin: 0!important;
    padding: 0!important;
}
.bg-switcher {
    height: 60vh;
    background-position: center center;
    background-size: cover;
}
.bg-left{
    display: flex;
    align-items: center;
    justify-content: center;
    background: #0C84A8;
    height: 60vh;
}
.bg-title {
    color: #fff;
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

<div class="row">
	<div class="col-md-6 bg-left">
		<h1 class="bg-title">jQuery.BgSwitcher Sample Demo</h1>
	</div>
	<div class="bg-switcher col-md-6">
	</div>
</div>



</body>
<?php get_footer();?>
</html>