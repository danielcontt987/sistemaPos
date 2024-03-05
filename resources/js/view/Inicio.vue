<template>
  <v-carousel hide-delimiters cycle :interval="interval" class="custom-carousel">
    <v-carousel-item
      v-for="(item, i) in items"
      :key="i"
      :src="item.src"
      cover
    >
      <div class="overlay">
        <div class="content">
          <h1 class="font-weight-bold mb-0">
            Sistema Estatal para el Registro de
          </h1>
          <h1 class="font-weight-bold mb-3">Cédula Estatal e Imagen Turística</h1>
          <v-btn color="wine" variant="flat" rounded="0" class="pl-15 pr-15">Registrate</v-btn>
        </div>
      </div>
    </v-carousel-item>
  </v-carousel>
  <v-row class="bg-background">
    <v-col cols="12" sm="9" class="mt-10 px-15">
      <h3 class="text-brown">¿Por qué registrame en la plataforma?</h3>
    </v-col>
    <v-col cols="12" sm="3">
      <div style="position: absolute; padding-left: 170px; padding-top: -100px">
        <img src="../../../public/img/Union.png" style="width: 170px" /><br />
      </div>
    </v-col>
    <v-row class="mt-5 px-15 pb-15">
      <v-col cols="12" sm="4">
        <v-icon color="dark_gray" size="40" class="mb-5">mdi-earth</v-icon>
        <h4 class="pl-2 text-dark_gray">
          Forma parte del directorio estatal de
        </h4>
        <h4 class="pl-2 text-dark_gray">prestadores de servicios turísticos</h4>
        <p class="pl-2 text-justify">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br />
          Suspendisse varius enim in eros elementum tristique. <br />
          Duis cursus, mi quis viverra ornare, eros dolor interdum <br />
          nulla.
        </p>
      </v-col>
      <v-col cols="12" sm="4">
        <v-icon color="dark_gray" size="40" class="mb-5"
          >mdi-book-outline</v-icon
        >
        <h4 class="pl-2 text-dark_gray">Accede a programas de capacitación</h4>
        <h4 class="pl-2 text-dark_gray">gratuitos</h4>
        <p class="pl-2 text-justify">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br />
          Suspendisse varius enim in eros elementum tristique. <br />
          Duis cursus, mi quis viverra ornare, eros dolor interdum <br />
          nulla.
        </p>
      </v-col>
      <v-col cols="12" sm="4">
        <v-icon color="dark_gray" size="40" class="mb-5"
          >mdi-check-circle-outline</v-icon
        >
        <h4 class="pl-2 text-dark_gray">Cumple tus obligaciones</h4>
        <h4 class="pl-2 text-dark_gray">fácilmente</h4>
        <p class="pl-2 text-justify">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br />
          Suspendisse varius enim in eros elementum tristique. <br />
          Duis cursus, mi quis viverra ornare, eros dolor interdum <br />
          nulla.
        </p>
      </v-col>
    </v-row>
  </v-row>
  <div style="position: absolute; padding-top: -30px; padding-left: 50px">
    <img src="../../../public/img/lines.png" style="width: 150px" /><br />
  </div>
  <v-row class="bg-white">
    <v-col cols="12" class="pt-15">
      <h1 class="text-center pt-0 pb-7">Directorio turístico</h1>
      <p class="text-center">
        Accede al directorio de prestadores de servicios turísticos por
        municipio
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
          <img :src="n.src"  height="250"
            width="350" alt="">
          </v-card>
        </v-slide-group-item>
      </v-slide-group>
    </v-col>
  </v-row>
</template>

<script setup>
import { ref } from "vue";
const model = ref(null);
const interval = ref(3000);
const items = ref( 
          [
          {
            src: 'https://cdn.pixabay.com/photo/2021/02/01/12/28/fisherman-5970480_1280.jpg',
          },
          {
            src: 'https://cdn.pixabay.com/photo/2019/06/29/04/00/fisherman-4305368_1280.jpg',
          },
          {
            src: 'https://cdn.pixabay.com/photo/2019/11/04/18/01/fisherman-4601744_1280.jpg',
          },
          {
            src: 'https://cdn.pixabay.com/photo/2018/01/05/02/47/fishing-3062034_1280.jpg',
          },
        ],)
</script>


<style>
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
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%, rgba(6, 6, 6, 0.568) 100%);
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
