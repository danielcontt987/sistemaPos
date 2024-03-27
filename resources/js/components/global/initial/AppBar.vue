<template>
  <v-app-bar color="white">
    <template v-slot:prepend>
      <v-btn icon v-if="smAndDown">
        <v-icon
          variant="text"
          class="text-grey"
          @click.stop="toggleDrawer"
        >
        </v-icon>
      </v-btn>
    </template>

    <v-app-bar-title> El Puerto </v-app-bar-title>
    <template v-slot:append>
      <!-- <v-menu transition="scale-transition">
        <template v-slot:activator="{ props }">
          <v-icon color="grey_dark" v-bind="props">
            {{
              is_dark === false
                ? "mdi-weather-sunny"
                : "mdi-moon-waning-crescent"
            }}
          </v-icon>
        </template>
        <v-list :class="is_dark === false ? 'bg-white' : 'bg-background_nav'">
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
          <v-list-item v-model="selectedLight" @click="setThemeLight" v-else>
            <v-list-item-title class="text-grey_dark">
              <v-icon color="grey_dark">mdi-weather-sunny</v-icon>
              {{ LightMode }}</v-list-item-title
            >
          </v-list-item>
        </v-list>
      </v-menu> -->
      <router-link to="/login">
            <v-btn variant="outlined"  color="primary" class="mr-3 rounded-lg"> Iniciar sesión</v-btn>
      </router-link>
    </template>
  </v-app-bar>
</template>

<script setup>
import { useDisplay } from "vuetify/lib/framework.mjs";

const { smAndDown } = useDisplay();

const toggleDrawer = () => {
  return
}
</script>

<style>
</style>