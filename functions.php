<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL & ~E_NOTICE);

    
    function enqueue_vue_scripts() {
        $dist_path = get_template_directory() . '/adherence_vue_frontend/dist/';
        $css_path = get_template_directory_uri() . '/adherence_vue_frontend/css/';

        if (defined('WP_ENV') && WP_ENV === 'development') {
            // Load from Vue CLI dev server
            wp_enqueue_script('vue-dev', 'http://localhost:8080/js/app.js', [], null, true);
            wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
        } else {
            // Scan the dist directory for the hashed filenames
            $app_scripts = glob($dist_path . 'js/app.*.js');
            $vendors_scripts = glob($dist_path . 'js/chunk-vendors.*.js');
            $app_css = glob($dist_path . 'css/app.*.css');
        
            // Check if the scripts and styles were found
            $err_mgs = '';
            if (empty($app_scripts) || empty($vendors_scripts) || empty($app_css)) {
                if(empty($app_scripts)){
                    $err_mgs .= ' app_scripts, ';
                }
                if(empty($vendors_scripts)){
                    $err_mgs .= ' vendors_scripts, ';
                }
                if(empty($app_css)){
                    $err_mgs .= ' app_css, ';
                }

                echo $err_mgs . ' file not found.';
                error_log(' file not found. ');
                return;
            }
        
            // Extract the filenames from the paths
            $app_script = $app_scripts[0];
            $vendors_script = $vendors_scripts[0];
            $app_css = $app_css[0];
        
            $app_script_uri = str_replace(get_template_directory(), get_template_directory_uri(), $app_script);
            $vendors_script_uri = str_replace(get_template_directory(), get_template_directory_uri(), $vendors_script);
            $app_css_uri = str_replace(get_template_directory(), get_template_directory_uri(), $app_css);
        
            // Enqueue the Vue scripts
            wp_enqueue_script('chunk-vendors', $vendors_script_uri, array(), null, true);
            wp_enqueue_script('app', $app_script_uri, array('chunk-vendors'), null, true);
        
            // Enqueue the Vue styles
            wp_enqueue_style('app', $app_css_uri, array(), null);
        }

        // Enqueue the Sass compiled CSS
        wp_enqueue_style('main-styles', $css_path . 'main.css', array(), null);

        // Enqueue Bootstrap
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');


        // Localize the script with data from the theme customizer
        $theme_data = array(
            'logo' => get_theme_mod('theme_logo'),
            'facebookLink' => get_theme_mod('theme_facebook_link'),
            'twitterLink' => get_theme_mod('theme_twitter_link'),
        );

        wp_localize_script('app', 'themeData', $theme_data);

    }
    add_action('wp_enqueue_scripts', 'enqueue_vue_scripts');







?>