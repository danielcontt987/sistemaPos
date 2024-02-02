<script setup>
import { useDate, useDisplay } from "vuetify";
import { computed, ref } from "vue";
import moment from "moment";
const breakpointSize = useDisplay();

const adapter = useDate();

const openModal = ref(false);
const sizeDisplay = ref("");
const headers = [
  {
    name: "African Elephant",
    species: "Loxodonta africana",
    diet: "Herbivore",
    habitat: "Savanna, Forests",
    status: "Activo",
  },
];
const dialogVisible = ref(false);

//Methods
const openDialog = () => {
  openModal.value = true;
};

const closeDialog = () => {
  dialogVisible.value = false;
};

const withComputed = computed(() => {
    if (breakpointSize.lg.value) {
      return "50vw";
    }
    if (breakpointSize.xl.value) {
      return "20vw";
    }
    if (breakpointSize.sm.value) {
      return "70vw";
    }
    if (breakpointSize.xs.value) {
      return "100vw";
    }
});
</script>

<template>
  <v-container fluid>
    <v-row no-gutters>
      <v-col cols="12">
        <v-card
          class="v-card--density-default rounded-md bg-blueSky elevation-0 rounded-md mb-8"
        >
          <div class="px-8 py-8 py-lg-0">
            <div class="d-flex justify-space-between align-center">
              <div class="d-flex align-center">
                <div>
                  <h3 class="text-h3 mb-2">Lista de clientes</h3>
                  <v-breadcrumbs
                    density="default"
                    class="font-weight-medium pa-0 text-greyLight"
                  >
                    2 Nuevos clientes
                  </v-breadcrumbs>
                </div>
              </div>

              <div class="d-none d-lg-block overflow-hidden">
                <div class="mb-n16 mt-3">
                  <!-- Your image goes here -->
                  <img src="/img/ChatBc-d6272e3c.png" alt="breadcrumb" />
                </div>
              </div>
            </div>
          </div>
        </v-card>
      </v-col>
      <v-col cols="12">
        <v-card
          rounded="2"
          class="rounded-md shadow-card solid-border"
          flat
          color="background_nav"
        >
          <v-card-title class="mt-3">
            <v-row>
              <v-col cols="12" lg="4">
                <v-text-field
                  density="compact"
                  variant="outlined"
                  color="primary"
                  label="Buscar cliente"
                  class="text-grey_dark"
                >
                </v-text-field>
              </v-col>
              <v-col cols="12" lg="8" class="text-right">
                <v-menu>
                  <template v-slot:activator="{ props }">
                    <v-btn color="primary" v-bind="props" flat>
                      <v-icon class="px-4">mdi-plus</v-icon>
                      Agregar cliente
                    </v-btn>
                  </template>
                  <v-list>
                    <v-list-item @click="openDialog()">
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
            <v-data-table :items="headers" class="bg-background_nav">
              <template v-slot:item.status="{ item }">
                <v-chip class="rounded-lg bg-successLight text-greenLight">{{
                  "Activo"
                }}</v-chip>
              </template>
            </v-data-table>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
    <v-dialog v-model="openModal" :width="withComputed">
      <v-card rounded="4">
        <v-card-title>
                <v-row class="mx-3 mt-0 mb-0">
                    <v-col cols="12">
                        <h4 class="text-center">
                            Filtro de clientes
                        </h4>
                    </v-col>
                </v-row>
        </v-card-title>
      </v-card>
    </v-dialog>
  </v-container>
</template>

<style>
.shadow-card {
  box-shadow: 5px 3px 8px #e3dfdf;
}
.solid-border {
  border: 2px solid #f6f6f6;
}

.text-h3 {
  font-size: 1.5rem !important;
  font-weight: 600;
  line-height: 2rem;
  letter-spacing: normal !important;
  font-family: inherit !important;
  text-transform: none !important;
}

.v-field--center-affix {
  font-size: 16px;
}
</style>