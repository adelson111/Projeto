<template>
  <div class="add-project">
    <b-form>
      <input type="hidden" id="project-id" v-model="id" />
      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Professor:" label-for="professor">
            <b-form-select v-model="project.id_professor" :options="teachers" id="professor"></b-form-select>
          </b-form-group>
        </b-col>
      </b-row>
      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Aluno:" label-for="aluno">
            <b-form-select v-model="project.id_aluno" :options="students" id="aluno"></b-form-select>
          </b-form-group>
        </b-col>
      </b-row>
      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Título:" label-for="project-name">
            <b-form-input
              id="project-name"
              v-model="project.nome"
              type="text"
              required
              placeholder="Informe o título do projeto..."
            ></b-form-input>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Campus:" label-for="project-location">
            <b-form-input
              id="project-location"
              v-model="project.campus"
              type="text"
              required
              placeholder="Informe o campus.."
            ></b-form-input>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="6" sm="12">
          <b-form-group label="Tipo:" label-for="project-type">
            <b-form-select v-model="project.tipo" :options="options" id="project-type"></b-form-select>
          </b-form-group>
        </b-col>
        <b-col md="6" sm="12">
          <b-form-group label="Área de Conhecimento:" label-for="project-location">
            <b-form-input
              id="project-location"
              v-model="project.areaConhecimento"
              type="text"
              required
              placeholder="Informe a área de conhecimento"
            ></b-form-input>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="6" sm="12">
          <b-form-group label="Data de Início:" label-for="project-start-date">
            <b-form-input
              id="project-start-date"
              v-model="project.dataInicio"
              type="date"
              required
              placeholder="Informe o tipo do projeto"
            ></b-form-input>
          </b-form-group>
        </b-col>
        <b-col md="6" sm="12">
          <b-form-group label="Data de Término:" label-for="project-end-date">
            <b-form-input
              id="project-end-date"
              v-model="project.dataTermino"
              type="date"
              required
              placeholder="Informe o tipo do projeto"
            ></b-form-input>
          </b-form-group>
        </b-col>
      </b-row>

      <hr />

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Resumo:" label-for="summary">
            <VueEditor
              id="summary"
              v-model="project.resumo"
              placeholder="Escreva aqui o resumo do projeto..."
              rows="3"
              max-rows="6"
            ></VueEditor>
          </b-form-group>
        </b-col>
      </b-row>
      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Resultado Alcançado:" label-for="resultadoAlcancado">
            <VueEditor
              id="resultadoAlcancado"
              v-model="project.resultadoAlcancado"
              placeholder="Escreva aqui o Resultado Alcançado..."
              rows="3"
              max-rows="6"
            ></VueEditor>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Introdução:" label-for="introduction">
            <VueEditor
              id="introduction"
              v-model="project.introducao"
              placeholder="Escreva aqui a introdução do projeto..."
              rows="3"
              max-rows="6"
            ></VueEditor>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Justificativa" label-for="justification">
            <VueEditor
              id="justification"
              v-model="project.justificativa"
              placeholder="Escreva aqui a justificativa do projeto..."
              rows="3"
              max-rows="6"
            ></VueEditor>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Fundamentação Teórica" label-for="theoretical-foundation">
            <VueEditor
              id="theoretical-foundation"
              v-model="project.fundamentacaoTeorica"
              placeholder="Escreva aqui a fundamentação teórica do projeto..."
              rows="3"
              max-rows="6"
            ></VueEditor>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Objetivo Geral" label-for="goal">
            <VueEditor
              id="goal"
              v-model="project.objetivoGeral"
              placeholder="Escreva aqui o objetivo geral do projeto..."
              rows="3"
              max-rows="6"
            ></VueEditor>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Metodologia" label-for="methodology">
            <VueEditor
              id="methodology"
              v-model="project.metodologia"
              placeholder="Escreva aqui a metodologia do projeto..."
              rows="3"
              max-rows="6"
            ></VueEditor>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Acompanhamento" label-for="executionTracking">
            <VueEditor
              id="executionTracking"
              v-model="project.acompanhamento"
              placeholder="Acompanhamento avaliativo do projeto..."
              rows="3"
              max-rows="6"
            ></VueEditor>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Acompanhamento de Execução do Projeto" label-for="executionTracking">
            <VueEditor
              id="executionTracking"
              v-model="project.metodologiaExecucaoProjeto"
              placeholder="Acompanhamento de execução do projeto..."
              rows="3"
              max-rows="6"
            ></VueEditor>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group
            label="Acompanhamento de Avaliação do Projeto"
            label-for="evaluationMonitoring"
          >
            <VueEditor
              id="evaluationMonitoring"
              v-model="project.acompanhamentoAvaliacaoProjeto"
              placeholder="Acompanhamento de avaliação do projeto..."
              rows="3"
              max-rows="6"
            ></VueEditor>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Reusltados Disseminação Esperado" label-for="expectedOutcome">
            <VueEditor
              id="expectedOutcome"
              v-model="project.resultadoDisseminacaoEsperado"
              placeholder="Escreva os resultados esperados do projeto..."
              rows="3"
              max-rows="6"
            />
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Reusltados Esperados" label-for="resultadoEsperado">
            <VueEditor
              id="resultadoEsperado"
              v-model="project.resultadoEsperado"
              placeholder="Escreva os resultados esperados do projeto..."
              rows="3"
              max-rows="6"
            />
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Observações" label-for="note">
            <VueEditor
              id="note"
              v-model="project.observacao"
              placeholder="Escreva observações sobre o projeto..."
              rows="3"
              max-rows="6"
            />
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="12" sm="12">
          <b-form-group label="Referências" label-for="reference">
            <VueEditor
              id="reference"
              v-model="project.referencia"
              placeholder="Escreva as referências do projeto..."
              rows="3"
              max-rows="6"
            />
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="6" sm="12">
          <b-form-group label="Anexar:" label-for="files">
            <b-form-file id="files" v-model="project.arquivos" type="file"></b-form-file>
          </b-form-group>
        </b-col>
        <b-col md="6" sm="12">
          <b-form-checkbox
            class="mt-5 mb-3"
            id="project-finish"
            v-model="project.finalizado"
          >Finalizado?</b-form-checkbox>
        </b-col>
      </b-row>

      <hr />

      <b-button variant="primary" v-if="mode === 'save'" @click="save">Salvar</b-button>

      <b-button variant="danger" v-if="mode === 'remove'" @click="remove">Excluir</b-button>

      <b-button class="ml-2" @click="reset">Cancelar</b-button>
    </b-form>
  </div>
