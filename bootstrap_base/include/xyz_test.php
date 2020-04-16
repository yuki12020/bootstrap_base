<?php
//これを読み込んでやると独自ページにワードプレスの関数を使用できるようになる
require_once( $_SERVER['DOCUMENT_ROOT']. '/wp-load.php' );
?>
<!DOCTYPE html>
<html>
<head>
<style>

.scene {
  border: 1px solid #CCC;
  position: relative;
  width: 200px;
  height: 100px;
  margin: 150px auto;
  perspective: 1000000px;
}

.carousel {
  width: 100%;
  height: 100%;
  position: absolute;
  transform: translateZ(-0px);
  transform-style: preserve-3d;
  transition: transform 1s;
}

/*スマホ横*/
@media screen and (orientation: landscape) { 
	.carousel__cell {
	  position: absolute;
	  width: 200px;
	  height: 100px;
	  line-height: 116px;
	  font-size: 80px;
	  font-weight: bold;
	  color: white;
	  text-align: center;
	}
}

/*スマホ縦*/ 
@media screen and (orientation: portrait) { 
	.carousel__cell {
	  position: absolute;
	  width: 100px;
	  height: 150px;
	  line-height: 116px;
	  font-size: 80px;
	  font-weight: bold;
	  color: white;
	  text-align: center;
	}
}

.carousel__cell:nth-child(9n+1) { background: hsla(  0, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+2) { background: hsla( 40, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+3) { background: hsla( 80, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+4) { background: hsla(120, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+5) { background: hsla(160, 100%, 50%, 0.8); }


.carousel__cell:nth-child(1) { transform: rotateY(  0deg) translateZ(200px); }
.carousel__cell:nth-child(2) { transform: rotateY( 72deg) translateZ(200px); }
.carousel__cell:nth-child(3) { transform: rotateY( 144deg) translateZ(200px); }
.carousel__cell:nth-child(4) { transform: rotateY(216deg) translateZ(200px); }
.carousel__cell:nth-child(5) { transform: rotateY(288deg) translateZ(200px); }

</style>	
	<!-------wp_head()が---jsの読み込み---------->
<?php get_header('index'); ?>
	<?php wp_head(); ?>
</head>

<div class="scene">
<div class="right">
 right
</div>
  <div class="carousel">
    <div class="carousel__cell">
		<button type="button" class="" data-toggle="modal" data-target="#exampleModalCenter">
		  <img src="<?php echo get_stylesheet_directory_uri()."/img/"; ?>girl.jpg" alt="Responsive image" class="img-fluid">
		</button>
		
    </div>
    <div class="carousel__cell">
		<button type="button" class="" data-toggle="modal" data-target="#exampleModalCenter2">
		  <img src="<?php echo get_stylesheet_directory_uri()."/img/"; ?>girl4.jpg" alt="Responsive image" class="img-fluid">
		</button>
	</div>
    <div class="carousel__cell">
			<button type="button" class="" data-toggle="modal" data-target="#exampleModalCenter2">
		  <img src="<?php echo get_stylesheet_directory_uri()."/img/"; ?>girl3.jpg" alt="Responsive image" class="img-fluid">
		</button>
	</div>
    <div class="carousel__cell">4
	
	</div>
	<div class="carousel__cell">5
	
	</div>
  </div>
  wwww
</div>
<p style="text-align: center;">
  <button class="previous-button">Previous</button>
  <button class="next-button">Next</button>
</p>

<!-- モーダルの設定 -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">モーダルのタイトル</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       	<img src="<?php echo get_stylesheet_directory_uri()."/img/"; ?>girl.jpg" alt="Responsive image" class="img-fluid">
      </div>
      <div class="modal-footer">
		<!--footer-->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">モーダルのタイトル</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	    <img src="<?php echo get_stylesheet_directory_uri()."/img/"; ?>girl4.jpg" alt="Responsive image" class="img-fluid">
     </div>
    </div>
  </div>
</div>

<?php get_footer();?>