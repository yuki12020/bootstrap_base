<?php


//外部JS読み込み
function add_js(){
	$wpTheme = wp_get_theme();
	//(読み込めてる)
		//bootstrap css　読み込み
		wp_enqueue_style('slick_scss', get_template_directory_uri().'/css/bootstrap.min.css');
		//bootstrap js　読み込み
    wp_enqueue_script('jquery341',get_stylesheet_directory_uri().'/js/jquery-3.4.1.min.js',array('jquery'), $wpTheme->get( 'Version' ), true);
    wp_enqueue_script('bootstrap_js',get_stylesheet_directory_uri().'/js/bootstrap.js',array(), $wpTheme->get( 'Version' ), true);
    wp_enqueue_script('bootstrap_bundle_min',get_stylesheet_directory_uri().'/js/bootstrap.bundle.min.js',array(), $wpTheme->get( 'Version' ), true);
    wp_enqueue_script('bootstrap_bundle',get_stylesheet_directory_uri().'/js/bootstrap.bundle.js',array(), $wpTheme->get( 'Version' ), true);
    wp_enqueue_script('popper',get_stylesheet_directory_uri().'/js/popper.min.js',array('jquery'), $wpTheme->get( 'Version' ), true);
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
    //ここまでbootstrap
	
	//slick(コンソールでエラーがでるのは、インストしたファイルの一部しか持ってきてないため)
	 //cssを読み込み
	//wp_enqueue_style('slick_scss', get_template_directory_uri().'/css/slick.scss');
	//wp_enqueue_style('slick_theme_scss', get_template_directory_uri().'/css/slick-theme.scss');
	//wp_enqueue_style('slick_css', get_template_directory_uri().'/css/slick.css');
	//wp_enqueue_style('slick_theme_css', get_template_directory_uri().'/css/slick-theme.css');
	 //js読み込み
	//wp_enqueue_script('js220',get_stylesheet_directory_uri().'/js/jquery-2.2.0.min.js',array('jquery'), $wpTheme->get( 'Version' ), true);
	//wp_enqueue_script('slick_min',get_stylesheet_directory_uri().'/js/slick.min.js',array(), $wpTheme->get( 'Version' ), true);
	//wp_enqueue_script('slick',get_stylesheet_directory_uri().'/js/slick.js',array(), $wpTheme->get( 'Version' ), true);
	 //slick用のjsコード記述場所（phpファイル内にscriptタグで囲んでｊｓのコードを書くと動かなくなる）
	//wp_enqueue_script('test',get_stylesheet_directory_uri().'/js/slick_code.js',array(), $wpTheme->get( 'Version' ), true);
	
	
	//lp用　ギャラリーjs（bootstrap）
	wp_enqueue_script('lp_gallely',get_stylesheet_directory_uri().'/js/lp_gallery.js',array(), $wpTheme->get( 'Version' ), true);
	
	
	//jquery.bgswitcher.js　背景のスライダー
	wp_enqueue_script('bgswitcher',get_stylesheet_directory_uri().'/js/jquery.bgswitcher.js',array(), $wpTheme->get( 'Version' ), true);
	 //bgswitcher用js
	wp_enqueue_script('bgswitch',get_stylesheet_directory_uri().'/js/bgswitch.js',array(), $wpTheme->get( 'Version' ), true);
	
	
	//pagepilling LPに使えるライブラリ
	  //css↓を読み込むとindexページが動かなくなるので、直接pagepilling用のページに埋め込む
	 //wp_enqueue_style('pagepiling_css', get_template_directory_uri().'/css/jquery.pagepiling.css');
	 //wp_enqueue_script('page_min',get_stylesheet_directory_uri().'/js/jquery.pagepiling.min.js',array(), $wpTheme->get( 'Version' ), true);
	 wp_enqueue_script('pagepiling',get_stylesheet_directory_uri().'/js/jquery.pagepiling.js',array(), $wpTheme->get( 'Version' ), true);
     //wp_enqueue_script('gulpfile',get_stylesheet_directory_uri().'/js/gulpfile.js',array(), $wpTheme->get( 'Version' ), true);
	  //pagepiling用ｊｓ
	  wp_enqueue_script('pagepiling_sample',get_stylesheet_directory_uri().'/js/pagepilling_sample.js',array(), $wpTheme->get( 'Version' ), true);

	
	//独自js(読み込めてる)
    wp_enqueue_script('rotate',get_stylesheet_directory_uri().'/js/rotate.js',array(), $wpTheme->get( 'Version' ), true);
	wp_enqueue_script('scroll',get_stylesheet_directory_uri().'/js/iscroll.js',array(), $wpTheme->get( 'Version' ), true);
	
	}
