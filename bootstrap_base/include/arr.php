<?php
//これを読み込んでやると独自ページにワードプレスの関数を使用できるようになる
require_once( $_SERVER['DOCUMENT_ROOT']. '/wp-load.php' );
?>
<?php
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish'
);
 
$the_query = new WP_Query($args);
var_dump($the_query);
?>
<hr>
<?php
$the_query_2 = new WP_Query();
var_dump($the_query_2);
?>