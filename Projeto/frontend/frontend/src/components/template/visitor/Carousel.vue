<template>
  <div class="carrosel">
    <b-carousel
      id="carousel-no-animation"
      style="text-shadow: 0px 0px 2px #000"
      no-animation
      indicators
      img-width="1024"
      img-height="480"
    >
      <b-carousel-slide
        caption="Projeto 1"
        img-src="https://picsum.photos/1024/480/?image=10"
      ></b-carousel-slide>
      <b-carousel-slide
        caption="Projeto 2"
        img-src="https://picsum.photos/1024/480/?image=12"
      ></b-carousel-slide>
      <b-carousel-slide
        caption="Projeto 3"
        img-src="https://picsum.photos/1024/480/?image=22"
      ></b-carousel-slide>
      <b-carousel-slide
        caption="Projeto 4"
        img-src="https://picsum.photos/1024/480/?image=23"
      ></b-carousel-slide>
    </b-carousel>
  </div>
</template>

<script>

export default {
 
    name: 'Carousel',
    data(){
        return{
            slide: 0,
            sliding: null,
        }
    },
}
</script>

<style>
    .carousell{
        padding: 20px;
    }
    .carousel .slide{
        width: 100%;
        height: 400px; 
    }

    .carousel .carousel-inner{
        width: 100%;
        height: 400px;
    }

    .carousel .carousel-inner .carousel-item .img-fluid{
        width: auto;
        height: 400px;
    }
</style>