<template>
    <div class="project-by-category">
        <PageTitle icon="fa fa-folder-o"
            :main="category"
            sub="Categoria"
        />
        
    </div>
</template>

<script>
import { baseApiUrl } from '../../global'
import axios from 'axios'
import PageTitle from '../template/PageTitle'

export default {
    name: 'ProjectByCategory',
    components: { PageTitle },
    data(){
        return{
            category:{},
            projects: [],
            page: 1,
            loadMore: true
        }
    },
    methods:{
        getCategory(){
            const url = `${baseApiUrl}/projeto/${this.$route.params.id}`
            axios(url).then(res=>this.tipo = res.data)
        }
    },
    mounted(){
        this.category.id = this.$route.params.id
        this.getategory()
    }
}
</script>

<style>
    
</style>