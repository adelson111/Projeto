<template>
    <aside class="menu" v-show="isMenuVisible">
        <div class="menu-filter">
            <i class="fa fa-search fa-lg"></i>
            <input type="text" placeholder="Buscar projeto" 
                v-model="treeFilter" class="filter-field"
            >
        </div>
        <Tree :data="treeData"  :filter="treeFilter" ref="tree" />
    </aside>
</template>

<script>
import { mapState } from 'vuex'
import Tree from 'liquor-tree'

export default {
    name: 'Menu',
    computed: mapState(['isMenuVisible']),
    components: {Tree},

    data(){
        return{
            treeFilter: '',
            treeData: [
                { text: 'Pesquisa' },
                { text: 'Extensão' },
                { text: 'TCC', children: [
                      { text: 'Python e Django'},
                      { text: 'NodeJS'},
                      { text: 'React'},
                ]},          
            ], 
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
    .menu a, .menu span{
        color: #fff;
        text-decoration: none;
    }

    .menu .tree-node.selected > .tree-content,
    .menu .tree-node .tree-content:hover
    {
        background-color: rgba(255, 255, 255, 0.2)
    }

    .tree-arrow.has-child{
        filter: brightness(2);
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