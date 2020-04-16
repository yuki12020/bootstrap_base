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

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <a class="navbar-brand" href="#">menu</a>
	
	 <!----------class-wp-bootstrap-navwalker.phpの読み込み------------------------------>
        <?php
		//buttonタグのidと結びついてる　container_id
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );		
        ?>
      <!------------------------------------------------->

  <button class="navbar-toggler" type="button"
  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
  aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" 
  aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!----searchform.phpを読み込む---->
  <?php get_search_form(); ?>
	
  </div>
</nav>

	<!-------wp_head()が---jsの読み込み---------->
<?php wp_footer(); ?>
</body>
</html>





