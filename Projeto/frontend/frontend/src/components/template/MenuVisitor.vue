<template>
    <div class="menuVisitor" >
        <b-nav>
            <b-nav-item  active>Início</b-nav-item>
            <b-nav-item >Projetos de Pesquisa</b-nav-item>
            <b-nav-item >Projetos de Extensão</b-nav-item>
            <b-nav-item >TCCs</b-nav-item>
            <b-nav-item >Sobre</b-nav-item>
            <b-nav-item >Login</b-nav-item>
        </b-nav>
    </div>
</template>

<script>

export default {
 
    name: 'MenuVisitor',
    data(){
        return{
        }
    }
}
</script>

<style>
    .menuVisitor{
        grid-area: menuVisitor;
        background: linear-gradient(to right , #7CD17F, #A2CBA4);
        
        display: flex;
        justify-content: center;
        align-items: center;
    }

</style>