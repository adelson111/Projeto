<template>
    <div class="project-by-id">
        <PageTitle
            icon="fa fa-file-o"
            :main="nomeDoProjeto"
            :sub="orientadorDoProjeto"
        />

        <div class="project-content" v-html="project-content"></div>
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