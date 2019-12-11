import axios from "axios";
import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    isMenuVisible: false,
    user: null
  },
  mutations: {
    toggleMenu(state, isVisible) {
      if (!state.user) {
        state.isMenuVisible = false;
        return;
      }
      if (isVisible === undefined) {
        state.isMenuVisible = !state.isMenuVisible;
      } else {
        state.isMenuVisible = isVisible;
      }
    },
    async setUser(state, user) {
      state.user = user;
      if (user) {
        // var token = user.acess_token;
        // axios.defaults.headers.common["Authorization"] = `Bearer ${token}`;
        axios.defaults.state.isMenuVisible = true;
      } else {
        delete axios.defaults.headers.common["Authorization"];
        state.isMenuVisible = false;
      }
    }
  }
});
