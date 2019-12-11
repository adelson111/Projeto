import Vue from "vue";
//conexão com backend
export const userKey = "_knowledge_user";
export const baseApiUrl = "http://127.0.0.1:8000";
// export const baseApiUrl = "http://10.192.5.93:8000";

//tratar erros com as mensagens do toasted
export function showError(e) {
  if (e && e.response && e.response.data) {
    Vue.toasted.global.defaultError({ msg: e.response.data });
  } else if (typeof e === "string") {
    Vue.toasted.global.defaultError({ msg: e });
  } else {
    Vue.toasted.global.defaultError();
  }
}
export default { baseApiUrl, showError, userKey };
