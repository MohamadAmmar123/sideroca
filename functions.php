<?php

function theme_setup() {
    wp_register_style("stylesheet", get_template_directory_uri() . "/style.css", array(), false, "all");
    wp_enqueue_style("stylesheet");

    wp_register_script("script", get_template_directory_uri() . "/main.js", array(), false, true);
    wp_enqueue_script("script");
}

function theme_support() {
    add_theme_support("menus");
    add_theme_support("title-tag");
    add_theme_support("custom-logo");

    register_nav_menus(
        array(
            "main-menu" => __("Sidebar Menu", "theme"),
        )
    );
}

function widget_support() {
    register_sidebar(
        array(
            "name"          => __("Footer Area", "sideroca"),
            "id"            => "footer-area",
            "before_widget" => "",
            "after_widget"  => "",
            "before_title"  => "",
            "after_title"   => "",
        )
    );
}

add_action("widgets_init", "widget_support"); 
add_action("wp_enqueue_scripts", "theme_setup");
add_action("after_setup_theme", "theme_support");