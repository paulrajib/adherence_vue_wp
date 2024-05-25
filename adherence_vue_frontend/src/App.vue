<template>
  <div>
    <img :src="image" alt="New logo">
    <img :src="imageSrc" alt="Description of image">

    <img :src="require('@/assets/logo_1.png')" alt="New logo">

    <figure class="fd_picture">
      <img
        :src="require(`@/assets/images/logo_2.png`)"
        :alt="`Adh Lg`"
      />
    </figure>

    <HelloWorld msg="Welcome to Your Vue.js App"/>
    <AppHeader />
    <main>Main content</main>
    <AppFooter />
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue';
import AppHeader from './components/AppHeader.vue';
import AppFooter from './components/AppFooter.vue';
import logoNew from '@/assets/images/logo.png';
import imagePath from './assets/logo_1.png';
import image from "./assets/php-hati.svg";


export default {
  name: 'App',
  components: {
    HelloWorld,
    AppHeader,
    AppFooter
  },
  data: function () {
    return {
      image: image
    }
  }
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
