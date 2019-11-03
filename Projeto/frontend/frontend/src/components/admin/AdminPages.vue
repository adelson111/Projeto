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
                        <ProjectsAdmin/>
                    </b-tab>
                    <b-tab title="Equipe">
                        <ToolsAdmin/>
                    </b-tab>
                    <b-tab title="Categoria">
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
import ProjectsAdmin from './ProjectsAdmin'
import ToolsAdmin from './ToolsAdmin'
export default {
    name: 'AdminPages',
    components: { PageTitle, CategoryAdmin, ProjectsAdmin, ToolsAdmin }
}
</script>

<style>
    
</style>