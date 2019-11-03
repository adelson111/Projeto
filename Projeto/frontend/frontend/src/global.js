import Vue from 'vue'
//conexão com backend
export const baseApiUrl = '127.0.0.1:4000'

//tratar erros com as mensagens do toasted
export function showError(e){
    if(e && e.response && e.response.data ){
        Vue.toasted.global.defaultError({ msg: e.response.data})
    } else if (typeof e === 'string'){
        Vue.toasted.global.defaultError({ msg : e})
    } else {
        Vue.toasted.global.defaultError()
    }
}