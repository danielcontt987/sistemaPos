<script setup>
import {ref, provide } from "vue";
import { RouterView } from "vue-router";
import logout from "../../src/apis/user.js";
import { useTheme } from "vuetify";
const theme = useTheme();
//data
const selectedDark = ref("customDarkTheme");
const selectedLight = ref("customLightTheme");
const is_dark = ref(false);

//Methods
const logOut = async () => {
  try {
    await logout.logout();
    window.location.href = "/login";
  } catch (error) {
    console.log(error);
  }
};

</script>

<template>
      <v-app-bar elevation="0" color="white" height="80" class="my-0">
        <template v-slot:prepend>
          <img src="../../../../public/img/logo.png" width="200" class="ml-3">
        </template>

        <v-app-bar-title class="text-center"> 
          <v-btn
            color="dark"
            class="font-weight-light mr-10"
          >
            Directorio
          </v-btn>
          <v-btn
            color="dark"
            class="font-weight-light mr-10"
          >
            Capacitación
          </v-btn>
          <v-btn
            color="dark"
            class="font-weight-light mr-10"
          >
            Programación
          </v-btn>
        </v-app-bar-title>
        <template v-slot:append>
          <v-btn
            color="dark"
            class="font-weight-light mr-10"
          >
            Iniciar sesión
          </v-btn>
          <v-btn
          variant="outlined"
          rounded="0"
          color="wine"
          class="mr-3"
          >REGISTRATE</v-btn>
        </template>
      </v-app-bar>
</template>

<style scoped>
</style>