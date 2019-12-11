<template>
  <div class="tccs">
    <PageTitle icon="fa fa-file" main="Trabalhos de Conclusão de Curso" sub="Meus Projetos" />

    <div>
      <b-table hover striped :items="projects" :fields="fields">
        <template v-slot:cell(action)="data">
          <b-button variant="warning" @click="loadArticle(data.item)" class="mr-2">
            <i class="fa fa-pencil"></i>
          </b-button>
        </template>
      </b-table>
    </div>
  </div>
</template>

<script>
import PageTitle from "../template/PageTitle";
import { baseApiUrl, showError } from "../../global";
import axios from "axios";
export default {
  components: { PageTitle },
  name: "TccsTable",
  data() {
    return {
      projects: {},
      fields: [
        { key: "nome", label: "Título" },
        { key: "professor[0].nome", label: "Orientador" },
        { key: "alunos[0].nome", label: "Orientando" },
        { key: "action", label: "Ação" }
      ]
    };
  },
  methods: {
    getProjetos() {
      axios
        .get(`${baseApiUrl}/projetoTipo/TCC`)
        .then(res => (this.projects = res.data))
        .catch(showError);
    }
  },
  mounted() {
    this.getProjetos();
  }
};
</script>

<style></style>
