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
          <!-- <v-menu transition="scale-transition">
                <template v-slot:activator="{ props }">
                  <v-icon color="grey_dark" v-bind="props">
                    {{ is_dark === false ?  "mdi-weather-sunny" : "mdi-moon-waning-crescent" }}
                  </v-icon>
                </template>
                <v-list :class="is_dark === false ? 'bg-white' : 'bg-background_nav'">
                  <v-list-item v-model="selectedDark" @click="setTheme" v-if="is_dark === false">
                    <v-list-item-title class="text-grey_dark"> <v-icon color="grey_dark">mdi-moon-waning-crescent</v-icon> {{ DarkMode }}</v-list-item-title>
                  </v-list-item>
                  <v-list-item v-model="selectedLight" @click="setThemeLight" v-else>
                    <v-list-item-title class="text-grey_dark"> <v-icon color="grey_dark">mdi-weather-sunny</v-icon> {{ LightMode }}</v-list-item-title>
                  </v-list-item>
                </v-list>
          </v-menu>
          <v-btn icon class="mr-3">
            <v-badge color="fail" class="py-2">
              <v-icon
                variant="text"
                class="text-grey"
                @click.stop="toggleDrawer"
                v-html="$Feather.icons['bell'].toSvg()"
              >
              </v-icon>
            </v-badge>
          </v-btn>
          <v-avatar>
            <v-img
              src="https://cdn.vuetifyjs.com/images/john.jpg"
              alt="John"
            ></v-img>
          </v-avatar> -->
        </template>
      </v-app-bar>
</template>

<style scoped>
</style>