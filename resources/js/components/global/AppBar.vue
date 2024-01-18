<script setup>
import { ref, provide } from "vue";
import { useRoute } from "vue-router";
import { RouterView } from "vue-router";
import logout from "../../src/apis/user.js";
import { useTheme } from "vuetify";
const theme = useTheme();
const routeLink = useRoute();

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

const setTheme = () => {
  theme.global.name.value = selectedDark.value;
  is_dark.value = !is_dark.value;
};

const setThemeLight = () => {
  theme.global.name.value = selectedLight.value;
  is_dark.value = !is_dark.value;
};

provide("is_dark", is_dark);
provide("drawer", drawer);
</script>

<template>
  <v-main class="bg-background_color">
    <v-container fluid>
      <v-app-bar color="primary">
        <v-app-bar-title>
          <img
            @click="$router.push({ name: 'Dashboard' })"
            src="../../../../public/img/img2.png"
            width="45"
          />
        </v-app-bar-title>
        <v-spacer></v-spacer>
        <v-btn icon>
          <v-menu transition="scale-transition">
            <template v-slot:activator="{ props }">
              <v-icon color="white" v-bind="props">
                {{
                  is_dark === false
                    ? "mdi-weather-sunny"
                    : "mdi-moon-waning-crescent"
                }}
              </v-icon>
            </template>
            <v-list>
              <v-list-item
                v-model="selectedDark"
                @click="setTheme"
                v-if="is_dark === false"
              >
                <v-list-item-title class="text-grey_dark">
                  <v-icon color="grey_dark">mdi-moon-waning-crescent</v-icon>
                  {{ DarkMode }}</v-list-item-title
                >
              </v-list-item>
              <v-list-item
                v-model="selectedLight"
                @click="setThemeLight"
                v-else
              >
                <v-list-item-title class="text-grey_dark">
                  <v-icon color="grey_dark">mdi-weather-sunny</v-icon>
                  {{ LightMode }}</v-list-item-title
                >
              </v-list-item>
            </v-list>
          </v-menu>
        </v-btn>
        <v-btn icon>
          <v-badge color="fail" class="py-2">
            <v-icon>mdi-bell-outline</v-icon>
          </v-badge>
        </v-btn>
        <v-menu>
          <template v-slot:activator="{ props }">
            <v-btn icon v-bind="props">
              <v-avatar
                color="surface-variant"
                size="40"
                image="https://previews.123rf.com/images/yupiramos/yupiramos1712/yupiramos171220597/92183510-hombre-avatar-perfil-icono-imagen-vector-ilustraci%C3%B3n-dise%C3%B1o.jpg"
              >
              </v-avatar>
            </v-btn>
          </template>
          <v-list>
            <v-list-item>
              <v-list-item-title>Mi perfil</v-list-item-title>
            </v-list-item>
            <v-list-item @click="logOut()">
              <v-list-item-title>Cerrar sesión</v-list-item-title>
            </v-list-item>
          </v-list>
        </v-menu>
      </v-app-bar>
    </v-container>
    <router-view></router-view>
  </v-main>
</template>

<style scoped>
</style>