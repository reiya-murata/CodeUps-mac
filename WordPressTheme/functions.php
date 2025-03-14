<?php
function my_theme_enqueue_scripts() {
    // アイコン（ファビコン）
    echo '<link rel="icon" href="#" />';

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);

       // テーマのCSSの追加
    wp_enqueue_style( 'theme-styles', get_theme_file_uri('../dist/assets/css/style.css'), false );


    // Google Fonts
    wp_enqueue_style('google-fonts-gotu', 'https://fonts.googleapis.com/css2?family=Gotu&display=swap', array(), null);
    wp_enqueue_style('google-fonts-lato', 'https://fonts.googleapis.com/css2?family=Lato&display=swap', array(), null);
    wp_enqueue_style('google-fonts-noto', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap', array(), null);

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    // jQuery（WordPress標準のものではなくCDN版を使用）
    wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);

    // メインJS
    wp_enqueue_script('main-script', get_theme_file_uri('assets/js/script.js'), array('jquery-cdn'),
    filemtime(get_theme_file_path('assets/js/script.js')), true);
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
    if (is_admin() || ! $query->is_main_query())
        return;
    if ($query->is_archive('campaign')) { //カスタム投稿タイプを指定
        $query->set('posts_per_page', '4'); //表示件数を指定
    }
}
add_action('pre_get_posts', 'change_posts_per_page');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
}

add_action('init', function() {
    load_theme_textdomain('smart-custom-fields', get_template_directory() . '/languages');
});
add_action('plugins_loaded', function() {
    load_plugin_textdomain('smart-custom-fields', false, dirname(plugin_basename(__FILE__)) . '/languages');
});

// 「投稿」の名前を「ブログ」に変更
function change_post_menu_label() {
    global $menu, $submenu;
    
    // 「投稿」の名前を「ブログ」に変更
    foreach ($menu as $key => $value) {
        if ('edit.php' == $value[2]) {
            $menu[$key][0] = 'ブログ'; // 管理メニューで表示される名前
        }
    }

    // サブメニューも変更
    if (isset($submenu['edit.php'])) {
        foreach ($submenu['edit.php'] as $key => $value) {
            if ('edit.php' == $value[2]) {
                $submenu['edit.php'][$key][0] = 'ブログ一覧'; // サブメニューの名前
            }
        }
    };
}

// admin_menu アクションフックにフック
add_action('admin_menu', 'change_post_menu_label');


// Contact Form 7 送信後にリダイレクト
function custom_redirect_after_submission()
{
    ?>
<script type="text/javascript">
document.addEventListener('wpcf7mailsent', function(event) {
  window.location.href = 'https://rachel0309.com/codeups-wordpress/contact-thanks'; // フルURLに変更
}, false);
</script>
<?php
}
add_action('wp_footer', 'custom_redirect_after_submission');


function load_scf_textdomain() {
    load_plugin_textdomain( 'smart-custom-fields', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'init', 'load_scf_textdomain' );

// 投稿表示回数をカウント
function set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if($count == ''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// 投稿ページでカウントを実行
function count_post_views($post_id) {
    if(is_single()){
        set_post_views($post_id);
    }
}
add_action('wp_head', function() {
    if (is_single()) {
        global $post;
        set_post_views($post->ID);
    }
});

function custom_archive_posts_per_page($query) {
    if ($query->is_main_query() && !is_admin() && is_date()) {
        $query->set('posts_per_page', 10);
    }
    }
    add_action('pre_get_posts', 'custom_archive_posts_per_page');

    // the_archive_title(), get_the_archive_title() から余計な文字を削除
    add_filter( 'get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    } elseif (is_post_type_archive() ){
        $title = post_type_archive_title('', false);
    } elseif (is_date()) {
        $title = get_the_time('Y年n月');
    } elseif (is_search()) {
        $title = '検索結果：'.esc_html( get_search_query(false) );
    } elseif (is_404()) {
        $title = '「404」ページが見つかりません';
    }
    return $title;
});
add_filter('wp_img_tag_add_auto_sizes', '__return_false');