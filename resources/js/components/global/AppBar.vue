<script setup>
import { ref, provide, onMounted } from "vue";
import { RouterView } from "vue-router";
import logout from "../../src/apis/user.js";

const props = defineProps({
   user: {
     type: Object,
     require: true
   }
})

import { useDisplay } from 'vuetify';
const {mdAndUp, smAndDown} = useDisplay();

//data
const drawer = ref(false);

//Methods
const logOut = async () => {
  try {
    await logout.logout();
    window.location.href = "/login";
  } catch (error) {
    console.log(error);
  }

onMounted( () => {
  console.log('getUser');
}) 

};

const items = ref([
        {
            title: 'Directorio',
            value: 'foo',
        },
        {
            title: 'Capacitación',
            value: 'bar',
        },
        {
            title: 'Programas y certificaciones',
            value: 'fizz',
        }
    ]);

</script>

<template>
  <v-app-bar elevation="0" color="white" height="80" class="my-0">
    <template v-slot:prepend>
      <img
        src="../../../../public/img/logo.png"
        width="200"
        class="ml-3"
        v-if="mdAndUp"
      />
      <img src="../../../../public/img/logo.png" width="150" v-else />
    </template>

    <v-app-bar-title class="text-center" v-if="mdAndUp">
      <v-btn color="dark" class="font-weight-light mr-10"> Directorio </v-btn>
      <v-btn color="dark" class="font-weight-light mr-10"> Capacitación </v-btn>
      <v-btn color="dark" class="font-weight-light mr-10"> Programación </v-btn>
    </v-app-bar-title>
    <template v-slot:append v-if="mdAndUp">
      <v-btn color="dark" class="font-weight-light mr-10" @click="logOut()" v-if="user == null">
        Iniciar sesión
      </v-btn>
      <v-btn color="dark" class="font-weight-light mr-10" @click="logOut()" v-if="user != null">
        Cerrar sesión
      </v-btn>
      <v-btn variant="outlined" rounded="0" color="wine" class="mr-3"
      v-if="user == null"
        >REGISTRATE</v-btn
      >
    </template>
    <v-app-bar-nav-icon class="mr-5" variant="text" @click.stop="drawer = !drawer" v-if="smAndDown">
      <template v-if="drawer">
        <v-icon color="">mdi-close</v-icon>
      </template>
      <template v-else>
        <v-icon>mdi-menu</v-icon>
      </template>
    </v-app-bar-nav-icon>
  </v-app-bar>
  <v-navigation-drawer
          v-if="smAndDown"
          v-model="drawer"
          app
        >
      <v-list nav density="compact" :items="items"></v-list>
  </v-navigation-drawer>

</template>

<style scoped>
</style>