<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL & ~E_NOTICE);


    function get_vue_script_name($pattern) {
        $dir = get_template_directory() . '/adherence_vue_frontend/dist/js/';
        $files = glob($dir . $pattern);
        if ($files) {
            return str_replace(get_template_directory(), get_template_directory_uri(), $files[0]);
        }
        return '';
    }

    function enqueue_vue_scripts() {

        $chunk_vendors = get_vue_script_name('chunk-vendors.*.js');
        $app = get_vue_script_name('app.*.js');

        $theme_directory = get_template_directory_uri() . '/adherence_vue_frontend/dist/js/';

        // Scan the dist directory for the hashed filenames
        $dist_path = get_template_directory() . '/adherence_vue_frontend/dist/js/';
        $app_script = glob($dist_path . 'app.*.js')[0];
        $vendors_script = glob($dist_path . 'chunk-vendors.*.js')[0];

        // Extract the filenames from the paths
        $app_script_uri = str_replace(get_template_directory(), get_template_directory_uri(), $app_script);
        $vendors_script_uri = str_replace(get_template_directory(), get_template_directory_uri(), $vendors_script);

        // Enqueue the Vue scripts
        if ($chunk_vendors && $app) {            
            wp_enqueue_script('chunk-vendors', $vendors_script_uri, array(), null, true);
            wp_enqueue_script('app', $app_script_uri, array('chunk-vendors'), null, true);
        }

    }

    add_action('wp_enqueue_scripts', 'enqueue_vue_scripts');











?>
