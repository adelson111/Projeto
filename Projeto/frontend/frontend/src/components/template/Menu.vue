<template>
    
        <aside class="menu" v-show="isMenuVisible">
            <div class="menu-filter">
                <i class="fa fa-search fa-lg"></i>
                <input type="text" placeholder="Buscar projeto" 
                    v-model="treeFilter" class="filter-field"
                >
            </div>   
             <div role="tree" class="tree">
            <ul class="tree-root">
                <router-link to="/meus-projetos-de-pesquisa" class="links">
                    <li data-id="7adb27d4-380a-c909-d43e-330d8d61cdc3" class="tree-node  draggable">
                    <div class="tree-content" style="padding-left: 0px;">
                        <i class="tree-arrow ltr">
                        </i> <!----> <span tabindex="-1" class="tree-anchor">
                            <span>Pesquisa</span></span>
                    </div> <!---->
                </li>
                </router-link>
                <router-link to="/meus-projetos-de-extensao"  class="links">
                    <li data-id="cb78b744-af39-1d0a-f382-8270114363ce" class="tree-node draggable">
                    <div class="tree-content" style="padding-left: 0px;"><i class="tree-arrow ltr">
                        </i> <!----> <span tabindex="-1" class="tree-anchor"><span>Extensão</span>
                        </span></div> <!----></li>
                </router-link>
                <router-link to="/meus-tccs"  class="links">
                     <li data-id="f730f105-309c-87a2-5bd9-1b99e1edd242" class="tree-node draggable">
                    <div class="tree-content" style="padding-left: 0px;"><i class="tree-arrow ltr">
                        </i> <!----> <span tabindex="-1" class="tree-anchor"><span>TCC</span>
                        </span>
                        </div> <!---->
                </li>
                </router-link>
            </ul> <!---->
        </div>   
        </aside>
       
    
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

    .links:hover{
        text-decoration: none;
    }
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

    .tree{
        padding: 12px;
        font-size: 1.3rem;
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

    .tree-root .router-link-exact-active:hover{
        text-decoration: none;
    }
</style>