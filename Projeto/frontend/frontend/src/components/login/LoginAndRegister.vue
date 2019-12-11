<template>
    <div class="auth-content">
       <div class="auth-modal">
           <!-- <img 
                src="https://abrilguiadoestudante.files.wordpress.com/2017/06/materiais_mesa_estudos.jpg?quality=100&strip=info&w=650&h=446" 
                width="200"
            > -->
            
            <div class="auth-title">
                {{ showSignup ? 'Cadastro' : 'Login '}}
            </div>
            <hr>
            <input v-if="showSignup" type="email" placeholder="E-mail">
            <input v-else type="email" placeholder="E-mail">
            <input v-if="!showSignup" type="password" placeholder="Senha">

            <button v-if="showSignup">Cadastrar-se</button>
            <button v-else >Entrar</button>

            <a href @click.prevent="showSignup = !showSignup">
                <span v-if="showSignup">Já é cadastrado? Acesse o Login</span> 
                <span v-else>Não tem Cadastro? Registre-se aqui! </span>
            </a>
            
       </div>
    </div>
</template>

<script>
export default {
    name: 'LoginAndRegister',
    data(){
        return{
            showSignup: false,
        }
    }
}
</script>

<style scoped>
    .auth-content{
        margin-top: 20px;
        margin-bottom: 20px;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .auth-modal{
       background-color: #FCFCFC;
       width: 350px;
       padding: 35px;
       box-shadow:  01px 5px rgba(0, 0, 0, 0.15);

       display: flex;
       flex-direction: column;
       align-items: center;
    }

    .auth-title{
        font-size: 1.2rem;
        font-weight: 100;
        margin-top: 10px;
        margin-bottom: 15px;
    }

    .auth-modal input{
        border: 1px solid #bbb;
        width: 100%;
        margin-bottom: 15px;
        padding: 3px 8px;
        outline: none;
    }
    .auth-modal button{
        align-self: flex-end;
        background-color: #24B22A;
        color: #fff;
        padding: 5px 15px;
    }
    .auth-modal a{
         margin-top: 35px;
    }

    .auth-modal hr{
        border: 0;
        width: 100%;
        height: 1px;
        background-image: linear-gradient(to right, 
        rbga(120, 120, 120, 0)
        rbga(120, 120, 120, 0.75)
        rbga(120, 120, 120, 0))
    }
</style>