<script setup>
import { onMounted, ref, provide } from "vue";
import { RouterView } from "vue-router";
import logout from "../../src/apis/user.js";
import NavegationDrawerVue from "./NavegationDrawerVue.vue";
import { useTheme } from "vuetify";
const theme = useTheme();
//data
const drawer = ref(true);
const selectedDark = ref("customDarkTheme");
const selectedLight = ref("customLightTheme");
const DarkMode = ref("Dark");
const LightMode = ref("Light");
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

const updateDrawer = (value) => {
  drawer.value = value;
};

const toggleDrawer = () => {
  updateDrawer(!drawer.value);
};


const setTheme = () => {
  theme.global.name.value = selectedDark.value;
  is_dark.value = !is_dark.value;
};

const setThemeLight = () => {
  theme.global.name.value = selectedLight.value;
  is_dark.value = !is_dark.value;
};

provide('is_dark', is_dark);

onMounted(() => {});
</script>

<template>
  <NavegationDrawerVue
    :drawer="drawer"
    @update:drawer="updateDrawer"
  ></NavegationDrawerVue>
  <v-main class="bg-background_color">
    <v-container fluid>
      <v-card class="rounded-md" flat color="background_nav">
        <v-card-text>
          <v-row align="center">
            <!-- Iconos a la izquierda -->
            <v-col cols="auto" class="p-0">
              <v-app-bar-nav-icon
                variant="text"
                @click.stop="toggleDrawer"
              ></v-app-bar-nav-icon>
            </v-col>

            <!-- Espacio entre los iconos izquierdos y derechos (opcional) -->
            <v-col class="grow"></v-col>

            <!-- Iconos a la derecha -->
            <v-col cols="auto">
              <v-menu transition="scale-transition">
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
            </v-col>
            <v-col cols="auto">
              <v-badge color="purple_primary" class="py-2">
                <v-icon>mdi-bell-outline</v-icon>
              </v-badge>
            </v-col>
            <v-col cols="auto">
              <v-avatar color="surface-variant" size="35">
                <v-menu activator="parent">
                  <v-sheet :elevation="4" :height="300" :width="200" rounded>
                    <v-col cols="12">
                      <v-btn class="bg-error_light" @click="logOut()"
                        >Log Out</v-btn
                      >
                    </v-col>
                  </v-sheet>
                </v-menu>
              </v-avatar>
            </v-col>
          </v-row>
        </v-card-text>
      </v-card>
    </v-container>
    <router-view></router-view>
  </v-main>
</template>

<style scoped>
</style>