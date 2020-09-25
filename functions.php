<?php
function mythem_bootstrap(){
load_theme_textdomain("MyThem");
add_theme_support("post-thumbnails");
add_theme_support("title-tag");
}
add_action( "after_setup_theme", "mythem_bootstrap" );

function mythem_assets(){

    wp_enqueue_style("mystyle", get_stylesheet_uri());
    wp_enqueue_style("mybootstrap","//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");

}
add_action( "wp_enqueue_scripts", "mythem_assets");

?>