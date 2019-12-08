<template>
  <div class="tools-admin">
    <b-row>
      <b-col md="6" sm="12">
        <b-form-group label="Professor:" label-for="professor">
          <b-form-select v-model="project" :options="teachers" id="professor"></b-form-select>
        </b-form-group>
        <!-- <b-form-group label="Buscar Professor:" label-for="project-type">
          <b-form-input
            id="project-type"
            type="text"
            required
            placeholder="Informe o tipo do projeto"
          ></b-form-input>
        </b-form-group>-->
        <b-button variant="primary" v-if="modeTeacher === 'saveTeacher'" @click="save">Inserir</b-button>

        <b-button class="ml-2" @click="reset">Cancelar</b-button>
      </b-col>
      <b-col md="6" sm="12">
        <b-form-group label="Aluno:" label-for="aluno">
          <b-form-select v-model="project" :options="students" id="aluno"></b-form-select>
        </b-form-group>
        <!-- <b-form-group label="Buscar Aluno:" label-for="project-location"> -->
        <!-- <b-form-input
            id="project-location"
            type="text"
            required
            placeholder="Informe a área de conhecimento"
        ></b-form-input>-->
        <!-- </b-form-group> -->
        <b-button variant="primary" v-if="modeStudent === 'saveStudent'" @click="save">Inserir</b-button>

        <b-button class="ml-2" @click="reset">Cancelar</b-button>
      </b-col>
    </b-row>

    <hr />
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
import axios from "axios";
import { baseApiUrl } from "../../global";
export default {
  name: "ToolsAdmin",
  data() {
    return {
      modeTeacher: "saveTeacher",
      modeStudent: "saveStudent",
      teachers: [],

      students: [],

      fields: [
        { key: "nome", label: "Nome", sortable: true },
        { key: "perfil", label: "Perfil", sortable: true },
        { key: "acoes", label: "Ações" }
      ]
    };
  },

  methods: {
    getAlunos() {
      axios.get(`${baseApiUrl}/alunos`).then(
        res =>
          (this.students = res.data.map(student => {
            return { value: student.id, text: student.nome };
          }))
      );
    },
    getProfessores() {
      axios.get(`${baseApiUrl}/professor`).then(
        res =>
          (this.teachers = res.data.map(teacher => {
            return { value: teacher.id, text: teacher.nome };
          }))
      );
    },
    // remove(){
    //     const id = this.projeto.id
    //     axios.delete(`${ baseApiUrl }/projetos${id}`, this.projeto)
    //         .then(()=>{
    //             this.$toasted.global.defaultSuccess()
    //             this.reset()
    //         }).catch(showError)
    // }
    save() {}
  },
  mounted() {
    this.getAlunos();
    this.getProfessores();
  }
};
</script>

<style>
</style>