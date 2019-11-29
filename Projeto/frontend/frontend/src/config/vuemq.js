import Vue from 'vue'
import Vuemq from 'vue-mq'

Vue.use(Vuemq,{
    breakpoints:{
        xz: 576,
        sm: 768,
        md: 960,
        lg: 1140,
        xl: Infinity
    }
})