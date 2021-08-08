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
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
  wp_enqueue_script('js-slick', get_template_directory_uri() . '/slick/slick.min.js' , array('jquery'), false, true);
  wp_enqueue_script('js-my', get_template_directory_uri() . '/js/main.js' , array('jquery','js-slick'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


/* ページによる投稿の表示数の切り替え */
function change_posts_per_page($query) {
  if (!is_admin() && $query->is_home() && $query->is_main_query()) { //トップページかつメインクエリの時
    $query->set('post_type', 'post'); //queryインスタンスのsetというメソッドにアクセス
    $query->set('posts_per_page', '6');
  } 
}
add_action('pre_get_posts', 'change_posts_per_page');

/* アーカイブページの作成 */
function post_has_archive($args, $post_type) {
  if('post' == $post_type) {
    $slug = 'news';
    $args['rewrite'] = array(
      'slug' => $slug, //スラッグ名の変更を許可
      'with_front' => false, // パーマリンク設定を/newsにしたときに /news/newsにならないようにする
    );
    $args['has_archive'] = $slug;
  }
  return $args;
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2);