</template>

<script>
import { showError } from "../../global";
import { baseApiUrl } from "../../global";
import axios from "axios";
import { VueEditor } from "vue2-editor";
export default {
  name: "AddProject",
  components: { VueEditor },
  data() {
    return {
      mode: "save",
      project: {},
      projects: [],
      teachers: [],
      students: [],
      selected: null,

      options: [
        { value: null, text: "Escolha uma opção" },
        { value: "pesquisa", text: "Projeto de Pesquisa" },
        { value: "extensao", text: "Projeto de Extensão" },
        { value: "tcc", text: " TCC" }
      ]
      //esses atributos vão vir do backend, deve ser substituido no v-model
      //   id: "",
      //   projectName: "",
      //   projectLocation: "",
      //   type: "",
      //   knowledgeArea: "",
      //   startDate: "",
      //   endDate: "",
      //   summary: "",
      //   introduction: "",
      //   justification: "",
      //   theoreticalFoundation: "",
      //   goal: "",
      //   methodology: "",
      //   executionTracking: "",
      //   evaluationMonitoring: "",
      //   expectedOutcome: "",
      //   reference: "",
      //   resultAchieved: "",
      //   expectedSpreadResult: "",
      //   note: "",
      //   files: [],
      //   teacher: "",
      //   students: [],
      //   relevance: "",
      //   suggestions: "",
      //   projectFinish: false
    };
  },

  methods: {
    async getAlunos() {
      await axios.get(`${baseApiUrl}/alunos`).then(
        res =>
          (this.students = res.data.map(student => {
            return {
              value: student.id,
              text: student.nome
            };
          }))
      );
    },
    getProfessores() {
      axios.get(`${baseApiUrl}/professor`).then(
        res =>
          (this.teachers = res.data.map(teacher => {
            return { value: teacher.id, text: teacher.nome };
          }))
      );
    },
    //     loadProjects(){
    //         const url = `${ baseApiUrl }/projects`
    //         axios.get(url).then(res=>{
    //             this.projects = res.data
    //         })
    //     }
    reset() {
      this.mode = "save";
      this.project = {};
      this.loadProjects;
    },
    save() {
      // const method = this.projeto.id ? 'put' : 'post'
      // const id = this.projeto.id ? `/${this.projeto.id}` : ''

      axios
        .post(`${baseApiUrl}/projeto`, JSON.stringify(this.project))
        .then(() => {
          this.$toasted.global.defaultSuccess();
          this.reset();
        })
        .catch(showError);
    }
    // remove(){
    //     const id = this.projeto.id
    //     axios.delete(`${ baseApiUrl }/projetos${id}`, this.projeto)
    //         .then(()=>{
    //             this.$toasted.global.defaultSuccess()
    //             this.reset()
    //         }).catch(showError)
    // }
  },
  mounted() {
    this.getAlunos();
    this.getProfessores();
    //     this.loadProjects()
  }
};
</script>

<style>
</style>