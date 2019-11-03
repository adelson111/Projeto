<template>
    <div class="project-admin">
        <b-form>

            <input type="hidden" id="project-id" v-model="project.id">
           
            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Título:" label-for="project-name">
                        <b-form-input id="project-name" type="text" required placeholder="Informe o título do projeto...">

                        </b-form-input>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="6" sm="12">
                    <b-form-group label="Tipo:" label-for="project-type">
                        <b-form-input id="project-type" type="text" required placeholder="Informe o tipo do projeto">

                        </b-form-input>
                    </b-form-group>
                </b-col>
                <b-col md="6" sm="12">
                    <b-form-group label="Campus:" label-for="project-location">
                        <b-form-input id="project-location" type="text" required placeholder="Informe o tipo do projeto">

                        </b-form-input>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="6" sm="12">
                    <b-form-group label="Data de Início:" label-for="project-date-i">
                        <b-form-input id="project-date-i" type="date" required placeholder="Informe o tipo do projeto">

                        </b-form-input>
                    </b-form-group>
                </b-col>
                <b-col md="6" sm="12">
                    <b-form-group label="Data de Término:" label-for="project-date-f">
                        <b-form-input id="project-date-f" type="date" required placeholder="Informe o tipo do projeto">

                        </b-form-input>
                    </b-form-group>
                </b-col>
            </b-row>

        </b-form>
        <b-table hover striped :items="projects" :fields="fields">

        </b-table>
    </div>
</template>

<script>
// import { baseApiUrl } from '../../global'
// import axios from 'axios'

export default {
    name: 'ProjectsAdmin',
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