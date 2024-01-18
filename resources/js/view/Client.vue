<script setup>
//Imports
import { useDisplay } from "vuetify";
import { useClientStore } from "../store/clients";
import { ref } from "vue";
import moment from "moment";
import { computed } from "vue";

//Variables
const mobile = useDisplay();
const clients = useClientStore();
const date = ref(moment().format("YYYY-MM-DD"));
const dialogVisible = ref(false);
const openDialogClient = ref(false);
const page = ref(1);
const itemsPerPage = ref(2);
const name = ref('');
const last_name = ref('');
const curp = ref('');
const email = ref('');
const telephone = ref('');


const headers = [
  { title: "Nombre completo", key: "fullName", align: "center", class: 'name-header' },
  { title: "Teléfono", key: "telephone", align: "center" },
  { title: "E-mail", key: "email", align: "center" },
  { title: "CURP", key: "curp", align: "center" },
  { title: "Estatus", key: "status", align: "center" },
];

//Methods
const openDialog = () => {
  dialogVisible.value = true;
  date.value = moment().format("YYYY-MM-DD");
};

const openCreateClient = () =>{
  openDialogClient.value = true;
}

const storeClientDialog = () => {
  let params = {
    name: name.value,
    last_name: last_name.value
  }
  clients.storeClient(params)
}

//Computed
const pageCount = computed(() => {
  // Calcular el número total de páginas
  const count = Math.ceil(clients.client.length / itemsPerPage.value);
  return isNaN(count) || count < 1 ? 1 : count;
});

const widthDialog = computed(() => {
    if (mobile.xl.value) {
        return "25vw";
    }
    if (mobile.lg.value) {
        return "30vw";
    }
    return "85vw";
})

const pagedClient = computed(() => {
  if (!Array.isArray(clients.client)) {
    // Handle the case where clients.client is not an array
    return [];
  }

  // Calcular los elementos a mostrar en la página actual
  const startIndex = (page.value - 1) * itemsPerPage.value;
  const endIndex = startIndex + itemsPerPage.value;
  return clients.client.slice(startIndex, endIndex);
});
</script>

<template>
  <v-container fluid>
    <v-row>
      <v-col cols="12">
        <v-card class="rounded-lg" flat color="background_nav">
          <v-card-title class="bg-primary mb-2">
            <h4 class="text-center white--text">Filtro de clientes</h4>
          </v-card-title>
          <v-card-text>
            <v-row>
              <v-col cols="12" lg="6">
                <v-text-field
                  variant="outlined"
                  type="date"
                  label="Desde"
                  @click="openDialog"
                ></v-text-field>
              </v-col>
              <v-col cols="12" lg="6"> </v-col>
            </v-row>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
    <v-row>
      <v-col cols="12">
        <v-card class="rounded-lg" color="background_nav">
          <v-card-title class="bg-primary">
            <v-row>
              <v-col cols="12" lg="10" sm="9" class="mb-0">
                <h4
                  class="text-white"
                  :class="[mobile.xs.value == true ? 'text-center' : '']"
                >
                  Clientes
                </h4>
              </v-col>
              <v-col cols="12" lg="2" sm="3">
                <v-menu>
                  <template v-slot:activator="{ props }">
                    <v-btn color="background_nav" block flat v-bind="props">
                      <v-icon class="px-4">mdi-menu</v-icon> Menu
                    </v-btn>
                  </template>
                  <v-list>
                    <v-list-item @click="openCreateClient()">
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
              :headers="headers"
              :items="pagedClient"
              class="bg-background_nav"
              no-data-text="No hay clientes"
              :hide-no-data="false"
            >
            <template v-slot:item.fullName="{ item }">
                  {{ item.name + ' ' + item.last_name}}
            </template>
            <template v-slot:item.status="{ item }">
                 <v-chip v-if="item.status === 'active'" class="rounded-lg" color="success">
                   Activo
                 </v-chip>
            </template>
          </v-data-table>
            <div class="text-center pt-2">
              <v-pagination
                elevation="3"
                v-model="page"
                :length="pageCount"
                size="small"
                color="primary"
              />
            </div>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
  <v-dialog v-model="openDialogClient" :width="widthDialog" transition="dialog-bottom-transition">
    <v-card class="rounded-lg" :class="mobile.smAndDown.value === false ? 'overflow-hidden' : ''">
      <v-card-title class="bg-primary">
        <v-row class="mx-3 mt-0 mb-0">
            <v-col cols="12">
                <h4 class="text-center p-0 m-0">
                    Nuevo cliente
                </h4>
            </v-col>
        </v-row>
      </v-card-title>
      <v-card-text>
        <v-row no-gutters>
          <v-col cols="12">
             <v-text-field label="Nombre(s) *" variant="outlined" v-model="name"></v-text-field>
          </v-col>
          <v-col cols="12">
             <v-text-field label="Apellido(s) *" variant="outlined"></v-text-field>
          </v-col>
          <v-col cols="12">
             <v-text-field label="Curp *" variant="outlined"></v-text-field>
          </v-col>
          <v-col cols="12">
             <v-text-field label="Correo electrónico *" variant="outlined"></v-text-field>
          </v-col>
          <v-col cols="12">
             <v-text-field label="Teléfono *" variant="outlined"></v-text-field>
          </v-col>
        </v-row>
      </v-card-text>
        <v-card-actions class="justify-center">
            <v-row class="mx-0">
                <v-col cols="12" lg="6" sm="6">
                    <v-btn block depressed class="rounded-lg text-fail">
                        Cerrar
                    </v-btn>
                </v-col>
                <v-col cols="12" lg="6" sm="6">
                    <v-btn block depressed class="bg-primary rounded-lg white--text" @click="storeClientDialog()">
                        Aceptar
                    </v-btn>
                </v-col>
            </v-row>
        </v-card-actions>
    </v-card>
  </v-dialog>
</template>

<style>
.v-data-table-footer {
  display: none;
}

.name-header {
  color: red;
}
</style>