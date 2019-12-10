<template>
    <div class="data-user">
        <b-form>

            <input type="hidden" id="teacher-id" >
           
            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Nome:" label-for="nome"  >
                        <b-form-input id="teacher-name" type="text" v-model="professor.nome" :placeholder="professor.nome" >

                        </b-form-input>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="6" sm="12">
                    <b-form-group label="Matrícula:" label-for="registration"  >
                        <b-form-input id="registration" type="text">

                        </b-form-input>
                    </b-form-group>
                </b-col>
                <b-col md="6" sm="12">
                    <b-form-group label="Área de Atuação:"  label-for="occupation-area">
                        <b-form-input id="occupation-area">

                        </b-form-input>
                    </b-form-group>
                </b-col>
            </b-row>
         
            <b-row>
                <b-col md="6" sm="12">
                    <b-form-group label="CPF:" label-for="cpf"  >
                          <b-form-input id="cpf"></b-form-input>
                    </b-form-group>
                </b-col>
                 <b-col md="6" sm="12">
                    <b-form-group label="E-mail:" label-for="email"  >
                        <b-form-input id="email" type="email">

                        </b-form-input>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="6" sm="12">
                    <b-form-group label="E-mail:" label-for="email"  >
                        <b-form-input id="email" type="email">

                        </b-form-input>
                    </b-form-group>
                </b-col>
                <b-col md="6" sm="12">
                    <b-form-group label="Currículo Lattes:"  label-for="lattes">
                        <b-form-input id="lattes" >

                        </b-form-input>
                    </b-form-group>
                </b-col>
            </b-row>
            
            <b-row>
                <b-col md="6" sm="12">
                    <b-form-group label="Senha:" label-for="password"  >
                        <b-form-input id="password" >

                        </b-form-input>
                    </b-form-group>
                </b-col>
                <b-col md="6" sm="12">
                    <b-form-group label="Confirmar Senha:"  label-for="password">
                        <b-form-input id="password2" type="password">

                        </b-form-input>
                    </b-form-group>
                </b-col>
            </b-row>
    
            <hr>

            <b-button 
                variant="primary"             
                
            >Salvar</b-button>

            <b-button
                variant="info"
                class="ml-2"
                
            >Editar</b-button>

            <b-button
                class="ml-2"
                
            >Cancelar</b-button>

        </b-form>
    </div>
</template>

<script>
import axios from 'axios'
import { baseApiUrl } from '../../global'

export default {
    name: 'DataUser',
    data(){
        return {
            professor: {},
            professores: [],
        }
    },
    methods: {
        loadTeacher(){       
            const url = `${baseApiUrl}/projeto`
            axios.get(url).then(res =>{         
                this.professor = res.data 
            })
        }
    },
    mounted() {
        this.loadTeacher()
    },

}
</script>

<style>
    
</style>