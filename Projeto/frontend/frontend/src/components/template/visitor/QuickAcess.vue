<template>
    <div class="quick-acess">
        <div class="pesquisa projetos">
            <img class="img-verdinha" :src="tcc" alt="">
            <div class="infor-proj">
                <h4>Projetos de Pesquisa</h4>
            </div>
        </div>
        <div class="extensao projetos">
            <img class="img-verdinha" :src="research" alt="">
            <div class="infor-proj">
                <h4>Projetos de Extensão</h4>
            </div>
        </div>
        <div class="tcc projetos">
            <img class="img-verdinha" :src="extension" alt="">
            <div class="infor-proj">
                <h4>TCC</h4>
            </div>
        </div>
    </div>
</template>

<script>
import tcc from '../../../assets/tcc.png'
import pesquisa from '../../../assets/pesquisa.png'
import extensao from '../../../assets/extensao.png'
export default {
    name: 'QuickAcess',
    data(){
        return{
            tcc: tcc,
            research: pesquisa,
            extension: extensao,
        }
    }
}
</script>

<style scoped>
    
    .quick-acess{
        background-color: #fff;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        width: 80%;
        height: 300px;
        margin-top: 20px;
        flex-wrap: wrap;
    }

    .projetos{
        width: 30%;
        display: flex;
        justify-content: start;
        align-items: center;
        padding: 10px;
    }

    .img-verdinha{
        width: 150px;
        height: 250px;;
    }

    .infor-proj{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .infor-proj h4{
        text-align: center;
    }


</style>