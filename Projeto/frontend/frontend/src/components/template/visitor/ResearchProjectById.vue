<template>
  <div class="project-by-id">
    <PageTitle icon="fa fa-file-o" :main="project.nome" :sub="project.resumo" />
    <div class="project-content" v-html="project-content"></div>
  </div>
</template>

<script>
import { baseApiUrl } from "../../../global";
import axios from "axios";
import PageTitle from "../PageTitle";
export default {
  name: "ResearchProjectById",
  components: { PageTitle },
  data: function() {
    return {
      project: {}
    };
  },
  methods: {
    getProjeto() {
      axios
        .get(`${baseApiUrl}/projeto/${this.$route.params.id}`)
        .then(res => (this.project = res.data));
    }
  },
  mounted() {
    this.getProjeto();
  }
};
</script>

<style scoped>
.project-by-id {
  width: 80%;
  border-radius: 8px;
  margin-bottom: 20px;
  background-color: #fff;
  padding: 20px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
}
.project-content {
  background-color: #fff;
  border-radius: 8px;
  padding: 25px;
}

.project-content pre {
  padding: 20px;
  border-radius: 8px;
  font-size: 1.2rem;
}

.project-content img {
  max-width: 100%;
}

.project-content :last-child {
  margin-bottom: 0px;
}
.project-by-id {
  padding: 20px;
}
</style>