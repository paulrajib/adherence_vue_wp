<?php 
function enqueue_vue_scripts() {

    $chunk_vendors = get_vue_script_name('chunk-vendors.*.js');
        $app = get_vue_script_name('app.*.js');
    $theme_directory = get_template_directory_uri() . '/adherence_vue_frontend/dist/js/';
    $dist_path = get_template_directory() . '/adherence_vue_frontend/dist/js/';

    // Scan the dist directory for the hashed filenames
    $app_scripts = glob($dist_path . 'app.*.js');
    $vendors_scripts = glob($dist_path . 'chunk-vendors.*.js');

    // Check if the scripts were found
    if (empty($app_scripts) || empty($vendors_scripts)) {
        // Handle the error, maybe log it or notify the developer
        error_log('Vue.js files not found in the dist directory.');
        return;
    }

    // Extract the filenames from the paths
    $app_script = $app_scripts[0];
    $vendors_script = $vendors_scripts[0];

    $app_script_uri = str_replace(get_template_directory(), get_template_directory_uri(), $app_script);
    $vendors_script_uri = str_replace(get_template_directory(), get_template_directory_uri(), $vendors_script);

    // Enqueue the Vue scripts
    if ($chunk_vendors && $app){        
        wp_enqueue_script('chunk-vendors', $vendors_script_uri, array(), null, true);
        wp_enqueue_script('app', $app_script_uri, array('chunk-vendors'), null, true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_vue_scripts');





 ?>