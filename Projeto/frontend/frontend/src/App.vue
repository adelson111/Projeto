<template>
  <div
    id="app"
    :class="{ 'hide-menu': !isMenuVisible || !user }"
    v-if="validatingToken === false"
  >
    <Header
      title="Sistema de Divulgação e Gegenciamento de Projetos Acadêmicos"
      :hideToggle="!user"
      :hideUserDropdown="!user"
    />
    <Menu v-if="user" />
    <Loading v-if="validatingToken" />
    <Content v-else />
    <Footer />
  </div>

  <div v-else id="app2">
    <HeaderVisitor />
    <MenuVisitor />
    <ContentVisitor />
    <FooterVisitor />
  </div>
</template>

<script>
import axios from "axios";
import { baseApiUrl, userKey } from "@/global";
import { mapState } from "vuex";
import Header from "./components/template/Header";
import Menu from "./components/template/Menu";
import Content from "./components/template/Content";
import Footer from "./components/template/Footer";
import Loading from "./components/template/Loading";
// ******** Visitante **********

import HeaderVisitor from "./components/template/visitor/HeaderVisitor";
import MenuVisitor from "./components/template/visitor/MenuVisitor";
import ContentVisitor from "./components/template/visitor/ContentVisitor";
import FooterVisitor from "./components/template/visitor/FooterVisitor";

export default {
  name: "app",
  components: {
    Header,
    Menu,
    Content,
    Footer,
    HeaderVisitor,
    MenuVisitor,
    ContentVisitor,
    FooterVisitor,
    Loading
  },
  computed: mapState(["isMenuVisible", "user"]),
  data() {
    return {
      validatingToken: false
    };
  },
  methods: {
    async validateToken() {
      this.validatingToken = true;
      const json = localStorage.getItem(userKey);
      const userData = JSON.parse(json);
      this.$store.commit("setUser", null);
      // if (!userData) {
      //   this.validatingToken = false;
      //   this.$router.push({ name: "auth" });
      //   return;
      // }
      const res = await axios.post(`${baseApiUrl}/validationToken`, {
        acess_token: userData.acess_token
      });
      if (res.data) {
        this.$store.commit("setUser", userData);
      } else {
        localStorage.removeItem(userKey);
        this.$router.push({ name: "auth" });
      }
      this.validatingToken = false;
    }
  },
  created() {
    this.validateToken();
  }
};
</script>
<style>
* {
  font-family: "Lato", sans-serif;
}
body {
  margin: 0;
}
#app {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

  height: 100vh;
  display: grid;
  grid-template-rows: 60px 1fr 40px;
  grid-template-columns: 300px 1fr;
  grid-template-areas:
    "header header"
    "menu content"
    "menu footer";
}

#app2 {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

  display: grid;
  grid-template-rows: 60px 40px auto 30px;

  grid-template-areas:
    "headerVisitor headerVisitor"
    "menuVisitor menuVisitor"
    "contentVisitor contentVisitor"
    "footer-visitor footer-visitor";
}

#app.hide-menu {
  grid-template-areas:
    "header header"
    "content content"
    "footer footer";
}
</style>
