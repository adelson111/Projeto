<template>
  <div class="auth-contet">
    <div class="auth-modal">
      <img src="@/assets/login.png" width="100" alt="Logo" />
      <hr />
      <div class="auth-title">{{ showSignup ? "Cadastro" : "Login" }}</div>
      <input
        v-model="user.usuario"
        name="usuario"
        type="text"
        placeholder="E-mail"
      />
      <input
        v-model="user.password"
        name="password"
        type="password"
        placeholder="Senha"
      />
      <button @click="sigin">Entrar</button>
    </div>
  </div>
</template>

<script>
import { baseApiUrl, showError, userKey } from "../../global";
import axios from "axios";

export default {
  name: "Auth",
  data: function() {
    return { showSignup: false, user: {} };
  },
  methods: {
    sigin() {
      axios
        .post(`${baseApiUrl}/login`, this.user)
        .then(res => {
          this.$store.commit("setUser", res.data);
          localStorage.setItem(userKey, JSON.stringify(res.data));
          this.$router.push({ path: "/" });
        })
        .catch(showError);
    }
  }
};
</script>

<style>
.auth-contet {
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.auth-modal {
  background-color: #fff;
  width: 350px;
  padding: 35px;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  display: flex;
  flex-direction: column;
  align-items: center;
}

.auth-title {
  font-size: 1.2rem;
  font-weight: 100;
  margin-top: 10px;
  margin-bottom: 15px;
}

.auth-modal input {
  border: 1px solid #bbb;
  width: 100%;
  margin-bottom: 15px;
  padding: 3px 8px;
  outline-color: greenyellow;
}

.auth-modal button {
  align-self: flex-end;
  background-color: #2460ae;
  color: #fff;
  padding: 5px 15px;
}

.auth-modal hr {
  border: 0;
  width: 100%;
  height: 1px;
  background-image: linear-gradient(
    to right,
    rgba(120, 120, 120, 0),
    rgba(120, 120, 120, 0.75),
    rgba(120, 120, 120, 0)
  );
}
</style>
