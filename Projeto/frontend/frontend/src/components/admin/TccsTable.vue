<template>
  <div class="tccs">
    <PageTitle icon="fa fa-file" main="Trabalhos de Conclusão de Curso" sub="Meus Projetos" />

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
        // { Título: 'Sei n', Orientador: 'Fábio Penha', Orientando: 'Kaio' },
        { key: "nome", label: "Título" },
        { key: "professor[0].nome", label: "Orientador" },
        { key: "alunos[0].nome", label: "Orientando" }
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
