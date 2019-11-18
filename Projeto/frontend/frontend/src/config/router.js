import Vue from "vue";
import VueRouter from "vue-router";

import Home from "../components/home/Home";
import AdminPages from "../components/admin/AdminPages";
import User from "../components/user/User";
import Auth from "../components/auth/Auth";
import { userKey } from "../global";
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
    component: AdminPages,
    meta: { requiresTeacher: true }
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

const Router = new VueRouter({
  mode: "history",
  routes
});

Router.beforeEach((to, from, next) => {
  const json = localStorage.getItem(userKey);
  if (to.matched.some(record => record.meta.requiresTeacher)) {
    const user = JSON.parse(json);
    alert("SSSSSSSS");
    alert(user[0].roles[0]);
    user && user[0].roles[0] === "Professor" ? next() : next({ path: "/" });
  } else {
    next();
  }
});

export default Router;
