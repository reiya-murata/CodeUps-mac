<?php
function my_theme_enqueue_scripts() {
// アイコン（ファビコン）
echo '
<link rel="icon" href="#" />';

// Swiper CSS
wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);

// メインCSS
wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'), array(),
filemtime(get_theme_file_path('/css/style.css')));

// Google Fonts
wp_enqueue_style('google-fonts-gotu', 'https://fonts.googleapis.com/css2?family=Gotu&display=swap', array(), null);
wp_enqueue_style('google-fonts-lato', 'https://fonts.googleapis.com/css2?family=Lato&display=swap', array(), null);
wp_enqueue_style('google-fonts-noto', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap', array(),
null);

// Swiper JS
wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

// jQuery（WordPress標準のものではなくCDN版を使用）
wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);

// メインJS
wp_enqueue_script('main-script', get_theme_file_uri('/js/script.js'), array('jquery-cdn'),
filemtime(get_theme_file_path('/js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

function my_setup() {
    add_theme_support('post-thumbnails'); /* アイキャッチ */
    add_theme_support('automatic-feed-links'); /* RSSフィード */
    add_theme_support('title-tag'); /* タイトルタグ自動生成 */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}
add_action('after_setup_theme', 'my_setup');

//アーカイブの表示件数変更
function change_posts_per_page($query) {
	if ( is_admin() || ! $query->is_main_query() )
			return;
	if ( $query->is_archive('campaign') ) { //カスタム投稿タイプを指定
			$query->set( 'posts_per_page', '4' ); //表示件数を指定
	}
}
add_action( 'pre_get_posts', 'change_posts_per_page' );// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}