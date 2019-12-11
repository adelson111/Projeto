<template>
  <div class="data-user">
    <b-form>
      <input type="hidden" id="teacher-id" />

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Nome:" label-for="nome">
            <b-form-input
              id="teacher-name"
              type="text"
              v-model="professor.nome"
              :placeholder="professor.nome"
              :readonly="mode==='block'"
            ></b-form-input>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="6" sm="12">
          <b-form-group label="Matrícula:" label-for="registration">
            <b-form-input
              id="registration"
              v-model="professor.matricula"
              type="text"
              :readonly="mode==='block'"
            ></b-form-input>
          </b-form-group>
        </b-col>
        <b-col md="6" sm="12">
          <b-form-group label="Área de Atuação:" label-for="occupation-area">
            <b-form-input
              id="occupation-area"
              v-model="professor.areaAtuacao"
              type="text"
              :readonly="mode==='block'"
            ></b-form-input>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="6" sm="12">
          <b-form-group label="CPF:" label-for="cpf">
            <b-form-input id="cpf" v-model="professor.cpf" type="text" :readonly="mode==='block'"></b-form-input>
          </b-form-group>
        </b-col>
        <b-col md="6" sm="12">
          <b-form-group label="E-mail:" label-for="email">
            <b-form-input id="email" type="email" v-model="professor.usuario" readonly="true"></b-form-input>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="6" sm="12">
          <b-form-group label="Currículo Lattes:" label-for="lattes">
            <b-form-input
              id="lattes"
              type="text"
              v-model="professor.curriculoLatte"
              :readonly="mode==='block'"
            ></b-form-input>
          </b-form-group>
        </b-col>
      </b-row>

      <!-- <b-row>
        <b-col md="6" sm="12">
          <b-form-group label="Senha:" label-for="password">
            <b-form-input id="password"></b-form-input>
          </b-form-group>
        </b-col>
        <b-col md="6" sm="12">
          <b-form-group label="Confirmar Senha:" label-for="password">
            <b-form-input id="password2" type="password"></b-form-input>
          </b-form-group>
        </b-col>
      </b-row>-->

      <hr />

      <b-button variant="primary" @click="save">Salvar</b-button>

      <b-button variant="info" @click="editar" class="ml-2">Editar</b-button>

      <b-button class="ml-2" @click="cancelar">Cancelar</b-button>
    </b-form>
  </div>
</template>

<script>
import axios from "axios";
import { baseApiUrl } from "../../global";

export default {
  name: "DataUser",
  data() {
    return {
      mode: "block",
      professor: {},
      professores: []
    };
  },
  methods: {
    editar() {
      this.mode = "editar";
    },
    cancelar() {
      this.mode = "block";
    },
    save() {
      const id = this.professor.id;
      axios
        .put(
          `${baseApiUrl}/professor/${id}`,
          this.professor,
          { headers: { "Content-Type": "application/json" } }

          // {
          //   nome: this.professor.nome,
          //   email: this.professor.usuario,
          //   senha: this.professor.senha,
          //   cpf: this.professor.cpf,
          //   matricula: this.professor.matricula,
          //   foto: this.professor.foto,
          //   areaAtuacao: this.professor.areaAtuacao,
          //   curriculoLatte: this.professor.curriculoLatte
          // }
        )
        .then(this.$toasted.global.defaultSuccess(), this.cancelar());
    },
    loadTeacher() {
      const url = `${baseApiUrl}/professor/3`;
      axios.get(url).then(res => {
        this.professor = res.data;
      });
    }
  },
  mounted() {
    this.loadTeacher();
  }
};
</script>

<style></style>
