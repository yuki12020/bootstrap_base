<?php
//これを読み込んでやると独自ページにワードプレスの関数を使用できるようになる
require_once( $_SERVER['DOCUMENT_ROOT']. '/wp-load.php' );
?>
<!DOCTYPE html>
<html>
<head>
  <title>Slick Playground</title>
  <style type="text/css">
     html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }



    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


  </style>
	<!-------wp_head()が---jsの読み込み---------->
<?php get_header('index'); ?>
	<?php wp_head(); ?>
</head>
<body>
<?php 
// echo get_template_directory_uri().'/css/slick.css';
// echo get_stylesheet_directory_uri().'/js/slick.min.js';
// echo get_stylesheet_directory_uri().'/js/slick.js';
?>
<hr>
  <section class="regular slider">
    <div>
		<button type="button" class="" data-toggle="modal" data-target="#exampleModalCenter">
		  <img src="<?php echo get_stylesheet_directory_uri()."/img/"; ?>girl.jpg" alt="Responsive image" class="img-fluid">
		</button>
    </div>
    <div>
		<button type="button" class="" data-toggle="modal" data-target="#exampleModalCenter2">
		  <img src="<?php echo get_stylesheet_directory_uri()."/img/"; ?>girl4.jpg" alt="Responsive image" class="img-fluid">
		</button>
	</div>
    <div>
		<button type="button" class="" data-toggle="modal" data-target="#exampleModalCenter3">
		  <img src="<?php echo get_stylesheet_directory_uri()."/img/"; ?>girl3.jpg" alt="Responsive image" class="img-fluid">
		</button>
	</div>
    <div>
      <img src="http://placehold.it/350x300?text=4">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=5">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=6">
    </div>
  </section>

  <!-- モーダルの設定 -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?php echo get_stylesheet_directory_uri()."/img/"; ?>girl.jpg" alt="Responsive image" class="img-fluid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- モーダルの設定 exampleModalCenter2-->
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
	 <div class="modal-footer">
		footer
		<!--footer-->
     </div>
    </div>
  </div>
</div>


<!-- モーダルの設定 exampleModalCenter3-->
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">モーダルのタイトル</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       	<img src="<?php echo get_stylesheet_directory_uri()."/img/"; ?>girl3.jpg" alt="Responsive image" class="img-fluid">
      </div>
      <div class="modal-footer">
	   footer
		<!--footer-->
      </div>
    </div>
  </div>
</div>

  
  
</body>
<?php get_footer();?>
</html>
