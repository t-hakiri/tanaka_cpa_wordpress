<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );

// ヘッダーナビの有効か
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
// フッターナビ有効か
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );

function my_scripts_method() {
	wp_enqueue_script(
		'custom_script',
		get_template_directory_uri() . '/js/toppage.js',
	);
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

