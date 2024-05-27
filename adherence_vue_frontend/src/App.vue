<template>
  <div id="app">
    <!-- Header with Logo and Navigation -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img :src="themeData.logo" alt="Logo" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <router-link class="nav-link" to="/">Home</router-link>
            </li>
            <!-- Add more nav links as needed -->
          </ul>
        </div>
      </nav>
    </header>

    <!-- Main Content Area -->
    <main class="container">
      <router-view></router-view>
    </main>

    <!-- Footer -->
    <footer class="footer text-center mt-4">
      <div class="container">
        <span class="text-muted">Follow us on:</span>
        <a :href="themeData.facebookLink" target="_blank"><i class="fab fa-facebook"></i></a>
        <a :href="themeData.twitterLink" target="_blank"><i class="fab fa-twitter"></i></a>
        <!-- Add more social media icons as needed -->
      </div>
      <p>&copy; 2024 Your Company</p>
    </footer>
  </div>
</template>

<script>
export default {
  data() {
    return {
      themeData: window.themeData || {}
    };
  }
}
</script>

<style lang="scss">
/* Import global styles */
@import '@/assets/scss/main.scss';

/* Add additional styles here if necessary */
</style>
