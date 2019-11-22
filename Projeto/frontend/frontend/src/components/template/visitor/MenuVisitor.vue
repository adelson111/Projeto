<template>
    <div class="menuVisitor" >
        <b-nav>
            
            <b-nav-item>
                <router-link to="/" >Início</router-link>
            </b-nav-item>
            <b-nav-item > 
                <router-link to="/projetos-de-pesquisa">
                   Projetos de Pesquisa
                </router-link>  
            </b-nav-item>
            <b-nav-item > 
                <router-link to="/projetos-de-extensao">
                   Projetos de Extensão
                </router-link>  
            </b-nav-item>
            <b-nav-item > 
                <router-link to="/tccs">
                   TCC's
                </router-link>  
            </b-nav-item>
            <b-nav-item >Sobre</b-nav-item>
            <b-nav-item > 
                <router-link to="/login">
                   Login
                </router-link>  
            </b-nav-item>
        </b-nav>
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
    .menuVisitor{
        grid-area: menuVisitor;
        background: linear-gradient(to right , #7CD17F, #A2CBA4);
        
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
</style>