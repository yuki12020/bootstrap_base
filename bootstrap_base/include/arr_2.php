<?php
//これを読み込んでやると独自ページにワードプレスの関数を使用できるようになる
require_once( $_SERVER['DOCUMENT_ROOT']. '/wp-load.php' );
?>
arr_2.php
<hr>
<?php
$args =[
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'date_query' => [
        [
            'column' => 'post_modified',
            'inclusive' => true
        ]
    ]
];
 
$posts = [];
$query = new WP_Query($args);
// $query = new \WP_Query($args); // 先ほど作成した条件を指定した配列を引数に渡す
if ($query->have_posts()) { // 取得した記事データが存在するかしないかの判定

    while ($query->have_posts()) { // 記事データが存在する場合、その記事データに対してループ処理を実行
        $query->the_post(); // 次の記事データへと進める
        $posts[] = [
            'url' => get_permalink(), // パーマリンクを取得
            'imageUrl' => get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : '', // アイキャッチ画像URLを取得
            'category' => get_the_category()[0]->category_nicename, // カテゴリーを取得
            'postDate' => get_the_modified_date('Y-m-d H:i:s') // 更新日時を取得
        ];
		//var_dump($posts);
		the_title();
		echo "<br>";
		foreach($posts as $key=>$value){
			var_dump($value);
			echo $value["url"]."\n";
		}
		echo"<hr>";
		
    }
}
?>