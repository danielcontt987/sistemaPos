<template>
  <v-carousel
    hide-delimiters
    cycle
    interval="5000"
    show-arrows="hover"
    class="custom-carousel"
  >
    <v-carousel-item
      v-for="(item, i) in slides"
      :key="i"
      :src="item.img"
      height="2500"
      cover
    >
      <overlay>
        <h1 class="font-weight-bold mb-0">
          Sistema Estatal para el Registro de <br />
          Cédula Estatal e Imagen Turística
        </h1>
        <v-btn
          class="font-weight-bold text-none mt-9"
          color="primary"
          variant="flat"
          width="250"
          height="40"
          @click="$router.push('/register-info')"
        >
          REGISTRATE
        </v-btn>
      </overlay>
    </v-carousel-item>
  </v-carousel>
</template>

<script setup>
import { ref } from "vue";
import overlay from "../extends/overlay.vue";

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

const d = ref(["First", "Second", "Third", "Fourth", "Fifth"]);
</script>

<style>
.custom-carousel .v-carousel__item img {
  object-fit: cover;
}

.carousel__next {
  background-color: rgb(255, 255, 255);
  color: rgb(0, 0, 0);
  height: 40px;
  width: 40px;
  border-radius: 50%;
}

.carousel__prev {
  background-color: rgb(255, 255, 255);
  color: rgb(0, 0, 0);
  height: 40px;
  width: 40px;
  border-radius: 50%;
}
</style>