<script setup>
import { ref } from "vue";

const headers = ref([
  {
    align: "center",
    key: "name",
    sortable: false,
    title: "Dessert (100g serving)",
  },
  { key: "calories", title: "Calories" },
  { key: "fat", title: "Fat (g)" },
  { key: "carbs", title: "Carbs (g)" },
  { key: "protein", title: "Protein (g)" },
  { key: "iron", title: "Iron (%)" },
]);
</script>


<template>
  <v-container fluid>
    <v-row>
      <v-col cols="12" lg="6" md="6">
        <v-select
          variant="outlined"
          label="Search templates"
          flat
        ></v-select>
      </v-col>
      <v-col cols="12" lg="6" md="6">
        <v-select
          variant="solo"
          label="Search templates"
          prepend-inner-icon="mdi-magnify"
          single-line
          flat
        ></v-select>
      </v-col>
      <v-col cols="12" lg="6" md="6">
        <v-select
          variant="solo"
          label="Search templates"
          prepend-inner-icon="mdi-magnify"
          single-line
          flat
        ></v-select>
      </v-col>
      <v-col cols="12" lg="6" md="6">
        <v-select
          variant="solo"
          label="Search templates"
          prepend-inner-icon="mdi-magnify"
          single-line
          flat
        ></v-select>
      </v-col>
      <v-col cols="12">
        <v-data-table :headers="headers" class="bg-background_nav" > </v-data-table>
      </v-col>
    </v-row>
  </v-container>
</template>

<style>
</style>