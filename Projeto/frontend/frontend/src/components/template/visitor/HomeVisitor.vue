<template>
   <div class="contentVisitor">
       <CarouselVisitor/>
       <QuickAcess/>
       <ProjectDetails/>
   </div>
</template>

<script>
import CarouselVisitor from '../visitor/CarouselVisitor'
import QuickAcess from '../visitor/QuickAcess'
import ProjectDetails from '../visitor/ProjectDetails'
export default {
    components: { CarouselVisitor, QuickAcess, ProjectDetails },
    name: 'Content' ,
    data(){
        return{
            content: 'container',
        }
    }
}
</script>

<style scoped>
    .contentVisitor{
        grid-area: contentVisitor;
        background-color: #fff
        ;
        margin: 20px 0;
        position: relative;
    }
    
</style>