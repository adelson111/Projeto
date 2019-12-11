<template>
  <div class="category-admin">
    <b-table hover striped :items="projects" :fields="fields">
      <template slot="actions" slot-scope="data">
        <b-button variant="warning" @click="loadArticle(data.item)" class="mr-2">
          <i class="fa fa-pencil"></i>
        </b-button>
        <b-button variant="danger" @click="loadArticle(data.item, 'remove')">
          <i class="fa fa-trash"></i>
        </b-button>
      </template>
    </b-table>
  </div>
</template>

<script>
import { baseApiUrl, showError } from "../../global";
import axios from "axios";

export default {
  name: "CategoryAdmin",
  data: function() {
    return {
      listProjeto: {},
      projects: [],
      fields: [
        {
          key: "id",
          label: "ID",
          sortable: true
        },
        { key: "nome", label: "Título", sortable: true },
        {
          key: "professor[0].nome",
          label: "Professor Responsável",
          sortable: true
        },
        { key: "alunos[0].nome", label: "Alunos", sortable: true },
        { key: "actns", label: "Ações" }
      ]
    };
  },
  methods: {
    getProjetos() {
      axios
        .get(`${baseApiUrl}/projetoProfessor`)
        .then(res => {
          this.projects = res.data;
        })
        // .then(res => alert(res))
        // .then(res => {
        //   this.projects = res.data.map(projeto => {
        //     return { ...projeto, value: projeto.id, text: projeto.nome };
        //   });
        // })
        .catch(showError);
    }
  },
  mounted() {
    this.getProjetos();
  }
};
</script>

<style></style>
