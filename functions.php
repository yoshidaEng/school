<?php
function my_enqueue_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('main_script', get_template_directory_uri() . '/assets/js/script.js', array(), false, true);
    wp_enqueue_style('my_styles', get_template_directory_uri() . '/assets/css/bandle.css', array());
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');

add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator)
{ //タイトルの区切り文字を'|'に変更
    $separator = '|';
    return $separator;
}

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');

/**
 * wp social bookmarking light表示位置を調整
 */
function wpSns()
{
    if (function_exists("wp_social_bookmarking_light_output_e")) {
        wp_social_bookmarking_light_output_e();
    }
}
add_shortcode('socialBtns', 'wpSns');

// 投稿のアーカイブページURLを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'blog'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


/**
 * ウィジェット領域を定義
 */
function add_widget_area()
{
    register_sidebar(array(
        'id' => 'sidebar_bottom',
        'name' => 'サイドバー下部',
        'description' => 'サイドバー下部に設置するウィジェット領域',
        'before_widget' => '<div class="cat-widget">',
        'after_widget' => "</div>\n",
    ));
}
add_action('widgets_init', 'add_widget_area');

/**
 * おすすめ記事を表示
 */
//記事のPV数をカウントする
function set_post_views($post_id)
{
    $count_key = 'post_views_count';
    //PV数を取得
    $count = get_post_meta($post_id, $count_key, true);
    if ($count == '') {
        //メタデータを一度消去
        delete_post_meta($post_id, $count_key);
        //カウントゼロのメタデータを追加
        add_post_meta($post_id, $count_key, '0');
    } else {
        $count++;
        //メタデータを更新
        update_post_meta($post_id, $count_key, $count);
    }
}

//カスタムフィールドに保存されているアクセス数を取得
function get_post_views($post_id)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($post_id, $count_key, true);
    if ($count == '0') {
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, '0');
        return '0 View';
    }
    return $count . ' Views';
}

/**
 * ページャーを設定
 */
//%2$s スクリーンリーダーテキスト値
//%3$s ページャーのリンク
function custom_pager_html($template)
{
    $template = '
    <nav class="pager" role="navigation">
    <h2 class="visually-hidden">%2$s</h2>
    %3$s
    </nav>';
    return $template;
}
add_filter('navigation_markup_template', 'custom_pager_html');

/**
 * カテゴリー名を取得
 */
function get_category_name() {
    $categories = get_the_category();
    $cat = $categories[0];
    return $cat->name;
}

/**
 * the_excerptの文字数の出力を50字に制限する
 */
function change_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'change_excerpt_length', 999 );