<template>
    <div class="add-project">
        <b-form>

            <input type="hidden" id="project-id" v-model="id">
           
            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Título:" label-for="project-name" >
                        <b-form-input id="project-name" v-model="projectName" type="text" required placeholder="Informe o título do projeto...">

                        </b-form-input>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Campus:" label-for="project-location" >
                        <b-form-input id="project-location" v-model="projectLocation" type="text" required placeholder="Informe o campus..">

                        </b-form-input>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="6" sm="12">
                    <b-form-group label="Tipo:" label-for="project-type"  >
                        <b-form-input id="project-type" type="text" v-model="type" required placeholder="Informe o tipo do projeto">

                        </b-form-input>
                    </b-form-group>
                </b-col>
                <b-col md="6" sm="12">
                    <b-form-group label="Área de Conhecimento:"  label-for="project-location">
                        <b-form-input id="project-location" v-model="knowledgeArea" type="text" required placeholder="Informe a área de conhecimento">

                        </b-form-input>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="6" sm="12">
                    <b-form-group label="Data de Início:" label-for="project-start-date" >
                        <b-form-input id="project-start-date" v-model="startDate" type="date" required placeholder="Informe o tipo do projeto">

                        </b-form-input>
                    </b-form-group>
                </b-col>
                <b-col md="6" sm="12">
                    <b-form-group label="Data de Término:" label-for="project-end-date" >
                        <b-form-input id="project-end-date" v-model="endDate" type="date" required placeholder="Informe o tipo do projeto">

                        </b-form-input>
                    </b-form-group>
                </b-col>
            </b-row>

            <hr>

            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Resumo:" label-for="summary">
                        <b-form-textarea
                            id="summary"   
                            v-model="summary"                         
                            placeholder="Escreva aqui o resumo do projeto..."
                            rows="3"
                            max-rows="6"
                            ></b-form-textarea>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Introdução:" label-for="introduction">
                        <b-form-textarea
                            id="introduction"    
                            v-model="introduction"                        
                            placeholder="Escreva aqui a introdução do projeto..."
                            rows="3"
                            max-rows="6"
                            ></b-form-textarea>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Justificativa" label-for="justification">
                        <b-form-textarea
                            id="justification"    
                            v-model="justification"                        
                            placeholder="Escreva aqui a justificativa do projeto..."
                            rows="3"
                            max-rows="6"
                            ></b-form-textarea>
                    </b-form-group>
                </b-col>
            </b-row>

             <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Fundamentação Teórica" label-for="theoretical-foundation">
                        <b-form-textarea
                            id="theoretical-foundation"    
                            v-model="theoreticalFoundation"                        
                            placeholder="Escreva aqui a fundamentação teórica do projeto..."
                            rows="3"
                            max-rows="6"
                            ></b-form-textarea>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Objetivo Geral" label-for="goal" >
                        <b-form-textarea
                            id="goal"    
                            v-model="goal"                        
                            placeholder="Escreva aqui o objetivo geral do projeto..."
                            rows="3"
                            max-rows="6"
                            ></b-form-textarea>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Metodologia" label-for="methodology" >
                        <b-form-textarea
                            id="methodology"    
                            v-model="methodology"                        
                            placeholder="Escreva aqui a metodologia do projeto..."
                            rows="3"
                            max-rows="6"
                            ></b-form-textarea>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Acompanhamento" label-for="executionTracking" >
                        <b-form-textarea
                            id="executionTracking"    
                            v-model="executionTracking"                        
                            placeholder="Acompanhamento avaliativo do projeto..."
                            rows="3"
                            max-rows="6"
                            ></b-form-textarea>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Acompanhamento de Execução do Projeto" label-for="executionTracking" >
                        <b-form-textarea
                            id="executionTracking"    
                            v-model="executionTracking"                        
                            placeholder="Acompanhamento de execução do projeto..."
                            rows="3"
                            max-rows="6"
                            ></b-form-textarea>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Acompanhamento de Avaliação do Projeto" label-for="evaluationMonitoring" >
                        <b-form-textarea
                            id="evaluationMonitoring"    
                            v-model="evaluationMonitoring"                        
                            placeholder="Acompanhamento de avaliação do projeto..."
                            rows="3"
                            max-rows="6"
                            ></b-form-textarea>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Reusltados Esperados" label-for="expectedOutcome" >
                        <b-form-textarea
                            id="expectedOutcome"    
                            v-model="expectedOutcome"                        
                            placeholder="Escreva os resultados esperados do projeto..."
                            rows="3"
                            max-rows="6"
                            ></b-form-textarea>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Observações" label-for="note" >
                        <b-form-textarea
                            id="note"    
                            v-model="note"                        
                            placeholder="Escreva observações sobre o projeto..."
                            rows="3"
                            max-rows="6"
                            ></b-form-textarea>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="12" sm="12">
                    <b-form-group label="Referências" label-for="reference" >
                        <b-form-textarea
                            id="reference"    
                            v-model="reference"                        
                            placeholder="Escreva as referências do projeto..."
                            rows="3"
                            max-rows="6"
                            ></b-form-textarea>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col md="6" sm="12">
                    <b-form-group label="Anexar:" label-for="files" >
                        <b-form-input id="files" v-model="files" type="file">

                        </b-form-input>
                    </b-form-group>
                </b-col>
            </b-row>
        </b-form>
    </div>
</template>

<script>

export default {
    name: 'AddProject',
    data(){
        return {
            id: '',
            projectName: '',
            projectLocation: '',
            type: '',
            knowledgeArea: '',
            startDate: '',
            endDate: '',
            summary : '',
            introduction: '',
            justification: '',
            theoreticalFoundation: '',
            goal: '',
            methodology: '',
            executionTracking: '',
            evaluationMonitoring: '',
            expectedOutcome: '',
            reference: '',
            resultAchieved: '',
            expectedSpreadResult: '',
            note: '',
            files: [],
            teacher: '',
            students: [],
            relevance: '',
            suggestions: '',
        }
    }
}
</script>

<style>
    
</style>