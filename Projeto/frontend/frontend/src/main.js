import Vue from 'vue'
import App from './App.vue'

import './config/bootstrap'
import store from './config/store'
import router from './config/router'

new Vue({
  store,
  router,
  render: h => h(App),
}).$mount('#app')
