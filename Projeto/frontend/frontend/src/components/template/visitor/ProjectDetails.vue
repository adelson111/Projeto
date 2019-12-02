<template>
    <div class="project-details">
        <b-container class="bv-example-row">
            <b-row>
                <b-col>col</b-col>
                <b-col>col</b-col>
                <b-col>col</b-col>
                <b-col>col</b-col>
            </b-row>
        </b-container>
    </div>
</template> 
<script>

export default {
    name: 'ProjectDetails'
}
</script>

<style scoped>
    .project-details{
        width: 100vw;
        height: 300px;
        background-color: #fff;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 40px;
        background-color: #D5F2C9;
    }
    .container { 
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        width: 100%;
    }
    .relevant-projects {
    background: orangered;
        width: 100%
    }
    .green {
    background: yellowgreen;
    }
    .container > div {
        font-size: 5vw;
        padding: .5em;
        color: white;
        width: 80%;
    }
</style>