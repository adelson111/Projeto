import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '../components/home/Home'
import AdminPages from '../components/admin/AdminPages'
import User from '../components/user/User'

Vue.use(VueRouter)

const routes = [{
    name: 'home',
    path: '/home',
    component: Home
},{
    name: 'adminPages',
    path: '/admin',
    component: AdminPages
}, {
    name: 'user',
    path: '/user',
    component: User
}]

export default new VueRouter({
    mode: 'history', 
    routes
})