<?php

function local_style()
{
    wp_enqueue_script("main_script", get_theme_file_uri('/JS/index.js'), null, 1.0, true);
    wp_enqueue_style("custome_google_font", "https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style("myStyles", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "local_style");

function page_setup()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'page_setup');