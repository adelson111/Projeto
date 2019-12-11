<template>
  <div class="tccs">
    <PageTitle 
      icon="fa fa-file"
      main="Trabalhos de Conclusão de Curso"
      sub="Meus Projetos"
    />

    <div>
      <b-table striped hover :items="items"></b-table>
    </div>
  </div>
</template>

<script>
import PageTitle from '../template/PageTitle'
export default {
  components:{ PageTitle },
  name: "TccsTable",
  data() {
    return {
      items: [
          { Título: 'Sei n', Orientador: 'Fábio Penha', Orientando: 'Kaio' },
        ]
    }
    }
};
</script>

<style></style>
