import Vue from "vue";
import App from "./App.vue";
import './config/vuemq'
import "./config/bootstrap";
import store from "./config/store";
import router from "./config/router";
import "./config/msgs";
import axios from "axios";

axios.defaults.headers.post["Content-Type"] = "application/json";
new Vue({
  store,
  router,
  render: h => h(App)
}).$mount("#app");
