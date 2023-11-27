<script setup>
import { onMounted, ref } from "vue";
import { RouterView } from "vue-router";
import logout from "../../src/apis/user.js";
import NavegationDrawerVue from "./NavegationDrawerVue.vue";
//data
const drawer = ref(true);


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

onMounted(() => {

})

</script>

<template>
  
  <NavegationDrawerVue
  :drawer="drawer"
  @update:drawer="updateDrawer"
  ></NavegationDrawerVue>
  <v-main class="bg-background_color">
    <v-container fluid>
      <v-card class="rounded-md" flat>
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
              <v-icon>mdi-weather-sunny</v-icon>
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
                      <v-btn class="bg-error_light" @click="logOut()">Log Out</v-btn>
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