<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<!--独自テーマでCSSを読み込む際はget_stylesheet_uri();と記述-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<!--wpでjQuery読み込むには-->
	<?php wp_deregister_script(‘jquery’); ?>
	<!-------------------->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container-fluid">

<div class="row">
	<div class="col-12 text-success bg-dark">
		<div class="logo">
			<a href="<?php echo $_SERVER["SCRIPT_NAME"];?>">
			<!--class="img-fluid" で画像をレスポンシブ化-->
			<!--<div class="text-center">画像</div>で画像を中央寄-->
				<div class="text-center text-success">
					タイトル
					<img src="<?php header_image();?>" alt="Responsive image" class="img-fluid">
				</div>
			</a>
			<?php the_custom_logo();?>
		</div>
	</div>
</div>

</div>
