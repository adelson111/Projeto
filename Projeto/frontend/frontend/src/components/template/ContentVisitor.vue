<template>
   <div class="contentVisitor">
       <router-view></router-view>
       <Carousel/>
   </div>
</template>

<script>
import Carousel from './Carousel'
export default {
    components: { Carousel },
    name: 'Content' 
}
</script>

<style>
    .contentVisitor{
        grid-area: contentVisitor;
        background-color: #efefef;
        padding: 20px;
    }
</style>