<template>
  <div class="tccs">
    <PageTitle 
      icon="fa fa-file"
      main="Projetos de Pesquisa"
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
          { Título: 'Vixe', Orientador: 'Lucas', Orientando: 'Jiva' },
        ]
    }
    }
};
</script>

<style></style>
