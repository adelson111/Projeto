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
            <b-col cols="4 carousel-coment">
                <b-card-group deck>
                    <b-card header="Adcionados Recentemente">
                        <b-list-group>
                            <b-list-group-item >Cras justo odio</b-list-group-item>
                            <b-list-group-item >Dapibus ac facilisis in</b-list-group-item>
                            <b-list-group-item >Vestibulum at eros</b-list-group-item>
                            <b-list-group-item >Vestibulum at eros</b-list-group-item>
                            <b-list-group-item >Vestibulum at eros</b-list-group-item>
                        </b-list-group>
                    </b-card>
                </b-card-group>
            </b-col>
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
        width: 80%;
        border-radius: 8px;
        margin-bottom: 20px;
        background-color: #fff;
        padding: 20px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15)
    }

   
    .carousel-row{
        height: auto;
    }
    .carousel-coment{
        
    }
    .carousel-item {
        height: 300px; 
    }
    img{
        position: relative;
        height: 200px;;
    }
   .card-deck{
       margin-right: 0;
   }
   .card-header{
       background-color: #24B22A;
       color: #fff;
   }
   .card-deck{
       max-height: 300px;
       overflow: auto;
   }
   .card-header{
       text-align: center;
   }
</style>