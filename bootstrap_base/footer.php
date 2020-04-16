<div class="site-info">
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'original' ) ); ?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Proudly powered by %s', 'base_b' ), 'WordPress' );
		?>
	</a>
	<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf( esc_html__( 'Theme: %1$s by %2$s.', 'base_b' ), 'original', '<a href="/">オリジナルテーマ</a>' );
		?>
</div><!-- .site-info -->




<?php wp_footer(); ?>