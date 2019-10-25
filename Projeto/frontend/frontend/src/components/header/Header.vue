<template>
    <div class="container">
        <h1>Oi</h1>
        <div class="components">
            <inferior-menu/>
        </div>
    </div>
</template>

<script>
import InferiorMenu from './InferiorMenu.vue'
export default {
    components: { InferiorMenu },
}
</script>

<style scoped>
    .container {
        background-color: #24B22a;
        color: #fff;
        padding: 10px;
        height: 52px;
    }
</style>