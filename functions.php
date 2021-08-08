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





