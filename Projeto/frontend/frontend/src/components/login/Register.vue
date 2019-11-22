<template>
    <div class="register">
        <div class="title-register">
            <h3>Cadastro de Usuário (Professor/Aluno)</h3>
        </div>
        <hr>
        <b-row>
            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Nome:" label-for="name" >
                        <b-form-input id="name" type="text" required placeholder="Informe seu nome copleto...">

                        </b-form-input>
                    </b-form-group>
                </b-col>
            </b-row>
        </b-row>

        <hr>
        <b-table hover striped :items="projects" :fields="fields">
            <template>
                <b-button variant="danger">
                    <i class="fa fa-trash"></i>
                </b-button>
            </template>
        </b-table>
    </div>
</template>

<script>
export default {
    name: 'Register',
    data(){
        return{

        }
    }
}
</script>

<style scoped>
    .title-register{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .register{
        background-color: #EFF7F0;
        width: 1080px;
        
        box-shadow:  01px 5px rgba(0, 0, 0, 0.15);
        padding: 35px;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
</style>