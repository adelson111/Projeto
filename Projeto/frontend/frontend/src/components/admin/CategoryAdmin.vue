<template>
    <div class="category-admin">
        <b-table hover striped :items="projects" :fields="fields">

        </b-table>
    </div>
</template>

<script>
// import { baseApiUrl } from '../../global'
// import axios from 'axios'
export default {
    name: 'CategoryAdmin',
        data(){
            return{
                mode: 'save',
                project: {},
                projects: [],
                fields: [
                    { key: 'id', label: 'ID', sortable: true},
                    { key: 'Nome', label: 'Título', sortable: true},
                    { key: 'professor', label: 'Professor Responsável', sortable: true},
                    { key: 'acoes', label: 'Ações'}
                ]
            }
    },

    //essa parte serve pra buscar os projetos do backend

    // methods:{
    //     loadProjects(){ 
    //         const url = `${ baseApiUrl }/projects`
    //         axios.get(url).then(res=>{
    //             this.projects = res.data
    //         })
    //     }
    // },
    // mount(){
    //     this.loadProjects()
    // }
}
</script>

<style>
    
</style>