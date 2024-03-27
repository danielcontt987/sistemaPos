<template>
  <v-container fluid class="bg-blueSky fill-height overflow-hidden" :class="mdAndUp ? 'pa-0' : ''">
    <v-row align="center" justify="center">
      <v-col cols="12" md="5"> 
       <v-card class="elevation-0 pa-3 mt-5 mx-auto rounded-lg" color="background" max-width="500px">
          <h2 class="text-center text-primary font-weight-bold pt-3" style="word-break: break-word">
            INICIAR SESIÓN
          </h2>
          <p class="text-center pt-3">
           Ingresa las crendenciales para acceder al sistema
          </p>
          <v-card-text class="pt-5">
            <v-form v-model="isValid">
              <v-row no-gutters>
                <v-col cols="12">
                  <v-text-field color="primary" label="Correo electrónico" variant="outlined" v-model="email" :rules="emailRules" autocomplete="email" />
                </v-col>
                <v-col cols="12" class="pt-3">
                  <v-text-field color="primary" label="Contraseña" variant="outlined" v-model="password" :rules="passwordRules"
                    class="rounded-lg" :append-inner-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
                    :type="show ? 'text' : 'password'" @click:append-inner="show = !show"
                    autocomplete="current-password">
                  </v-text-field>
                </v-col>
                <v-col cols="12" class="pt-5">
                  <v-btn color="primary" flat size="large" block :disabled="!isValid" @click="login">
                    Iniciar sesión
                  </v-btn>
                </v-col>
              </v-row>
            </v-form>
          </v-card-text>
        </v-card>  
      </v-col>
      <v-col cols="12" md="7" v-if="mdAndUp == true">
        <v-img src="/img/20944140.png" height="100vh" width="1000px" cover />
      </v-col>
    </v-row>
    <Alert />
  </v-container>
</template>

<script setup>
  import { useUserStore } from '../../store/user.js';
import { useAlertNormalStore } from "../../store/alert.js";

  import { ref } from "vue";
  import { useDisplay } from "vuetify";
    
  const {mdAndUp} = useDisplay();
  const userStore = useUserStore();
  const alertNormal = useAlertNormalStore();

  //Data

  const show = ref(false);
  const isValid = ref(false);
  const email = ref('');
  const password = ref('');
  const openDialogLogout = ref(false);
  const emailRules = [
  (value) => {
    if (value) return true;
    return "Favor de ingresar una correo electrónico";
  },
  (value) => {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailRegex.test(value)) {
      return true;
    } else {
      return "Favor de ingresar un correo electrónico válido ej. correo@hotmal.com";
    }
  },
];

const passwordRules = [
  (value) => {
    if (value) return true;
    return "Favor de ingresar una contraseña";
  },
];

const login = () => {
      alertNormal.show = true;
      alertNormal.icon = "mdi-check-circle-outline";
      alertNormal.color = "success";
      alertNormal.msg = "Se ha creado el usuario correctamente";
};
</script>

<style>
</style>