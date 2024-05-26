const { defineConfig } = require('@vue/cli-service');

module.exports = defineConfig({
  transpileDependencies: true,
  publicPath: '/wp-content/themes/adherence_vue/adherence_vue_frontend/dist/',
  devServer: {
    proxy: {
      '/wp-json': {
        target: 'http://localhost:8000', // Adjust this to match your WordPress development server
        changeOrigin: true,
        pathRewrite: { '^/wp-json': '/wp-json' }
      }
    }
  }
});


