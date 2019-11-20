<template>
   <div class="contentVisitor">
       <Carousel/>
       <QuickAcess/>
       <ProjectDetails/>
   </div>
</template>

<script>
import Carousel from '../visitor/Carousel'
import QuickAcess from '../visitor/QuickAcess'
import ProjectDetails from '../visitor/ProjectDetails'
export default {
    components: { Carousel, QuickAcess, ProjectDetails },
    name: 'Content' ,
    data(){
        return{
            content: 'container',
        }
    }
}
</script>

<style>
    .contentVisitor{
        grid-area: contentVisitor;
        background-color: #fff
        ;
        margin: 20px 0;
        position: relative;
    }
    
</style>