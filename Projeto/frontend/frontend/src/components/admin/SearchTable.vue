<template>
  <div class="tccs">
    <PageTitle icon="fa fa-file" main="Projetos de Pesquisa" sub="Meus Projetos" />

    <div>
      <b-table striped hover :items="projects" :fields="fields"></b-table>
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
        { key: "alunos[0].nome", label: "Orientando" }
      ]
    };
  },
  methods: {
    getProjetos() {
      axios
        .get(`${baseApiUrl}/projetoTipo/Projeto-de-Pesquisa`)
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
