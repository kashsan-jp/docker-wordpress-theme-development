<?php 
   

    // echo "<pre>";
    // print_r(filemtime(get_template_directory() . "/style.css"));
    // wp_die();
    function my_scripts() {

        wp_register_style("stylesheet", get_stylesheet_uri(),["bs-stylesheet"], 
        filemtime(get_template_directory() . "/style.css"), "all");

        //BootStrap
        wp_register_style("bs-stylesheet", get_template_directory_uri() . "/assets/src/lib/css/bootstrap.min.css",[], 
        false, "all");

        wp_register_script("script", get_template_directory_uri() . "/assets/script.js",["bs-script"], 
        filemtime(get_template_directory() . "/assets//script.js"), true);

        wp_register_script("bs-script", get_template_directory_uri() . "/assets/src/lib/js/bootstrap.min.js",["jquery"], 
        false, true);

        

        wp_enqueue_style("stylesheet");
        wp_enqueue_style("bs-stylesheet");
        wp_enqueue_script("script");
        wp_enqueue_script("bs-script");

    }
    add_action("wp_enqueue_scripts", "my_scripts");

    function theme_init() {
        add_theme_support( "post-thumbnails");
        //タイトルを動的に変更
        add_theme_support("title-tag");
        //RSS配信の機能
        add_theme_support("automatic-feed-links");
        //カスタムロゴの追加
        add_theme_support("custom-logo",[
            "width" => 400,
            "height" => 100,
            "flex-width" => true,
            "flex-height" => true
        ]);
        add_theme_support("custom-background",[
            "default-color" => "#fff",
            "default-image" => "",
            "default-repeat" => "no-repeat"
        ]);
        //サムネイル画像のカスタムサイズを登録
        add_image_size("custom-size", 1000, 300, true);
    }
    add_action("after_setup_theme", "theme_init");

function register_menu(){
     register_nav_menus([
        "header_nav" => "ヘッダー",
        "footer_nav" => "フッター"
     ]);

}
add_action("init", "register_menu");

// 抜粋文n文末に表示する記号を表示
function custom_excerpt(){
    // 投稿データを拾ってくる
    global $post;
    return " . . .<button class='btn btn-info btn-sm'>
                    <a href=". get_permalink($post->ID) ." class='text-white'>
                    続きを読む
                    </a>
                    </button>";
}
add_filter("excerpt_more","custom_excerpt");
// function add_adminbar_menu() {
//     global $wp_admin_bar;
//     global $template;
//     $current_template = basename($template);
//     $wp_admin_bar->add_node( array(
//       'id'    => 'template_file_name',
//       'title' => '使用されているテンプレートファイル : '. $current_template,
//     ));
// }
// add_action('admin_bar_menu', 'add_adminbar_menu', 500);
?>

