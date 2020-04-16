<?php
//これを読み込んでやると独自ページにワードプレスの関数を使用できるようになる
require_once( $_SERVER['DOCUMENT_ROOT']. '/wp-load.php' );
?>
<!DOCTYPE html>
<html>
<head>
<style>
.gallery {
-webkit-column-count: 3;
-moz-column-count: 3;
column-count: 3;
-webkit-column-width: 33%;
-moz-column-width: 33%;
column-width: 33%; }
.gallery .pics {
-webkit-transition: all 350ms ease;
transition: all 350ms ease; }
.gallery .animation {
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1); }

@media (max-width: 450px) {
.gallery {
-webkit-column-count: 1;
-moz-column-count: 1;
column-count: 1;
-webkit-column-width: 100%;
-moz-column-width: 100%;
column-width: 100%;
}
}

@media (max-width: 400px) {
.btn.filter {
padding-left: 1.1rem;
padding-right: 1.1rem;
}
}
</style>
	<!-------wp_head()が---jsの読み込み---------->
<?php get_header('index'); ?>
	<?php wp_head(); ?>
</head>
<body>

<!----------------------modal_lp.php--　モーダル用データをインクルード------------------------>
<?php include("modal_lp.php");?>



<!-- Grid row -->
<div class="row">
  <!-- Grid column -->
  <div class="col-md-12 justify-content-center mb-5">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<!-- Navbar content -->
		<div class="justify-content-center">
		<!--btn-outline-black で　ボタンの背景なし-->
		<button type="button" class="btn btn-outline-primary waves-effect filter" data-rel="all">All</button>
		<button type="button" class="btn btn-outline-success waves-effect filter" data-rel="1">Mountains</button>
		<button type="button" class="btn btn-outline-success waves-effect filter" data-rel="2">Sea</button>
		</div>
	</nav>
  </div>
  <!-- Grid column -->
</div>
<!-- Grid row -->

<!---------------------こいつだけモーダル反映--data-toggle="modal" data-target="#lp1"------------------------------------->
<!-- Grid row -->
<div class="gallery" id="gallery">
	
  <!-- Grid column -->
  <div class="mb-3 pics animation all 2" data-toggle="modal" data-target="#lp1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

<!------------------------------------------------------------>
  
  
  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->
</div>
<!-- Grid row -->  
</div>
<!-- Grid row -->

  
</body>
<?php get_footer();?>
</html>