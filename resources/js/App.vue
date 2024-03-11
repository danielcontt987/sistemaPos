<script setup>
import { onMounted, ref } from "vue";
import get from './src/apis/user.js'
import AppBarVue from "./components/global/AppBar.vue";

const userData = ref(null);

onMounted(() => {
  try {
    get.getuser().then((res) =>{
      userData.value = res.data.user
    }) 
  } catch (error) {
    
  }
}) 
</script>
<template>
  <!-- <div>
    
    <v-main>
      <RouterView />
    </v-main>
  </div> -->
  <v-layout>
    <AppBarVue :user="userData"></AppBarVue>
    <v-main>
        <router-view></router-view>
    </v-main>
  </v-layout>
</template>