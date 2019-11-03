<template>
    <div class="user">
        <PageTitle 
            icon="fa fa-user" 
            main="Perfil"
            sub="Dados do Usuário"
        />
        <div class="user-pages-tabs">
            <b-card no-body>
                <b-tabs card>
                    <b-tab title="Dados Pessoais" active>
                        <DataUser/>
                    </b-tab>
                    <b-tab title="Dados de Contato">
                        <ContactDataUser/>
                    </b-tab>
                    <b-tab title="Dados de Endereço">
                        <AddressDataUser/>
                    </b-tab>
                </b-tabs>
            </b-card>
        </div>
    </div>
</template>

<script>
import PageTitle from '../template/PageTitle'
import AddressDataUser from './AddressDataUser'
import ContactDataUser from './ContactDataUser'
import DataUser from './DataUser'
export default {
    name: 'User',
    components: { PageTitle, AddressDataUser, ContactDataUser, DataUser }
}
</script>

<style >
    
</style>