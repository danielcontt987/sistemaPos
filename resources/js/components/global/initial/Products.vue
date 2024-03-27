<template>
    <v-row class="bg-backgroundColor">
      <v-container>
        <v-row>
         <v-col cols="12" class="text-center">
            <h2>Productos de temporada</h2>
         </v-col>
          <v-col cols="12" width="100%"  >
            <Carousel
              :items-to-show="3.95"
              :wrapAround="true"
              :transition="500"
            >
              <Slide v-for="slide in slides" :key="slide">
                <v-img :src="slide.img"></v-img>
              </Slide>

              <template #addons>
                <Navigation />
                <Pagination />
              </template>
            </Carousel>
          </v-col>
        </v-row>
      </v-container>
    </v-row>
</template>

<script setup>
import { ref } from "vue";

const slides = ref([
  {
    img: "https://scontent.fgdl9-1.fna.fbcdn.net/v/t39.30808-6/278541596_343357241155873_3322837375253810582_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeE14AAWJWbQiz_MHY_FheAyQxVrJqPEOalDFWsmo8Q5qZZ6ggaIj2NWZS6Ku4k4jnk6IZYUM_feZ1pvYwc8aLaa&_nc_ohc=FcrVKXKmzCIAX8Dboh5&_nc_oc=Adjid6HKlnU3eAXHjTij_Ng0OYjR7kmtWHcUiu6Bt1JTKz0VNWaWO9Pgi8MftDyM3igXM59FC_rygCqfIq-xSvRt&_nc_ht=scontent.fgdl9-1.fna&oh=00_AfDBxsUtlzGv0YHsUTz1vYceWKh_Ou9MVd4zvWObqYzFNg&oe=65FE502C",
  },
  {
    img: "https://scontent.fgdl9-1.fna.fbcdn.net/v/t39.30808-6/278543243_343356107822653_7186974970138828715_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFb2IzSmOJAyPtZtLFvkqgwLgaU436A5v8uBpTjfoDm_0x9P3-K7pSHIlB1QplUP0FXRWaLmdhFr5wLqUvSr7OP&_nc_ohc=lutTYeVHROkAX9nj850&_nc_ht=scontent.fgdl9-1.fna&oh=00_AfBawMbVKSxkvo_arncQGxw-Zlgs655kMcmF2coa0gxAWA&oe=6600123F",
  },
  {
    img: "https://scontent.fgdl9-1.fna.fbcdn.net/v/t39.30808-6/321809002_569698037819469_8265397268916668810_n.jpg?stp=cp6_dst-jpg&_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHytbkyhnM38qiNUiAT9wnS9fgF0vdidP_1-AXS92J0_-iQyfqGKNfwQUuJZ0QYahe29-tUpN7tbxyPohBzGSIs&_nc_ohc=TIbFGkQQ8KcAX-cQzMx&_nc_ht=scontent.fgdl9-1.fna&oh=00_AfCOxxgcf8Ze_XaUF8CSs_f3c2vfDxO0TqLWe9s2dnFRrw&oe=65FF89D3",
  },
]);
</script>

<style scoped>
.carousel__slide {
  padding: 5px;
}

.carousel__viewport {
  perspective: 2000px;
}

.carousel__track {
  transform-style: preserve-3d;
}

.carousel__slide--sliding {
  transition: 0.5s;
}

.carousel__slide {
  opacity: 0.9;
  transform: rotateY(-20deg) scale(0.9);
}

.carousel__slide--active ~ .carousel__slide {
  transform: rotateY(20deg) scale(0.9);
}

.carousel__slide--prev {
  opacity: 1;
  transform: rotateY(-10deg) scale(0.95);
}

.carousel__slide--next {
  opacity: 1;
  transform: rotateY(10deg) scale(0.95);
}

.carousel__slide--active {
  opacity: 1;
  transform: rotateY(0) scale(1.1);
}
</style>