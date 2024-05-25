const { defineConfig } = require('@vue/cli-service');

module.exports = defineConfig({
  transpileDependencies: true,
  publicPath: '/wp-content/themes/adherence_vue/adherence_vue_frontend/dist/'
});


/*
module.exports = defineConfig({
  transpileDependencies: true,
  publicPath: '/wp-content/themes/adherence_vue/adherence_vue_frontend/dist/',
  outputDir: 'dist',
  assetsDir: 'assets',
  // other configurations
});
*/