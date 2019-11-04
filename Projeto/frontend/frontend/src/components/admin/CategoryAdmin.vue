<template>
    <div class="category-admin">
        <b-table hover striped :items="projects" :fields="fields">

        </b-table>
    </div>
</template>

<script>

export default {
    name: 'CategoryAdmin',
        data(){
            return{
                fields: [
                    { key: 'id', label: 'ID', sortable: true},
                    { key: 'Nome', label: 'Título', sortable: true},
                    { key: 'professor', label: 'Professor Responsável', sortable: true},
                    { key: 'acoes', label: 'Ações'}
                ]
            }
    },

}
</script>

<style>
    
</style>