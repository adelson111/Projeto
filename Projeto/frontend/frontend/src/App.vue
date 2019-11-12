<template>
  <div id="app" :class="{'hide-menu': !isMenuVisible}" v-if="logado === true">
    <Header 
      title="Sistema de Divulgação e Gegenciamento de Projetos Acadêmicos"
      :hideToggle="false"
      :hideUserDropdown="false"
    />
    <Menu />
    <Content />
    <Footer />
  </div>

  <div v-else id="app2">
    <HeaderVisitor/>
    <MenuVisitor/>
    <ContentVisitor/>
    <FooterVisitor/>
  </div>
</template>

<script>
import { mapState } from 'vuex'
import Header from "./components/template/Header"
import Menu from "./components/template/Menu"
import Content from "./components/template/Content"
import Footer from "./components/template/Footer"

// ******** Visitante **********

import HeaderVisitor from './components/template/HeaderVisitor'
import MenuVisitor from './components/template/MenuVisitor'
import ContentVisitor from './components/template/ContentVisitor'
import FooterVisitor from './components/template/FooterVisitor'

export default {
  name: "app",
  components: { Header, Menu, Content, Footer, HeaderVisitor, MenuVisitor, ContentVisitor, FooterVisitor },
  computed: mapState(['isMenuVisible']),
  data() {
    return {
      logado: false
    }
  },
}
</script>
<style>
  *{
    font-family: "Lato", sans-serif;
  }
  body{
    margin: 0;
  }
  #app{
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;

    height: 100vh;
    display: grid;
    grid-template-rows: 60px 1fr 40px;
    grid-template-columns: 300px 1fr;
    grid-template-areas:
        "header header"
        "menu content"
        "menu footer"
  }

  #app2{
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;

    
    display: grid;
    grid-template-rows: 60px 40px 900px 30px;
    
    grid-template-areas:
        "headerVisitor headerVisitor"
        "menuVisitor menuVisitor"
        "contentVisitor contentVisitor"
        "footer-visitor footer-visitor"
  }

  #app.hide-menu{
    grid-template-areas:
      "header header"
      "content content"
      "footer footer"
  }
</style>