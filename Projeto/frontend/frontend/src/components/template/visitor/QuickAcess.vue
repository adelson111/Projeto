<template>
    <div class="quick-acess">
        <b-container fluid class="p-4 bg-white ">
            <b-row>
                <b-col>
                    <div>
                        <b-card no-body class="overflow-hidden" style="max-width: 540px;">
                            <b-row no-gutters>
                            <b-col md="4">
                                <router-link to="/"><b-card-img :src="tcc" ></b-card-img></router-link>   
                            </b-col>
                            <b-col md="8">
                                <b-card-body title="Trabalhos de Conclusão de Curso">
                                      
                                <b-card-text>
                                    This is a wider card with supporting text as a natural lead-in to additional content.
                                    This content is a little bit longer.
                                </b-card-text>
                                </b-card-body>
                            </b-col>
                            </b-row>
                        </b-card>
                    </div>
                </b-col>
                <b-col>
                    <div>
                        <b-card no-body class="overflow-hidden" style="max-width: 540px;">
                            <b-row no-gutters>
                            <b-col md="4">
                                <router-link to="/"><b-card-img :src="research" ></b-card-img>  </router-link>
                            </b-col>
                            <b-col md="8">
                                <b-card-body title="Projetos de Pesquisa">
                                <b-card-text>
                                    This is a wider card with supporting text as a natural lead-in to additional content.
                                    This content is a little bit longer.
                                </b-card-text>
                                </b-card-body>
                            </b-col>
                            </b-row>
                        </b-card>
                    </div>
                </b-col>
                <b-col>
                    <div>
                        <b-card no-body class="overflow-hidden" style="max-width: 540px;">
                            <b-row no-gutters>
                            <b-col md="4">
                                <router-link to="/"><b-card-img :src="extension" ></b-card-img> </router-link>
                            </b-col>
                            <b-col md="8">
                                <b-card-body title="Projetos de Extensão">
                                <b-card-text>
                                    This is a wider card with supporting text as a natural lead-in to additional content.
                                    This content is a little bit longer.
                                </b-card-text>
                                </b-card-body>
                            </b-col>
                            </b-row>
                        </b-card>
                    </div>
                </b-col>
            </b-row>
        </b-container>
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
        width: 100vw;
        height: auto;
        background-color: #fff;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 40px;
    }
    .container-fluid{
        width: 90%;
        height: auto;
        margin: 0px 10px;
        background: #fff;
        flex-wrap: wrap;
    }

    .card-body{
        text-align: center;
        margin-top: 40px;
    }

    h4{
        font-size: 1.2rem;
        color: black;
        font-weight: 100;
        flex-grow: 1;
        text-align: center;
    }
    .overflow-hidden{ 
        border:  none
    }
    
</style>