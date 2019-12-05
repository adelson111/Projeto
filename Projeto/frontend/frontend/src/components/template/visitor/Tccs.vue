<template>
  <div class="project-item">
    <div>
      <b-navbar toggleable="lg" type="dark" variant="white">
        <h1>TCC's</h1>

        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

        <b-collapse id="nav-collapse" is-nav>
          <b-navbar-nav class="ml-auto">
            <b-form-select v-model="selected" :options="options"></b-form-select>
          </b-navbar-nav>
        </b-collapse>
      </b-navbar>
    </div>

    <hr />
    <ul>
      <li v-for="project in projects" :key="project.id">
        <ProjetoItem :project="project" />
      </li>
    </ul>

    <hr />

    <div class="load-more">
      <button v-if="loadMore" class="btn btn-lg btn-outline-success">Carregar Mais</button>
    </div>
  </div>
</template>

<script>
// import PageTitle from '../../template/PageTitle'
import { baseApiUrl } from "../../../global";
import axios from "axios";
import ProjetoItem from "./ProjetoItem";
export default {
  name: "Tccs",
  components: { ProjetoItem },
  props: ["project"],
  data() {
    return {
      projects: {},
      proj: [],
      page: 1,
      loadMore: true,
      //   nomeProjeto: "Ficando rico jogando Free Fire",
      //   descricao:
      //     "Chegue toda semana na sala com um relógio e um par de tênis diferente",
      //   autor: "André Jiva",
      //   avaliacao: "3.1",
      selected: null,
      options: [
        { value: null, text: "Organizar por:" },
        { value: "avaliacao", text: "Avaliação" },
        { value: "recentes", text: "Mais recentes" },
        { value: "antigos", text: "Mais Antigos" }
      ]
    };
  },
  methods: {
    getProjetos() {
      axios
        .get(`${baseApiUrl}/projetoTipo/TCC`)
        .then(res => (this.projects = res.data));
    }
  },
  mounted() {
    this.getProjetos();
  }
};
</script>

<style scoped>
.load-more {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 25px;
}
.project-item {
  width: 80%;
  border-radius: 8px;
  margin-top: 20px;
  background-color: #fff;
  padding: 20px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
}

.project-item a {
  display: flex;
  align-items: flex-start;
  text-decoration: none;
  color: black;
}

.custom-select {
  width: 200px;
}
.project-item ul {
  list-style: none;
}
.project-item li {
  margin-top: 20px;
}
</style>