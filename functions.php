<?php
// 各種ファイルの読み込み
function enqueue_scripts() {
    // CSSファイル
    wp_enqueue_style('main', get_stylesheet_uri());
    // Java Script
    wp_enqueue_script('jquery-min-js', get_stylesheet_directory_uri(). '/js/jquery-3.6.0.min.js', array(), '', true);
    wp_enqueue_script('custom-sript', get_stylesheet_directory_uri(). '/js/script.js', array('jquery-min-js'), '', true);
    //bootstrap
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css');
    //google-fonts
    wp_enqueue_style('google-fonts', 'https: //fonts.googleapis.com/css2? family= Zen+Maru+Gothic & display=swap');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');


/////////////////////////////////////////////////////////////

// 各種機能（テーマに登録するもの）

function theme_setup() {
    // ページごとの<title>タグを表示
    add_theme_support('title-tag');
    //アイキャッチ画像を登録
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

function add_menus() {
    // カスタムメニューを登録
    register_nav_menus(array(
        // ↓メニューの名前　↓メニューが表示される位置の説明
        'header_nav' => 'ヘッダーに表示されるナビゲーション'
    ));
}
add_action('after_setup_theme', 'add_menus');

/////////////////////////////////////////////////////////////
