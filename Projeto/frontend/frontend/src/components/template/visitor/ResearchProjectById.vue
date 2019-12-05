<template>
    <div class="project-by-id">
        <PageTitle
            icon="fa fa-file-o"
            :main="nomeDoProjeto"
            :sub="orientadorDoProjeto"
        />

        <div class="project-content" v-html="project-content"></div>
        <div class="fb-comments" 
            data-href="http://localhost:8080/projetos:id" 
            data-width="" 
            data-numposts="5"
            data-show-faces="true"></div>
        <br>
        <div class="fb-like" data-href="http://localhost:8080/projetos:id" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="false"></div>
    </div>
</template>

<script>
// import { baseApiUrl } from '../../../global'
// import axios from 'axios'
import PageTitle from '../PageTitle'
export default {
    name:'ResearchProjectById',
    components:{ PageTitle },
    data(){
        return{
            project:{},
            nomeDoProjeto: 'Como virar Cafetão',
            oorientadorDoProjeto: 'Romário'
        }
    }, 
    mounted(){
        // const url = `${baseApiUrl}/projetos/${this.route.prams.id}`
        // Axios.get(url).then(res => this.project = res.data)
    }
}
</script>

<style scoped>
    .project-by-id{
        width: 80%;
        border-radius: 8px;
        margin-top: 20px;
        margin-bottom: 20px;
        background-color: #fff;
        padding: 20px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15)
    }
    .project-content{
        background-color: #fff;
        border-radius: 8px;
        padding: 25px;
    }

    .project-content pre {
        padding: 20px;
        border-radius: 8px;
        font-size: 1.2rem;
    }

    .project-content img{
        max-width: 100%;
    }

    .project-content :last-child{
        margin-bottom: 0px;
    }
    .project-by-id{
        padding: 20px;
    }
</style>