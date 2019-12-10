<template>
    <div class="admin-pages">
        <PageTitle 
            icon="fa fa-cogs"
            main="Administração do Sistema"
            sub="Cadastro de Projetos"
        />
        <div class="admin-pages-tabs">
            <b-card no-body>
                <b-tabs card>
                    <b-tab title="Cadastrar Projeto" active>
                        <AddProject/>
                    </b-tab>
                    <b-tab title="Projetos">
                        <CategoryAdmin/>
                    </b-tab>
                </b-tabs>
            </b-card>
        </div>
    </div>
</template>

<script>
import PageTitle from '../template/PageTitle'
import CategoryAdmin from './CategoryAdmin'
import AddProject from './AddProject'

export default {
    name: 'AdminPages',
    components: { PageTitle, CategoryAdmin, AddProject }
}
</script>

<style>
    .card-header ul li a{
        color: black
    }
</style>