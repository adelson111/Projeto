<template>
    <div class="project-item">  
        
        <div>
            <b-navbar toggleable="lg" type="dark" variant="white">
                <h1>TCC's</h1>

                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                <b-collapse id="nav-collapse" is-nav>

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
                    src="https://lh3.googleusercontent.com/3zN1l43Toz5wJyg2T1j6qlHvKM8XWPQChYcz_LqsmZEvyt2JdDtp1L4zX0aEgroQCnl0=w412-h220-rw"
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
    name: 'Tccs',
    // components: { PageTitle },
    props: ['project'],
    data(){
        return{
            page: 1,
            loadMore: true,
            nomeProjeto: 'Ficando rico jogando Free Fire',
            descricao: 'Chegue toda semana na sala com um relógio e um par de tênis diferente',
            autor: 'André Jiva',
            avaliacao: '3.1',
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
        margin-bottom: 20px;
        background-color: #fff;
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