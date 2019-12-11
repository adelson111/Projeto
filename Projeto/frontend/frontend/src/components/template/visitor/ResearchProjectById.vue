<template>
    <div class="project-by-id">
        <PageTitle 
            icon="fa fa-file-o" 
            :main="projeto.nome" 
            :sub="projeto.campus" 
        />

        <div class="project-content" v-html="project-content" >
          <div class="resumo">
            <p>{{projeto.resumo}}</p>
          </div>
        </div>
        <div class="fb-comments" 
            :data-href="url+this.$route.params.id" 
            data-width="" 
            data-numposts="5"
            data-show-faces="true"></div>
        <br>
        <div class="fb-like" 
            :data-href="url+this.$route.params.id"  
            data-width="" 
            data-layout="button_count" 
            data-action="like" 
            data-size="large" 
            data-share="false"></div>
    </div>
</template>

<script>
import { baseApiUrl } from "../../../global";
import axios from "axios";
import PageTitle from "../PageTitle";
export default {
  name: "ResearchProjectById",
  components: { PageTitle },
  data: function() {
    return {
      project: {},
      url: "http://localhost:8080/projetos/", 
      projeto: {
          "id": 2,
          "nome": "Projeto 33XXX",
          "tipo": "Tipo 2",
          "finalizado": false,
          "campus": "IFRN - NC",
          "dataInicio": {
            "date": "2019-10-10 00:00:00.000000",
            "timezone_type": 3,
            "timezone": "America Sao_Paulo"
          },
          "dataTermino": {
            "date": "2020-06-12 00:00:00.000000",
            "timezone_type": 3,
            "timezone": "America Sao_Paulo"
          },
          "areaConhecimento": "Area de Conhecimento 2",
          "resumo": "Vai da merdamerdamerdamerdamerdamerdamerda ",
          "introducao": "Introdução 2",
          "justificativa": "Justificativa 2",
          "fundamentacaoTeorica": "Fundamentação Teórica 2",
          "objetivoGeral": "Objetivos gerais",
          "metodologiaExecucaoProjeto": "Metodologia 2",
          "acompanhamentoAvaliacaoProjeto": "Acompanhamento 2",
          "resultadoEsperado": "Vai da certo",
          "referancia": "ref45955",
          "professor": [
            {
              "id": 4,
              "nome": "Professor33 ",
              "cpf": "111222332",
              "matricula": "20156655",
              "areaAtuacao": "A1",
              "curriculoLatte": "cur1",
              "usuario": "professor34@gmail.com"
            }
          ],
          "alunos": [
            {
              "id": 3,
              "nome": "Aluno 122",
              "cpf": "111222333",
              "matricula": "20151133534",
              "curso": "TADS",
              "curriculoLatte": "cur3"
            }
          ],
          "arquivos": [],
          "resultadoAlcancado": "Nunca funciona de primeria",
          "resultadoDisseminacaoEsperado": "Eu falei que ia da merda",
          "observacao": "Observações",
          "relevancias": {},
          "sugestao": false
        }
    };
  },
  methods: {
    getProjeto() {
      axios
        .get(`${baseApiUrl}/projeto/${this.$route.params.id}`)
        .then(res => (this.project = res.data));
    }
  },
  mounted() {
    this.getProjeto();
  }
};
</script>

<style scoped>
.project-by-id {
  width: 80%;
  border-radius: 8px;
  margin-bottom: 20px;
  flex-direction: column;
  margin-top: 20px;
  background-color: #fff;
  padding: 20px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
}

.resumo{
  width: 80%;
}
.project-content {
  background-color: #fff;
  border-radius: 8px;
  padding: 25px;
}

.project-content pre {
  padding: 20px;
  border-radius: 8px;
  font-size: 1.2rem;
}

.project-content img {
  max-width: 100%;
}

.project-content :last-child {
  margin-bottom: 0px;
}
.project-by-id {
  padding: 20px;
}

.svg {
  width: 100%;
}
</style>