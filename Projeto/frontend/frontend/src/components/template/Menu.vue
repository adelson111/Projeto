<template>
    <div class="menu">
        <aside class="menu-aside" v-show="isMenuVisible">
        <div class="menu-filter">
            <i class="fa fa-search fa-lg"></i>
            <input type="text" placeholder="Buscar projeto" 
                v-model="treeFilter" class="filter-field"
            >
        </div>
        <Tree :data="treeData"  :filter="treeFilter" ref="tree" />
    </aside>
    <div class="verticalMenu">
        <router-link to="/home-admin">Pesquisa </router-link>    
        <router-link to="/home-admin">Extenção  </router-link>     
        <router-link to="/home-admin">TCC's  </router-link>     
    </div>
    </div>
</template>

<script>
import { mapState } from 'vuex'

export default {
    name: 'Menu',
    computed: mapState(['isMenuVisible']),

    data(){
        return{
            treeFilter: '',
            filter:{
                emptyText: 'Projeto não encontrado!'
            }
        }
    }
}
</script>

<style>
    .menu{
        grid-area: menu;
        background-color:#7CD17F;        
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
    }
    
    .verticalMenu{
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 12px;
    }
    .verticalMenu a:hover{
        background-color: #2F4F4F;
        color: #fff;
        text-decoration: none;
    }
    .verticalMenu a{
        color: #000;
        font-size: 1.3rem;
        font-weight: 300;
        text-decoration: none;
    }
    .menu .menu-filter{
        display: flex;
        justify-content: center;
        align-items: center;

        margin:  20px;
        margin-bottom: 8px;
        border-bottom: 1px solid #8FBC8F 
    }

    .menu .menu-filter i{
        color: #2F4F4F;
        margin-right: 10px;
    }

    .menu input{
        color:  #2F4F4F;
        font-size: 1.3rem;
        border: 0;
        outline: 0;
        width: 100%;
        background: transparent;
    }

    .tree-filter-empty{
        color: #fff;
        margin-left: 20px;
        font-size: 1.3rem
    }
</style>