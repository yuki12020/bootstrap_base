<?php if ( have_posts() ) : ?>
		<?php printf( __( '<h2>'.'「%s」の検索結果 '.'</h2>' , 'altitude'), '<span>' . get_search_query()
		 . '</span>' ); ?>
		<p>
		全<?php echo $wp_query->found_posts; 
		//var_dump($wp_query);
		?>
		件中<?php if ($wp_query->found_posts > 30) {echo 30;}
		 else {echo $wp_query->found_posts;}; ?>件を表示しています。
		</p>
		<?php while ( have_posts() ) : the_post(); ?>
			<li class="list-group-item list-group-item-action">		
				<a href="<?php echo get_the_permalink(); ?>">
				<h3><?php the_title(); ?></h3>
				<?php
				// if(mb_strlen(get_the_permalink(), 'UTF-8')>80){
					// $excerpt= mb_substr(get_the_permalink(), 0, 80);
					// echo $excerpt.'...';
				// }else{
					// echo get_the_permalink();
				// }
				?>
				</a>
				<h5><?php the_excerpt(); ?></h5>
				<h5><?php the_tags(); ?></h5>
			    <h5><?php the_category(); ?></h5>
			</li>
		<?php endwhile; ?>
		<?php
		  /* 以下、ページャーの表示 */
		if ( function_exists( 'pagination' ) ) :
			pagination( $wp_query->max_num_pages, get_query_var( 'paged' ), 2, true);
		endif;
		 ?>
		
<?php else : ?>
			<p>入力されたキーワードに該当する結果はありませんでした。入力キーワードを変更して再度検索を行ってください。</p>
<?php endif; ?>