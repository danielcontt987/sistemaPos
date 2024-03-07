<template>
  <v-col cols="12" class="pt-15">
    <h1 class="text-center pt-0 pb-7">Directorio turístico</h1>
    <p class="text-center">
      Accede al directorio de prestadores de servicios turísticos por municipio
    </p>
  </v-col>
  <v-col cols="12">
    <v-slide-group
      v-model="model"
      class="pa-4"
      selected-class="bg-primary"
      show-arrows
    >
      <v-slide-group-item
        v-for="n in items"
        :key="n"
        v-slot="{ toggle, selectedClass }"
      >
        <v-card
          :class="['ma-4', selectedClass]"
          color="grey-lighten-1"
          height="250"
          width="350"
          @click="toggle"
        >
          <img :src="n.src" height="250" width="350" alt="" />
        </v-card>
      </v-slide-group-item>
    </v-slide-group>
  </v-col>
</template>

<script setup>
import { ref } from "vue";

const model = ref(null);
const items = ref([
  {
    src: "https://cdn.pixabay.com/photo/2021/02/01/12/28/fisherman-5970480_1280.jpg",
  },
  {
    src: "https://cdn.pixabay.com/photo/2019/06/29/04/00/fisherman-4305368_1280.jpg",
  },
  {
    src: "https://cdn.pixabay.com/photo/2019/11/04/18/01/fisherman-4601744_1280.jpg",
  },
  {
    src: "https://cdn.pixabay.com/photo/2018/01/05/02/47/fishing-3062034_1280.jpg",
  },
]);
</script>

<style>
</style>