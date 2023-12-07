<script setup>
import { ref } from "vue";

const isDialogVisible = ref(false);

const headers = [
  {
    name: "African Elephant",
    species: "Loxodonta africana",
    diet: "Herbivore",
    habitat: "Savanna, Forests",
  },
];

const dialogVisible = ref(false)
const openDialog = () =>{
  dialogVisible.value = true;
};

const closeDialog = () =>{
  dialogVisible.value = false;
};



</script>

<template>
  <v-container fluid>
    <v-row>
      <v-col cols="12">
        <v-card rounded="2" class="rounded-md" flat color="background_nav">
          <v-card-title class="primary">
            <h4 class="text-center white--text">Filtro de clientes</h4>
          </v-card-title>
          <v-card-text>
            <v-row>
              <v-col cols="12" lg="6">
                <v-text-field variant="outlined" label="Desde" @click="openDialog"></v-text-field>
                <v-dialog v-model="dialogVisible" width="400" transition="dialog-bottom-transition">
                  <v-card flat class="rounded-lg">
                      <v-date-picker
                        color="purple_dark"
                        dark
                         class="ma-0 pa-0"
                         full-width
                         width="100%"
                      ></v-date-picker>
                    <v-card-actions>
                      <v-btn @click="closeDialog">Cerrar</v-btn>
                    </v-card-actions>
                  </v-card>
                </v-dialog>
              </v-col>
              <v-col cols="12" lg="6">
                
              </v-col>
            </v-row>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
    <v-row>
      <v-col cols="12">
        <v-card rounded="2" class="rounded-md" flat color="background_nav">
          <v-card-title class="mt-3">
            <v-row>
              <v-col cols="12" lg="10">
                <h4 class="text-grey_dark">Clientes</h4>
              </v-col>
              <v-col cols="12" lg="2" class="mt-1">
                <v-menu>
                  <template v-slot:activator="{ props }">
                    <v-btn color="background_nav" v-bind="props">
                      <v-icon class="px-4">mdi-menu</v-icon> Menu
                    </v-btn>
                  </template>
                  <v-list>
                    <v-list-item>
                      <v-list-item-title>Agregar clientes</v-list-item-title>
                    </v-list-item>
                    <v-list-item>
                      <v-list-item-title>Descargar clientes</v-list-item-title>
                    </v-list-item>
                  </v-list>
                </v-menu>
              </v-col>
            </v-row>
          </v-card-title>
          <v-card-text>
            <v-data-table
              :items="headers"
              class="bg-background_nav"
            ></v-data-table>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<style>
</style>