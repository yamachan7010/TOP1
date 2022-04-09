<?php
//タイトルタグの出力
add_theme_support('title-tag');

//アイキャッチ画像設定の有効化
add_theme_support('post-thumbnails');

function load_script() {
    if ( !is_admin() ) {
        // !is_admin() 管理画面ではない時の画面
        // ここでファイルの読み込みを行う

        //style.cssの読み込み
        wp_enqueue_style(
            'main-style',
            get_template_directory_uri() . '/css/style.css',
        );

        //main.jsの読み込み
        wp_enqueue_script(
            'main-script',
            get_template_directory_uri() . '/js/main.js',
            array('jquery'),
            false,
            true
        );
    }
}
add_action('init', 'load_script');
