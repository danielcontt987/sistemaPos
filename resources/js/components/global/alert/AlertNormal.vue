<template>
  <v-container fluid>
    <v-dialog persistent max-width="550" v-model="alertStore.show" transition="fade-transition">
      <v-card class="my-0 pb-2 overflow-hidden rounded-lg">
        <v-card-text class="py-3 text-center">
          <v-avatar variant="tonal" :color="alertStore.color" size="100">
            <v-icon size="60"> {{ alertStore.icon }} </v-icon>
          </v-avatar>
        </v-card-text>
        <v-card-text
          class="text-center"
          style="font-size: 18px; word-break: break-word"
        >
          <span v-html="alertStore.msg"></span>
        </v-card-text>
        <v-card-actions>
          <v-row class="mx-0">
            <v-col class="text-center">
              <v-btn
                size="large"
                flat
                block
                class="bg-primary"
                @click="closeModal()"
              >
                Entendido
              </v-btn>
            </v-col>
          </v-row>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-container>
</template>

<script setup>
import { useAlertNormalStore } from "../../../store/alert.js";
const alertStore = useAlertNormalStore();

const closeModal = () => {
  alertStore.$reset();
};
</script>

<style>
</style>