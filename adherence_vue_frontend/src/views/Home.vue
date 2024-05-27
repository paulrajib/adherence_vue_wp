<template>
    <div>
      <Carousel />
      <ProductList />
    </div>
</template>
  
<script>
  import Carousel from '@/components/Carousel.vue';
  import ProductList from '@/components/ProductList.vue';
  
  export default {
    components: {
      Carousel,
      ProductList
    }
  }
</script>
  
<style scoped>
    @import '@/assets/scss/pages/home.scss';
</style>
