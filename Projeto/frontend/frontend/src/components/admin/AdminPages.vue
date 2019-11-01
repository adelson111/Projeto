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
                    <b-tab title="Projetos" active>
                        <h1>Projetos</h1>
                    </b-tab>
                    <b-tab title="Equipe">
                        <h1>Equipe</h1>
                    </b-tab>
                    <b-tab title="Categoria">
                        <h1>Categoria</h1>
                    </b-tab>
                </b-tabs>
            </b-card>
        </div>
    </div>
</template>

<script>
import PageTitle from '../template/PageTitle'
export default {
    name: 'AdminPages',
    components: { PageTitle }
}
</script>

<style>
    
</style>