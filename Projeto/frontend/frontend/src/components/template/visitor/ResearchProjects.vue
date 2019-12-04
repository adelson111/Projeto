<template>
    <div class="project-item">  
        <!-- <div class="header-content">
            <PageTitle icon="fa fa-file-o" main="Projetos de Pesquisa" ></PageTitle>
            <b-form-select v-model="selected" :options="options"></b-form-select>
        </div> -->
        <div>
            <b-navbar toggleable="lg" type="dark" variant="white">
                <h1>Projetos de Pesquisa</h1>

                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                <b-collapse id="nav-collapse" is-nav>

                <!-- Right aligned nav items -->
                <b-navbar-nav class="ml-auto">
                    <b-form-select v-model="selected" :options="options"></b-form-select>
                </b-navbar-nav>
                
                </b-collapse>
            </b-navbar>
        </div>

        <hr>
        
        <router-link to="/">
            <div class="item-image d-none d-sm-block">
                <img 
                    src="data:image/png;base64,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"
                    height="150px" width="150px"
                    >
            </div>
            <div class="project-info">
                <h2> {{ nomeProjeto}}</h2>
                <p> {{ descricao }} </p>
                <span>
                    <strong>Autor: </strong> {{ autor }}
                </span>
                <span>
                    <strong>Avaliação: </strong> {{ avaliacao }}
                </span>
            </div>
       </router-link>

       <hr>

       <div class="load-more">
           <button v-if="loadMore" class="btn btn-lg btn-outline-success">
               Carregar Mais
           </button>
       </div>
    </div>
</template>

<script>
// import PageTitle from '../../template/PageTitle'

export default {
    name: 'ResearchProjects',
    // components: { PageTitle },
    props: ['project'],
    data(){
        return{
            page: 1,
            loadMore: true,
            nomeProjeto: 'Flamengo',
            descricao: 'campeao brasileiro 2019',
            autor: 'Moisés',
            avaliacao: '4.2',
            selected: null,
            options: [
                { value: null, text: 'Organizar por:' },
                { value: 'avaliacao', text: 'Avaliação' },
                { value: 'recentes', text: 'Mais recentes' },
                { value: 'antigos', text: 'Mais Antigos' },
            ]
        }
    }
}
</script>

<style scoped>
    .load-more{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 25px;
    }
    .project-item{
        border-radius: 8px;
        padding-bottom: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
        background-color: #fff;
        width: 80%;
        padding: 20px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15)
    }

    .project-item a{
        display: flex;
        align-items: flex-start;
        text-decoration: none;
        color: black;
    }
    .project-info h2{
        font-size: 1.7rem;
    }

    .custom-select{
        width: 200px;
       
    }
    .item-image{
        padding-right: 20px;
        margin-right: 20px;
        border-right: 1px solid #aaa;
    }

    .item-image img{
        border-radius: 5px;
    }

    .project-info {
        display: flex;
        align-self: stretch;
        flex-direction: column;
    }

     .project-info p{
         flex: 1;
         color: #555;
         font-size: 1.1rem;
     }
</style>