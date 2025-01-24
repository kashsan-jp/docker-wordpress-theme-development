<?php 
   
    // echo "<pre>";
    // print_r(get_stylesheet_uri( ));
    // wp_die();

    function my_scripts() {

        wp_register_style( 
            "stylesheet", 
            get_stylesheet_uri(),
            ["bs-stylesheet"], //bootstrapを先に読み込む
            // "1.0.0",
            filemtime(get_stylesheet_directory() . "/style.css"),
            "all");
        
        wp_register_style( 
            "bs-stylesheet", 
            get_template_directory_uri() . "/assets/src/lib/css/bootstrap.min.css",
            [],
            false,
            "all");

        wp_register_script( 
            "script", 
            get_template_directory_uri() . "/assets/script.js", 
            ["bs-script"],
            filemtime(get_template_directory() . "/assets/script.js"),
            true);

        wp_register_script( 
            "bs-script", 
            get_template_directory_uri() . "/assets/src/lib/js/bootstrap.min.js", 
            ["jquery"], //jqueryを登録する
            false,
            true);

        //CSS読み込み
        wp_enqueue_style("stylesheet");
        wp_enqueue_style("bs-stylesheet");
        //JSの読み込み
        wp_enqueue_script("script");
        wp_enqueue_script("bs-script");
    }
    add_action( "wp_enqueue_scripts", "my_scripts");
?>