<template>
    <b-container class="bv-row">
        <b-row>
            <b-col cols="8 carousel-row">
                <b-carousel
                    id="carousel-fade"
                    style="text-shadow: 0px 0px 2px #000"
                    fade
                    indicators
                >
                    <b-carousel-slide
                    caption="Hopnose de Galinhas"
                    img-src="https://i.ytimg.com/vi/o34oLS68fI0/maxresdefault.jpg"
                    ></b-carousel-slide>
                    <b-carousel-slide
                    caption="André Free Fire"
                    img-src="http://ff.garena.com/statics/ff/images/news/common/853c47599cce0dfa7918f073b0a07a4d.jpe"
                    ></b-carousel-slide>
                    <b-carousel-slide
                    caption="O Palmeiras não tem mundial"
                    img-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQttyqg7-B5CFG8MRPEFfKTYhaIcrosrYcJgrjxxRRX1Zc8jnsiGA&s"
                    ></b-carousel-slide>
                </b-carousel>
            </b-col>
            <b-col cols="4 carousel-coment">col-4</b-col>
        </b-row>
    </b-container>
</template>

<script>

export default {
    name: 'CarouselVisitor',
    data(){
        return{
            
        }
    },
}
</script>

<style scoped>
    .bv-row{
        border: 1px solid rebeccapurple;
        padding: 0px;
    }
    .carousel-row{
        border: 1px solid rebeccapurple;
        height: auto;
    }
    .carousel-coment{
        border: 1px solid rebeccapurple;  
    }
    .carousel-item {
        height: 300px; 
    }
    img{
        position: relative;
        height: 200px;;
    }
</style>