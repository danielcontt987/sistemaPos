<script setup>
import { ref } from "vue";
import GridCard from "../components/global/cards/GridCard.vue";
import GridProduct from "../components/global/cards/GridProduct.vue";

components:{
  GridCard,
  GridProduct
};

const headers = ref([
  {
    align: "center",
    key: "name",
    sortable: false,
    title: "Dessert (100g serving)",
    class: "white-text"
  },
  { key: "calories", title: "Calories" },
  { key: "fat", title: "Fat (g)" },
  { key: "carbs", title: "Carbs (g)" },
  { key: "protein", title: "Protein (g)" },
  { key: "iron", title: "Iron (%)" },
]);


const handleEnterKey = () =>{
  alert("Jajajajaja");
}
</script>


<template>
  <v-container fluid>
    <v-row>
      <!-- <v-col cols="12">
        <h3 class="text-grey_dark text-center">Categorias</h3>
      </v-col>
      <v-col cols="3" class="pb-0">
        <grid-card></grid-card>
      </v-col>
      <v-col cols="3" class="pb-0">
        <grid-card></grid-card>
      </v-col>
      <v-col cols="3" class="pb-0">
        <grid-card></grid-card>
      </v-col>
      <v-col cols="3" class="pb-0">
        <grid-card></grid-card>
      </v-col> -->
      <v-col cols="12">
        <v-text-field
          variant="outlined"
          label="Buscar"
          prepend-inner-icon="mdi-magnify"
          @keydown.enter.prevent="handleEnterKey"
          @keydown.tab.prevent
          @keyup.tab.prevent
          single-line
          hide-details
        ></v-text-field>
      </v-col>
      <v-col cols="12">
        <v-autocomplete
          variant="outlined"
          label="Cliente"
          prepend-inner-icon="mdi-account"
          single-line
          hide-details
        ></v-autocomplete>
      </v-col>
      <v-col cols="12">
        <v-autocomplete
          variant="outlined"
          label="Cliente"
          prepend-inner-icon="mdi-account"
          single-line
          hide-details
        ></v-autocomplete>
      </v-col>
      <v-col cols="12">
        <v-autocomplete
          variant="outlined"
          label="Cliente"
          prepend-inner-icon="mdi-account"
          single-line
          hide-details
        ></v-autocomplete>
      </v-col>
      <!-- <v-navigation-drawer
        width="400"
        permanent
        location="right"
        class="bg-background_nav"
      >
        <template v-slot:prepend>
          <v-row no-gutters>
              <v-col cols="3">
                  <v-card color="color" class="my-0 no-border-radius bg-purple_primary">
                      <v-card-text class="white--text d-flex justify-center align-center flex-column">
                          <v-icon size="20" color="white">
                              mdi-monitor-screenshot
                          </v-icon>
                          <p class="mt-2">
                              Inventario
                          </p>
                      </v-card-text>
                  </v-card>
              </v-col>
              <v-col cols="3">
                  <v-card color="color" class="my-0 no-border-radius bg-purple_dark_accent">
                      <v-card-text class="white--text d-flex justify-center align-center flex-column">
                          <v-icon size="20" color="white">
                              mdi-account
                          </v-icon>
                          <p class="mt-2 text-white">
                              Clientes
                          </p>
                      </v-card-text>
                  </v-card>
              </v-col>
              <v-col cols="3">
                  <v-card color="color" class="my-0 no-border-radius bg-purple_primary">
                      <v-card-text class="white--text d-flex justify-center align-center flex-column">
                          <v-icon size="20" color="white">
                              mdi-monitor-screenshot
                          </v-icon>
                          <p class="mt-2">
                              Pedidos
                          </p>
                      </v-card-text>
                  </v-card>
              </v-col>
              <v-col cols="3">
                  <v-card color="color" class="my-0 no-border-radius bg-purple_dark_accent">
                      <v-card-text class="white--text d-flex justify-center align-center flex-column">
                          <v-icon size="20" color="white">
                              mdi-monitor-screenshot
                          </v-icon>
                          <p class="mt-2">
                            Pendientes
                          </p>
                      </v-card-text>
                  </v-card>
              </v-col>
          </v-row>
          <br>
          
        </template>
        <v-row>
          <v-col cols="12">
            <v-data-table :headers="headers" class="bg-purple_light2"> </v-data-table>
          </v-col>
        </v-row>
      </v-navigation-drawer> -->
    </v-row>
    <br>
    <v-row>
      <v-col cols="12">
        <h3 class="text-grey_dark text-center">Productos</h3>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      <v-col cols="4" class="pb-0">
        <grid-product></grid-product>
      </v-col>
      
    </v-row>
  </v-container>
</template>

<style scoped>
.v-card {
    transition: 200ms !important;
}
.colorText{
    color: white !important;
}

.v-card:hover {
    transition: 200ms !important;
    cursor: pointer !important;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23) !important;
}

.no-border-radius {
  border-radius: 0;
}
</style>