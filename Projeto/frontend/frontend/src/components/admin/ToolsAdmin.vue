<template>
    <div class="tools-admin">
        <b-row>
            <b-col md="6" sm="12">
                <b-form-group label="Buscar Professor:" label-for="project-type"  >
                    <b-form-input id="project-type" type="text"  required placeholder="Informe o tipo do projeto">

                    </b-form-input>
                </b-form-group>
                <b-button 
                    variant="primary"
                    v-if="modeTeacher === 'saveTeacher'"
                    @click="save"
                >Inserir</b-button>

                <b-button
                    class="ml-2"
                    @click="reset"
                >Cancelar</b-button>
            </b-col>
            <b-col md="6" sm="12">
                <b-form-group label="Buscar Aluno:"  label-for="project-location">
                    <b-form-input id="project-location"  type="text" required placeholder="Informe a área de conhecimento">

                    </b-form-input>
                </b-form-group>
                <b-button 
                    variant="primary"
                    v-if="modeStudent === 'saveStudent'"
                    @click="save"
                >Inserir</b-button>

                <b-button
                    class="ml-2"
                    @click="reset"
                >Cancelar</b-button>
            </b-col>
        </b-row>

        <hr>
        <b-table hover striped :items="projects" :fields="fields">
            <template>
                <b-button variant="danger">
                    <i class="fa fa-trash"></i>
                </b-button>
            </template>
        </b-table>
    </div>
</template>

<script>
export default {
    name: 'ToolsAdmin',
    data(){
        return{
            modeTeacher:'saveTeacher',
            modeStudent:'saveStudent',
            fields: [
                { key: 'nome', label: 'Nome', sortable: true},
                { key: 'perfil', label: 'Perfil', sortable: true},
                { key: 'acoes', label: 'Ações'}
            ]
        }
    },

    methods:{
        // remove(){
        //     const id = this.projeto.id 
        //     axios.delete(`${ baseApiUrl }/projetos${id}`, this.projeto)
        //         .then(()=>{
        //             this.$toasted.global.defaultSuccess()
        //             this.reset()
        //         }).catch(showError)
        // }
    },
 
}
</script>

<style>
    
</style>