<template>
  <router-link :to="{name: 'researchProjectById', params:{id: project.id}}">
    <div class="item-image d-none d-sm-block">
      <img
        v-if="project.arquivos.lenght>=0"
        :src="project.arquivos"
        height="150px"
        width="150px"
        alt="Imagem"
      />
      <img src="@/assets/logo.png" height="150px" width="150px" alt="Imagem" />
    </div>
    <div class="project-info">
      <h2>{{ project.nome}}</h2>
      <p>{{ project.resumo }}</p>
      <span v-if="project.alunos[0]">
        <strong>Autor:</strong>
        <p>{{ project.alunos[0].nome }}</p>
      </span>
      <span>
        <strong>Professor:</strong>
        {{ project.professor[0].nome }}
      </span>
    </div>
  </router-link>
</template>

<script>
export default {
  name: "ProjetoItem",
  props: ["project"]
};
</script>

<style>
.project-info h2 {
  font-size: 1.7rem;
}
.project-info {
  display: flex;
  align-self: stretch;
  flex-direction: column;
}

.project-info p {
  flex: 1;
  color: #555;
  font-size: 1.1rem;
}
.item-image {
  padding-right: 20px;
  margin-right: 20px;
  border-right: 1px solid #aaa;
}

.item-image img {
  border-radius: 5px;
}
</style>