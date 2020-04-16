<?php
//これを読み込んでやると独自ページにワードプレスの関数を使用できるようになる
require_once( $_SERVER['DOCUMENT_ROOT']. '/wp-load.php' );
?>
<!--header-index.phpを読み込む-->
<?php get_header('index'); ?>
<!-------wp_head()が---jsの読み込み------------------->
<?php wp_head(); ?>

<!-----通常の書き方だと表示されないので注意-↓のように書くとフォルダ階層上も表示----->
<?php
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish'
); 
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ): ?>
	<?php while ( $the_query->have_posts() ):$the_query->the_post(); ?>
	<li class="list-group-item list-group-item-action">	
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<h5><?php the_excerpt(); ?></h5>
		<h5><?php the_tags(); ?></h5>
		<h5><?php the_category(); ?></h5>
	</li>
	<?php endwhile; ?>
	  <?php
      /* 以下、ページャーの表示 */
    if ( function_exists( 'pagination' ) ) :
		pagination( $the_query->max_num_pages, get_query_var( 'paged' ), 2, true);
    endif;
  ?>
  <?php else : ?>
  <h2>まだ記事がありません</h2>
<?php endif; ?>



<!----------wp_footer()--------------------------->
<?php wp_footer(); ?>