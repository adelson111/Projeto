import Vue from 'vue'
import App from './App.vue'
import store from './config/store'

new Vue({
  store,
  render: h => h(App),
}).$mount('#app')
