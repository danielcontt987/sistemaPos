<script setup>
import { ref } from "vue";

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
<template>
  <v-carousel
    hide-delimiters
    cycle
    interval="3000"
    show-arrows="hover"
    class="custom-carousel"
  >
    <v-carousel-item v-for="(item, i) in items" :key="i" :src="item.src" cover>
      <div class="overlay">
        <div class="content">
          <h1 class="font-weight-bold mb-0">
            Sistema Estatal para el Registro de
          </h1>
          <h1 class="font-weight-bold mb-3">
            Cédula Estatal e Imagen Turística
          </h1>
          <v-btn color="wine" variant="flat" rounded="0" class="pl-15 pr-15"
            >Registrate</v-btn
          >
        </div>
      </div>
    </v-carousel-item>
  </v-carousel>
</template>
  
<style scoped>
.fifth {
  width: 100%;
  background: #0000001c;
  opacity: 0.9;
}
.v-window__controls {
  display: none !important;
}

.custom-carousel .v-carousel__item img {
  object-fit: cover;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 110%;
  height: 110%;
  background: linear-gradient(
    to bottom,
    rgba(0, 0, 0, 0.5) 0%,
    rgba(6, 6, 6, 0.568) 100%
  );
  z-index: 1000;
}

.content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
}
</style>
