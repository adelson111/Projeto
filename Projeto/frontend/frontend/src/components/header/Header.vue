<template>
    <div class="container1">
        <div class="container">
            <b-navbar toggleable="lg" type="dark">
                <img :src="image" class="logo">
                <b-collapse id="nav-collapse" is-nav>
                    <b-navbar-nav class="ml-auto">
                        <b-nav-form class="busca">
                            <b-form-input size="sm" class="mr-sm-2"   placeholder="Título, aluno, professor, área de conhecimento"></b-form-input>
                            <b-button size="sm" class="my-2 my-sm-0" type="submit">Buscar</b-button>
                        </b-nav-form>
                    </b-navbar-nav>
                </b-collapse>
            </b-navbar>
            <div class="components">
                <inferior-menu/>
            </div>
        </div>
    </div>
</template>

<script>

import InferiorMenu from './InferiorMenu.vue'
import logo from '../../assets/if.png';
export default {
    data(){
        return{
            image: logo,
        }
    },
    components: { InferiorMenu },
}
</script>

<style scoped>
    .container1 {
        background-color: #24B22a;
        color: #fff;
        padding: 10px;
        height: 120px;
        width: 100%;
    }
    .logo{
        width: 40px;
        height: 40px;
    }
</style>