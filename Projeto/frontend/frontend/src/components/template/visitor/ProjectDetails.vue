<template>
    <div class="project-details">    
        <div class="conteudo">
            <h4>Projetos Relevantes</h4>
            
            <div class="relevantes">
                
                <div class="video">
                    <h5>Projeto da Maconha</h5>
                    <iframe width="100%" height="90%" src="https://www.youtube.com/embed/qNHMw6oWXAw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="video">
                    <h5>Projeto da Maconha</h5>
                    <iframe width="100%" height="90%" src="https://www.youtube.com/embed/fp9c3d7Gy9o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

            </div>
        </div>

        <aside>
            <div class="galeria">
                <h4>Galeria de Fotos</h4>

                <router-link to="/" >
                    <img src="https://pbs.twimg.com/media/DqXJxDhWsAIlk_c.jpg" height="93" width="93">
                </router-link> 
                <router-link to="/">
                    <img src="https://cdn4.buysellads.net/uu/1/41312/1545083324-1539370929-mailchimp-Yellow-260x200.png" height="93" width="93">
                </router-link>
                <router-link to="/">
                    <img src="https://cdn.comprerural.com/wp-content/uploads/2018/05/javaporco-porco-javali-640x366.jpg" height="93" width="93">
                </router-link>
                <router-link to="/">
                    <img src="https://img.r7.com/images/gabigol-23112019210200780?dimensions=660x360" height="93" width="93">
                </router-link>
            </div>
        </aside>
    </div>
</template> 
<script>

export default {
    name: 'ProjectDetails',
}
</script>

<style scoped>
    .project-details {
        width: 100%;
        height: 400px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        background-color: #D5F2C9;
        padding: 20px
        
    }

    .relevantes{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center
    }

    .video{
        padding: 20px;
        margin: 0;
    }
    .conteudo{
        width: 70%;
        height: 97%;
        margin-right: 15px;
        background-color:#24B22A;
    }

    aside {
        width: 30%;
        background-color:#24B22A;
        padding-bottom: 30px;
        margin-right: 15px;
    }

    h4{
        color: #fff;
        padding-bottom: 3px;
        margin-bottom: 0; 
        margin-top: 10px;
        margin-bottom: 0;
        text-align: center
    }

    h5{
        padding-top: 0;
        margin-top: 0;
        color: #000;
        text-align: center;
    }

    hr{
        margin-top: 0;
    }

    .galeria{
        padding: 0 25px 0 25px;
    }

    .galeria a{
        background: url(../../../assets/fundo-foto.png) no-repeat;
        display: block;
        float: left;
        padding: 17px 15px 17px 15px;
        margin: 10px 0 0 20px;
    }

    .galeria img{
        margin-left: 2px;
        margin-top: 3px;
    }
</style>