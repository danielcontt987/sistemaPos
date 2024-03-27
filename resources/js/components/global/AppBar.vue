<script setup>
import { onMounted, ref, provide } from "vue";
import { useRoute } from "vue-router";
import { RouterView } from "vue-router";
import logout from "../../src/apis/user.js";
import NavegationDrawerVue from "./NavegationDrawerVue.vue";
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

provide("is_dark", is_dark);
provide("drawer", drawer);
</script>

<template>
  <NavegationDrawerVue
    :drawer="drawer"
    @update:drawer="updateDrawer"
  ></NavegationDrawerVue>
  <v-main class="bg-white">
    <v-container fluid>
      <v-app-bar elevation="0" color="white">
        <template v-slot:prepend>
          <v-btn icon>
            <v-icon
              variant="text"
              class="text-grey"
              @click.stop="toggleDrawer"
              v-html="$Feather.icons['menu'].toSvg()"
            >
            </v-icon>
          </v-btn>
          <v-btn icon>
            <v-icon
              variant="text"
              class="text-grey"
              @click.stop="toggleDrawer"
              v-html="$Feather.icons['search'].toSvg()"
            >
            </v-icon>
          </v-btn>
        </template>

        <v-app-bar-title> Photos </v-app-bar-title>
        <template v-slot:append>
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
          <v-btn icon class="mr-3" stacked>
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
          </v-avatar>
        </template>
      </v-app-bar>
    </v-container>
    <router-view></router-view>
  </v-main>
</template>

<style scoped>
</style>