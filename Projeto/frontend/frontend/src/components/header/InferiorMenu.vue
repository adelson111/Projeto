<template>
    <div class="container">
         <b-nav class="projetos">
            <b-nav-item active class="titulo">Projetos</b-nav-item>
            
        </b-nav>
        <b-nav class="itens">
            <b-nav-item active>Home</b-nav-item>
            <b-nav-item>Pesquisas</b-nav-item>
            <b-nav-item>Projetos de Extensão</b-nav-item>
            <b-nav-item >Trabalhos de Conclusão de Curso</b-nav-item>
            <b-nav-item >Sobre</b-nav-item>
        </b-nav>
    </div>
</template>
<script>

export default {
    
}
</script>
<style >
   .itens{
       float: right;
      padding-left: 80px;
   }
   .projetos{
       float: left;
   }
   a{
       color: aliceblue
   }
   
</style>