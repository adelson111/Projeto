<template>
   <div class="contentVisitor">
       <router-view></router-view>
   </div>
</template>

<script>
export default {
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