<?php
//これを読み込んでやると独自ページにワードプレスの関数を使用できるようになる
echo $_SERVER['DOCUMENT_ROOT'];
require_once( $_SERVER['DOCUMENT_ROOT']. '/wp-load.php' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
</head>
<h1>POST-A</h1>
<body>
<h1><?php bloginfo('name'); ?></h1>
<p>投稿記事名</p>
<?php
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish'
);
 
$the_query = new WP_Query($args);
?>
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>post_他ファイル</title>
</head>
<body>
 
<?php
if ( $the_query->have_posts() ): ?>
	<?php while ( $the_query->have_posts() ):
		$the_query->the_post(); ?>
	<hr>
		<a href="<?php the_permalink(); ?>">
			<h2><?php the_title(); ?></h2>
		</a>
		<h5><?php the_excerpt(); ?></h5>
		<h5><?php the_permalink(); ?></h5>
		<h5><?php the_tags(); ?></h5>
		<h5><?php the_category(); ?></h5>
	</hr>
	<?php endwhile; ?>
<?php endif; ?>
 
</body>
</html>

</body>
</html>