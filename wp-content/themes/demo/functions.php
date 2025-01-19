<?php 
   
    // echo "<pre>";
    // print_r(get_template_directory_uri());
    // wp_die();

    function my_script() {
        wp_enqueue_style( 
            "stylesheet", 
            get_template_directory_uri() . "/style.css", 
            [],
            "1.0.0",
            "all");
    }
    add_action( "wp_enqueue_script", "my_script");
?>