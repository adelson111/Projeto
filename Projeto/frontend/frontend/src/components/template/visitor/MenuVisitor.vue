<template>
    <div class="menuVisitor" >
        <b-navbar  class="menuVisitor" type="info" >

            <b-navbar-nav>
                <b-nav-item to="/" class="item">Início</b-nav-item>
                <b-nav-item to="/projetos-de-pesquisa">Projetos de Pesquisa</b-nav-item>
                <b-nav-item to="/projetos-de-extensao">Projetos de Extensão</b-nav-item>
                <b-nav-item to="/tccs">TCC's</b-nav-item>
                <b-nav-item to="/sobre">Sobre</b-nav-item>
                <b-nav-item to="/login">Login</b-nav-item>
            </b-navbar-nav>

        </b-navbar>
    </div>
</template>

<script>

export default {
 
    name: 'MenuVisitor',
    data(){
        return{
            active: true
        }
    }
}
</script>

<style >
    .navbar {
        height: 100%;
    }
    .menuVisitor{
        grid-area: menuVisitor;
        background: linear-gradient(to right , #7CD17F, #A2CBA4);
        
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
</style>