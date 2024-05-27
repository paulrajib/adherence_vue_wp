<template>
    <div class="product-list">
      <div v-for="product in products" :key="product.id" class="product">
        <img :src="product.image" :alt="product.name">
        <h3>{{ product.name }}</h3>
        <p>{{ product.price }}</p>
        <button @click="addToCart(product)">Add to Cart</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'ProductList',
    data() {
      return {
        products: [
          { id: 1, name: 'Product 1', price: '$10', image: 'https://via.placeholder.com/150' },
          { id: 2, name: 'Product 2', price: '$20', image: 'https://via.placeholder.com/150' },
          // Add more products as needed
        ]
      }
    },
    methods: {
      addToCart(product) {
        // Handle add to cart functionality
        this.$store.commit('addToCart', product);
      }
    }
  }
  </script>
  
  <style scoped>
  /* Add your product list styles here */
  </style>
  