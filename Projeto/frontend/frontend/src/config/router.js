import Vue from "vue";
import VueRouter from "vue-router";

import Home from "../components/home/Home";
import AdminPages from "../components/admin/AdminPages";
import User from "../components/user/User";
import Auth from "../components/auth/Auth";
Vue.use(VueRouter);

Vue.use(VueRouter);

const routes = [
  {
    name: "home",
    path: "/home-admin",
    component: Home
  },
  {
    name: "adminPages",
    path: "/admin",
    component: AdminPages
  },
  {
    name: "user",
    path: "/user",
    component: User
  },
  {
    name: "auth",
    path: "/auth",
    component: Auth
  }
];

export default new VueRouter({
  mode: "history",
  routes
});
