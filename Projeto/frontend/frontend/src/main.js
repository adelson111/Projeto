import Vue from "vue";
import App from "./App";
import "./config/bootstrap";
import "./config/msgs";
import "./config/vuemq";
import store from "./config/store";
import router from "./config/router";

import Carousel3d from "vue-carousel-3d";
// axios.defaults.headers.post["Content-Type"] = "application/json";
new Vue({
  store,
  Carousel3d,
  router,
  render: h => h(App)
}).$mount("#app");
