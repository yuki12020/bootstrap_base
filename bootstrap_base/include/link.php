<?php
//これを読み込んでやると独自ページにワードプレスの関数を使用できるようになる
require_once( $_SERVER['DOCUMENT_ROOT']. '/wp-load.php' );
?>
<!DOCTYPE html>
<html>
<head>
<style>
</style>
	<!-------wp_head()が---jsの読み込み---------->
	<?php wp_head(); ?>
</head>
<body>
<?php $test_flder = 'http://xd828293.wp.xdomain.jp/wp-content/themes/bootstrap_base/slick.php';?>
<a href="<?php echo $test_flder; ?>">
    <button type="button" class="btn btn-warning">slick.php</button>
</a>


<?php $test_flder = 'http://xd828293.wp.xdomain.jp/wp-content/themes/bootstrap_base/lp/bgswicher_100.php';?>
<a href="<?php echo $test_flder; ?>">
    <button type="button" class="btn btn-warning">bgswitch_100.php</button>
</a>

<?php $test_flder = 'http://xd828293.wp.xdomain.jp/wp-content/themes/bootstrap_base/lp/bgswicher_60.php';?>
<a href="<?php echo $test_flder; ?>">
    <button type="button" class="btn btn-warning">bgswitch_60.php</button>
</a>

<?php $test_flder = 'http://xd828293.wp.xdomain.jp/wp-content/themes/bootstrap_base/lp/pagepiling.php';?>
<a href="<?php echo $test_flder; ?>">
    <button type="button" class="btn btn-warning">pagepiling.php</button>
</a>

</body>
<?php get_footer();?>
</html>