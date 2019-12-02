<template>
    <div class="informations">
        <b-jumbotron>
            <template v-slot:header>Sobre o Sistema</template>

            <template v-slot:lead>
            <p>
                O Sistema de Divulgação e Gerenciamento de Projetos Acadêmicos (SDGPA) busca divulgar <br>
                os projetos desenvolvidos por professores e alunos do Instituto Federal de Educação, Ciência <br>
                e Tecnologia do Rio Grande do Norte.
            </p>
            </template>

            <hr class="my-4">

            <p>
            Desenvolvido por alunos da turma de TADS6V
            </p>

        </b-jumbotron>
    </div>
</template>

<script>
export default {
    name: 'Informations',
}
</script>

<style scoped>
    
    .jumbotron{
        text-align: justify;
        margin-top: 20px;
    }
</style>