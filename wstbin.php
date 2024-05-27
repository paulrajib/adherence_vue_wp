<?php 


/*     function get_vue_script_name($pattern) {
        $dir = get_template_directory() . '/adherence_vue_frontend/dist/js/';
        $files = glob($dir . $pattern);
        if ($files) {
            return str_replace(get_template_directory(), get_template_directory_uri(), $files[0]);
        }
        return '';
    } */


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



<!-- vue.config.js -->

<!-- module.exports = defineConfig({
  transpileDependencies: true,
  publicPath: '/wp-content/themes/adherence_vue/adherence_vue_frontend/dist/',
  outputDir: 'dist',
  assetsDir: 'assets',
  // other configurations
}); -->




package.json
{
    "scripts": {
        "serve": "vue-cli-service serve",
        "build": "vue-cli-service build",
        "lint": "vue-cli-service lint",
        "sass": "sass --watch scss:css"
    }
}

"scripts": {
    "serve": "npm-run-all --parallel serve sass",
    "build": "vue-cli-service build && npm run sass",
    "lint": "vue-cli-service lint",
    "sass": "sass --watch assets/scss/main.scss:assets/css/main.css"
  },


  
  
// src/main.js
  /* import { createApp } from 'vue'; */
/* import Vue from 'vue'; */
/* import App from './App.vue'; */

// createApp(App).mount('#app');

/*
new Vue({
  render: h => h(App),
}).$mount('#app');
*/


App.vue


<script>
export default {
  data() {
    return {
      logo: '<?php echo get_theme_mod('theme_logo'); ?>',
      facebookLink: '<?php echo get_theme_mod('theme_facebook_link'); ?>',
      twitterLink: '<?php echo get_theme_mod('theme_twitter_link'); ?>',
    };
  }
}
</script>


<style scoped>
/* Add your global styles here */
.logo {
  height: 40px;
}
.footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 60px;
  background-color: #f1f1f1;
  text-align: center;
  padding: 20px;
}
.footer a {
  margin: 0 10px;
  color: #000;
}
</style>