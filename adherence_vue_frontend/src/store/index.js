// src/store/index.js
import { createStore } from 'vuex';

export default createStore({
  state: {
    cart: []
  },
  mutations: {
    addToCart(state, product) {
      state.cart.push(product);
    }
  },
  actions: {},
  modules: {}
});
