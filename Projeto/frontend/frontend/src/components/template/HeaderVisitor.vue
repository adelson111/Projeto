<template>
    <div class="headerVisitor">
        <img :src="img">    
        <div class="menu-visitor-filter">
            <input type="text" placeholder="Buscar projeto" 
                class="filter-visitor-field"
            ><i class="fa fa-search fa-lg"></i>
            
            
        </div>
    </div>
</template>

<script>
import logoIF from '../../assets/if.png'
export default {
    name: 'HeaderVisitor',
    data() {
        return {
           img: logoIF
        }
    },
}
</script>

<style>
     .headerVisitor{
        grid-area: headerVisitor;
        background: linear-gradient(to right , #24B22A, #7CD17F);

        display: flex;
        justify-content: left;
        align-items: center;
    }

    .headerVisitor  img{
        height: 55px;
        width: 40px;
        margin-left: 300px;
        margin-right: 300px;
    }

    .headerVisitor .menu-visitor-filter{
        display: flex;
        justify-content: center;
        align-items: center;

        margin:  20px;
        margin-bottom: 8px;
        border-radius: 20px;
        background-color: #fff;
        margin-bottom: 20px
    }

    .headerVisitor .menu-visitor-filter i{
        color: #A6A6A6;
        margin-right: 10px;
    }

    .headerVisitor input{
        color:  #A6A6A6;
        font-size: 1.3rem;
        border: 0;
        outline: 0;
        width: 500px;
        background-color: #fff;
        border-radius: 15px;
        padding-left: 30px;
    }
</style>