add_action('wp_enqueue_scripts','add_js');
//wp_enqueue_script関数はfunctions.phpに記述します。（ヘッダーやフッターにはcssのリンクやスクリプトの呼び出し記述不要）


//ウィジェット　外観　設定（初期では表示されてないので。ここで使用することを宣言してやらなければならない）
if ( ! function_exists( 'widet_setup' ) ) :
	function widet_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on test_t, use a find and replace
		 * to change 'test_t' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'test_t', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		//メニューの位置
		register_nav_menus( array(
			'menu' => esc_html__( 'Primary', 'test' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// 背景画像設定
		add_theme_support( 'custom-background', apply_filters( 'test_t_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		//サイト基本情報→ロゴ画像の大きさ
		add_theme_support( 'custom-logo', array(
			'width'       => 100,
			'height'      => 100,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		
		// カスタムヘッダー画像を設置する
		$custom_header_defaults = array(
				'default-image'          => get_bloginfo('template_url').'/img/test.png',
				'width'                  => 1140,
				'height'                 => 150,
				'header-text'            => false,	//ヘッダー画像上にテキストをかぶせる
		);
		add_theme_support( 'custom-header', $custom_header_defaults );
	}
endif;
add_action( 'after_setup_theme', 'widet_setup' );


/**
bootstrap充ててる
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
function pagination( $pages, $paged, $range = 2, $show_only = false ) {

    $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
    $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

    //表示テキスト
    $text_first   = "« 最初へ";
    $text_before  = "‹ 前へ";
    $text_next    = "次へ ›";
    $text_last    = "最後へ »";

    if ( $show_only && $pages === 1 ) {
        // １ページのみで表示設定が true の時
        echo '<nav aria-label="Page navigation example">
		<li class="page-item">1</li>
		</nav>';
        return;
    }

    if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

    if ( 1 !== $pages ) {
        //２ページ以上の時
        
		echo '<hr>
		<span class="page_num">Page ', $paged ,' of ', $pages ,'</span>
		<hr>';
		
	   echo '<nav aria-label="Page navigation example" class="navbar-expand-lg bg-dark">';
		echo '<ul class="pagination justify-content-center">';
		
		echo '<li class="page-item">';	
			if ( $paged > $range + 1 ) {
				// 「最初へ」 の表示
				echo '<a href="', get_pagenum_link(1) ,'" class="page-link text-success bg-dark">', $text_first ,'</a>';
			}
			if ( $paged > 1 ) {
				// 「前へ」 の表示
				echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="page-link text-success bg-dark">', $text_before ,'</a>';
			}
		echo '</li>';

        for ( $i = 1; $i <= $pages; $i++ ) {
            if ( $i <= $paged + $range && $i >= $paged - $range ) {
                // $paged +- $range 以内であればページ番号を出力
                if ( $paged === $i ) {
					echo '<li class="page-item">';	
                    echo '<span class="page-link text-success bg-dark">', $i ,'</span>';
					echo '</li>';
                } else {
					echo '<li class="page-item">';	
                    echo '<a href="', get_pagenum_link( $i ) ,'" class="page-link text-success bg-dark">', $i ,'</a>';
					echo '</li>';
                }
            }
        }
		
		echo '<li class="page-item">';
			if ( $paged < $pages ) {
				// 「次へ」 の表示
				echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="page-link text-success bg-dark">', $text_next ,'</a>';
			}
			if ( $paged + $range < $pages ) {
				// 「最後へ」 の表示
				echo '<a href="', get_pagenum_link( $pages ) ,'" class="page-link text-success bg-dark">', $text_last ,'</a>';
			}
		echo '</li>';
		
		echo '</ul>';
     echo '</nav>';
    }
}







//ワードプレス　wp_nav_menuにbootstrapを充てる　（めちゃくちゃ重要）
// Register Custom Navigation Walker
//http://taneakashi.ad-mk.com/wordpress-cstm-menu-bootstrap.html
//https://github.com/wp-bootstrap/wp-bootstrap-navwalker/blob/master/class-wp-bootstrap-navwalker.php
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );
//管理画面で Primary Menu で保存してやると、bootstrapと互換できるようになる


/**