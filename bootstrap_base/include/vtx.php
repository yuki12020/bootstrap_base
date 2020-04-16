<?php
//これを読み込んでやると独自ページにワードプレスの関数を使用できるようになる
require_once( $_SERVER['DOCUMENT_ROOT']. '/wp-load.php' );
?>
<!DOCTYPE html>
<html>
<head>
<style>
/*スマホ縦*/
@media screen and (orientation: portrait) { 
	.scene {
	 width: 120px;
	 margin: 50px auto;
	}
}
/*スマホ横*/
@media screen and (orientation: landscape) { 
	.scene {
	 width: 300px;
	 margin: 20px auto;
	}
}

.carousel {
  margin: 100px 0;
  transform-style: preserve-3d;
  transition: transform 1s;
}
.carousel__cell {
  position: absolute;
  line-height: 100px;
}

.carousel__cell:nth-child(9n+1) { background: hsla(  0, 100%, 50%, 0.5); }
.carousel__cell:nth-child(9n+2) { background: hsla( 40, 100%, 50%, 0.5); }
.carousel__cell:nth-child(9n+3) { background: hsla( 80, 100%, 50%, 0.5); }
.carousel__cell:nth-child(9n+4) { background: hsla(120, 100%, 50%, 0.5); }
.carousel__cell:nth-child(9n+5) { background: hsla(160, 100%, 50%, 0.5); }
.carousel__cell:nth-child(9n+6) { background: hsla(200, 100%, 50%, 0.5); }
.carousel__cell:nth-child(9n+7) { background: hsla(240, 100%, 50%, 0.5); }
.carousel__cell:nth-child(9n+8) { background: hsla(280, 100%, 50%, 0.5); }
.carousel__cell:nth-child(9n+0) { background: hsla(320, 100%, 50%, 0.5); }

/*スマホ縦*/
@media screen and (orientation: portrait) { 
.carousel__cell:nth-child(1) { transform: rotateY(  0deg) translateZ(150px); }
.carousel__cell:nth-child(2) { transform: rotateY( 40deg) translateZ(150px); }
.carousel__cell:nth-child(3) { transform: rotateY( 80deg) translateZ(150px); }
.carousel__cell:nth-child(4) { transform: rotateY(120deg) translateZ(150px); }
.carousel__cell:nth-child(5) { transform: rotateY(160deg) translateZ(150px); }
.carousel__cell:nth-child(6) { transform: rotateY(200deg) translateZ(150px); }
.carousel__cell:nth-child(7) { transform: rotateY(240deg) translateZ(150px); }
.carousel__cell:nth-child(8) { transform: rotateY(280deg) translateZ(150px); }
.carousel__cell:nth-child(9) { transform: rotateY(320deg) translateZ(150px); }
}

/*スマホ横*/
@media screen and (orientation: landscape) { 
.carousel__cell:nth-child(1) { transform: rotateY(  0deg) translateZ(210px); }
.carousel__cell:nth-child(2) { transform: rotateY( 40deg) translateZ(210px); }
.carousel__cell:nth-child(3) { transform: rotateY( 80deg) translateZ(210px); }
.carousel__cell:nth-child(4) { transform: rotateY(120deg) translateZ(210px); }
.carousel__cell:nth-child(5) { transform: rotateY(160deg) translateZ(210px); }
.carousel__cell:nth-child(6) { transform: rotateY(200deg) translateZ(210px); }
.carousel__cell:nth-child(7) { transform: rotateY(240deg) translateZ(210px); }
.carousel__cell:nth-child(8) { transform: rotateY(280deg) translateZ(210px); }
.carousel__cell:nth-child(9) { transform: rotateY(320deg) translateZ(210px); }
}
</style>	
	<!-------wp_head()が---jsの読み込み---------->
<?php get_header('index'); ?>
	<?php wp_head(); ?>
</head>
<p style="text-align: center;">
  <button class="previous-button btn btn-success">Previous</button>
  <button class="next-button btn btn-warning">Next</button>
</p>

<div class="text-center">
	<div class="scene text-center">
	  <div class="carousel text-center">
		<div class="carousel__cell d-inline-block text-center">
		<img src="<?php echo get_stylesheet_directory_uri()."/"; ?>girl.jpg" alt="Responsive image" class="img-fluid">
		  ブロック１
		</div>
		
		<div class="carousel__cell d-inline-block text-center">
		<img src="<?php echo get_stylesheet_directory_uri()."/"; ?>girl.jpg" alt="Responsive image" class="img-fluid">
		  ブロック2
		</div>
		<div class="carousel__cell d-inline-block text-center">
		<img src="<?php echo get_stylesheet_directory_uri()."/"; ?>girl.jpg" alt="Responsive image" class="img-fluid">
		  ブロック3
		</div>
		<div class="carousel__cell d-inline-block text-center">
		<img src="<?php echo get_stylesheet_directory_uri()."/"; ?>girl.jpg" alt="Responsive image" class="img-fluid">
		  ブロック4
		</div>
		<div class="carousel__cell d-inline-block text-center">
		<img src="<?php echo get_stylesheet_directory_uri()."/"; ?>girl.jpg" alt="Responsive image" class="img-fluid">
		  ブロック5
		</div>
		<div class="carousel__cell d-inline-block text-center">
		<img src="<?php echo get_stylesheet_directory_uri()."/"; ?>girl.jpg" alt="Responsive image" class="img-fluid">
		  ブロック6
		</div>
		<div class="carousel__cell d-inline-block text-center">
		<img src="<?php echo get_stylesheet_directory_uri()."/"; ?>girl.jpg" alt="Responsive image" class="img-fluid">
		  ブロック7
		</div>
		<div class="carousel__cell d-inline-block text-center">
		<img src="<?php echo get_stylesheet_directory_uri()."/"; ?>girl.jpg" alt="Responsive image" class="img-fluid">
		  ブロック8
		</div>
		<div class="carousel__cell d-inline-block text-center">
		<img src="<?php echo get_stylesheet_directory_uri()."/"; ?>girl.jpg" alt="Responsive image" class="img-fluid">
		  ブロック9
		</div>
	  </div>
	</div>
</div>


<br>
tes
<br>
tes<br>
tes<br>
tes<br>
tes<br>
tes<br>
tes<br>
tes<br>
tes<br>
tes<br>
tes<br>
tes<br>
tes

<?php get_footer();?>