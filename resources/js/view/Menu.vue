<script setup>
import { ref } from "vue";
import { useUserStore } from "../store/users";
const store = useUserStore();

const options = ref({
  chart: {
    type: "bar",
    height: 350,
  },
  plotOptions: {
    bar: {
      borderRadius: 4,
      horizontal: true,
    },
  },
  colors: ["#9c5df9"],
  dataLabels: {
    enabled: false,
  },
  xaxis: {
    categories: ["LUN", "MAR", "MIER", "JUE", "VIE", "SAB", "DOM"],
  },
  colors: ["#9c5df9"],
});

const series = ref([
  {
    name: "series-1",
    data: [30, 40, 45, 50, 49, 60, 70, 91],
  },
]);
</script>


<template>
  <v-container fluid>
    <v-row>
      <v-col cols="12" lg="7">
        <h3 class="text-grey_dark">
          Bienvenda de nuevo, {{ store.user.name }} ✌️
        </h3>
        <p class="text-grey_dark">
          Estos son algunos de los datos generales de tu negocio
        </p>
      </v-col>
      <v-col lg="5"></v-col>
    </v-row>
    <v-row class="d-flex align-center">
      <v-col cols="auto">
        <v-avatar size="54" rounded="2" color="purple_light2">
          <v-icon size="30" color="purple_dark_accent">mdi-chart-line</v-icon>
        </v-avatar>
      </v-col>
      <v-col>
        <span class="text-base">Total de ventas 2023</span>
        <h4 class="text-h4 font-weight-medium text-purple_dark_accent">500</h4>
      </v-col>
      <v-col cols="auto">
        <v-avatar size="54" rounded="2" color="blue_light_sky">
          <v-icon size="30" color="aqua_normal">mdi-account-outline</v-icon>
        </v-avatar>
      </v-col>
      <v-col>
        <span class="text-base">Usuarios registrados</span>
        <h4 class="text-h4 font-weight-medium text-aqua_normal">5</h4>
      </v-col>
      <v-col cols="auto">
        <v-avatar size="54" rounded="2" color="orange_light2">
          <v-icon size="30" color="orange_l2">mdi-account-group-outline</v-icon>
        </v-avatar>
      </v-col>
      <v-col>
        <span class="text-base">Clientes</span>
        <h4 class="text-h4 font-weight-medium text-orange_l2">20</h4>
      </v-col>
      <v-col cols="auto">
        <v-avatar size="54" rounded="2" color="wather_melon">
          <v-icon size="30" color="red_dark_2">mdi-fruit-watermelon</v-icon>
        </v-avatar>
      </v-col>
      <v-col>
        <span class="text-base">Cantidad de productos</span>
        <h4 class="text-h4 font-weight-medium text-primary">50</h4>
      </v-col>
  
    </v-row>
    <v-row>
      <v-col cols="12" lg="7">
        <v-card rounded="2" class="rounded-md" flat>
          <v-card-title>
            <h5 class="text-grey_dark">No. de ventas en los últimos días</h5>
            <div>
              <apexchart
                type="bar"
                height="350"
                :options="options"
                :series="series"
              ></apexchart>
            </div>
          </v-card-title>
          <v-card-text> </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>