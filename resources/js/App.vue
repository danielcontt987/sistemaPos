<script setup>

import AppBarVue from "./components/global/initial/AppBar.vue";
import Slider from "./components/global/initial/Slider.vue";
import Products from "./components/global/initial/Products.vue";
import { useRoute } from "vue-router";
const route = useRoute();


</script>


<template>
  <AppBarVue v-if="route.path != '/login' && route.path != '/registrar'"/>
  <v-main>
      <router-view></router-view>
  </v-main>
</template>


<style>
.overlay {
  overflow-x: hidden;
}
</style>