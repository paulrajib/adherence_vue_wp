<?php
function my_vue_theme_enqueue_scripts() {
    wp_enqueue_style('adherence_vue_theme_style', get_stylesheet_uri());
    wp_enqueue_script('adherence_vue__theme_script', get_template_directory_uri() . '/dist/js/app.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_vue_theme_enqueue_scripts');
?>
