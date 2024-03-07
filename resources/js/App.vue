<script setup>
import AppBarVue from "./components/global/AppBar.vue";
</script>
<template>
  <!-- <div>
    
    <v-main>
      <RouterView />
    </v-main>
  </div> -->
  <v-layout>
    <AppBarVue></AppBarVue>
    <v-main>
        <router-view></router-view>
    </v-main>
  </v-layout>
</template>