<?php
/* 初期設定 */  
function my_setup() {
  add_theme_support('post-thumbnails'); //アイキャッチ画像を有効
  add_theme_support('title-tag'); //<title>を自動生成
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption')); //html5をサポート
}
add_action('after_setup_theme', 'my_setup'); //after_setup_theme or initは最初に使えるアクションフック

/* CSSとJSの読み込み */
function my_script_init() {
  wp_enqueue_style('css-slick-theme', get_template_directory_uri() . '/slick/slick-theme.css', array(), false, 'all');
  wp_enqueue_style('css-slick', get_template_directory_uri(). '/slick/slick.css', array('css-slick-theme'), false, 'all');
  wp_enqueue_style('css-destyle',get_template_directory_uri(). '/css/destyle.css', array('css-slick-theme', 'css-slick'), '1.0.0', 'all');
  wp_enqueue_style('css-style',get_template_directory_uri(). '/css/style.css', array('css-destyle'), '1.0.0', 'all');
  wp_enqueue_script('js-slick', get_template_directory_uri() . '/slick/slick.min.js' , array('jquery'), false, true);
  wp_enqueue_script('js-my', get_template_directory_uri() . '/js/main.js' , array('jquery','js-slick'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/* カスタム投稿タイプの登録（サービス,メンバー,リクルート） */
add_action('init', function() {
  register_post_type('service', [
    'label' => 'サービス',
    'public' => false, //フロントと管理画面で表示するか
    'show_ui' => true,
    'menu_position' => 5,
    'publicly_queryable'=> true, //クエリを使用許可
    'supports' => ['title'], //ACFで大部分は作る
    'has_archive' => true, //アーカイブページを表示
    'menu_icon' => 'dashicons-admin-generic',
  ]);

  register_post_type('member', [
    'label' => 'メンバー',
    'public' => false,
    'show_ui' => true, //個別ページは作らない
    'menu_position' => 5,
    'publicly_queryable' => true,
    'supports' => ['title'],
    'menu_icon' => 'dashicons-universal-access'
  ]);

  register_post_type('recruit', [
    'label' => 'リクルート',
    'public' => false,
    'show_ui' => true,
    'menu_position' => 5,
    'publicly_queryable' => true,
    'supports' => ['title'],  
    'menu_icon' => 'dashicons-businesswoman',
  ]);
});






/* ページによる投稿の表示数の切り替え */
function change_posts_per_page($query) {
	if(!is_admin() && $query->is_home() && $query->is_main_query() && wp_is_mobile()){ //実際にスマホで表示した時に変わる
		$query->set('post_type', 'post'); 
    	$query->set('posts_per_page', '3');
	} elseif(!is_admin() && $query->is_home() && $query->is_main_query()) {
		$query->set('post_type', 'post'); //queryインスタンスのsetというメソッドにアクセス
    	$query->set('posts_per_page', '6');
	}
}
add_action('pre_get_posts', 'change_posts_per_page');

/* アーカイブページの作成 */
function post_has_archive($args, $post_type) {
  if('post' == $post_type) {
    $args['label'] = 'ニュース';    
    $archive_slug = 'news';
    $args['rewrite'] = [
      'slug' => $archive_slug,
      'with_front' => false, // /newsにする 
    ];
    $args['has_archive'] = $archive_slug;
  }
  return $args;
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2);


/*  */
