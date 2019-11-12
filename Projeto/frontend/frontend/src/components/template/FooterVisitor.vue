<template>
    <footer class="footer-visitor">
        <span>Copyright <strong>TADS 6v</strong> © 2019</span>
    </footer>
</template>

<script>
export default {
    name: 'FooterVisitor'
}
</script>

<style>
    .footer-visitor{
        grid-area: footer-visitor;
        background-color: #999999;
        color:#333;

        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-right: 10px;
    }
</style>