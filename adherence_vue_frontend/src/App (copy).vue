<template>
  <div id="app">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img :src="logo" alt="Logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <router-link class="nav-link" to="/">Home</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/products">Products</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/cart">Cart</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/dashboard">Dashboard</router-link>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <router-view></router-view>
    </main>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Follow us on:</span>
        <a :href="socialLinks.facebook" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
        <a :href="socialLinks.twitter" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
        <!-- Add more social media links as needed -->
      </div>
    </footer>
  </div>
</template>

<script>
import './assets/css/main.css';

export default {
  name: 'App',
  data() {
    return {
      logo: '', // We'll set this in mounted
      socialLinks: {
        facebook: '',
        twitter: '',
        // Add more social media links as needed
      }
    };
  },
  mounted() {
    this.logo = this.getThemeOption('theme_logo');
    this.socialLinks.facebook = this.getThemeOption('theme_facebook_link');
    this.socialLinks.twitter = this.getThemeOption('theme_twitter_link');
    // Set more social media links as needed
  },
  methods: {
    getThemeOption(option) {
      return window.themeOptions ? window.themeOptions[option] : '';
    }
  }
};
</script>


