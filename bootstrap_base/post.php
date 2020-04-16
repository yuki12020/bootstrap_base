
<?php if ( have_posts() ) : ?>
  <?php while( have_posts() ) : the_post();?>
  
	  	<a href="<?php the_permalink(); ?>">
		<h2><?php the_title(); ?></h2>
		</a>
		
		<h5><?php the_excerpt(); ?></h5>
		<h5><?php the_tags(); ?></h5>
		<h5><?php the_category(); ?></h5>
		<hr>
	  
  <?php endwhile;?>
  <?php
      /* 以下、ページャーの表示 */
    if ( function_exists( 'pagination' ) ) :
		pagination( $wp_query->max_num_pages, get_query_var( 'paged' ), 2, true);
    endif;
  ?>
  <?php else : ?>
  <h2>まだ記事がありません</h2>
<?php endif; ?>
