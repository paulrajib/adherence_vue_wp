<template>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://via.placeholder.com/800x400" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://via.placeholder.com/800x400" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://via.placeholder.com/800x400" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </template>
  
  <script>
  export default {
    name: 'Carousel'
  }
  </script>
  
  <style scoped>
  /* Add your carousel styles here */
  </style>
  