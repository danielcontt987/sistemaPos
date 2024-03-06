<template>
  <v-carousel
    hide-delimiters
    cycle
    :interval="interval"
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
            <img :src="n.src" height="250" width="350" alt="" />
          </v-card>
        </v-slide-group-item>
      </v-slide-group>
    </v-col>
  </v-row>
  <v-row>
    <v-col cols="12">
      <v-carousel
        hide-delimiters
        cycle
        :interval="interval"
        class="custom-carousel"
      >
        <v-carousel-item
          v-for="(item, i) in items"
          :key="i"
          :src="item.src"
          cover
        >
          <v-row class="overlay">
            <v-col cols="12" class="content">
              <h2>ho</h2>
            </v-col>
          </v-row>
        </v-carousel-item>
      </v-carousel>
    </v-col>
  </v-row>
  <v-row>
    <v-col cols="12" class="mt-15">
      <h1 class="text-center font-weight-bold">Programas de certificación</h1>
      <h1 class="text-center font-weight-bold">y capacitación</h1>
    </v-col>
    <v-col cols="12" sm="4" lg="4">
      <v-card class="mx-auto my-12" max-width="374" rounded="0" variant="flat">
        <v-img
          height="250"
          src="https://s3-alpha-sig.figma.com/img/4ebf/8772/042d3a76f3cb29cab6c945052074b2a4?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=BOBU2NgSW24WdwRTkPWo4pnQJwlrcugt6dzuXu3s3f7GEAz-4KXcIffsW7kDwKaF9Td0noObDcundgEWVis-D-IXcceNH5ZsKxGOE0GvlfIaNs2hO4pBEti7bOC0UOiiMDK1exCjl~Pb0I8mkFaT5iBvc58DqPhC2v6suISO95vXrjxV-DT7acz9CCbWlVy2bKowxZjm4Wd-z3ZvAtUrQPrziEkK-XNkLSnor-W694~HPo8tMXP-WfGXu4w35oFVCu4yhI~lz5wo9S83yi1N4v3BXEK9ZaQEM5SqXpi9iURr6cHAh-X01IHHG92lhpZD8p-9FGmHMRuSEmrfUoBDdA__"
          cover
        ></v-img>
        <v-card-text class="px-0">
          <v-row class="px-0 justify-space-between">
            <v-col cols="12">
              <v-chip color="brown" rounded="0">
                <span class="font-weight-bold">HOTELEROS</span>
              </v-chip>
              <span class="font-weight-bold px-5">4 Lecciones</span>
              <h5 class="font-weight-bold my-5 text-dark">Atención a personas con discapacidad</h5>
              <p class="word-break">Identifica el trato correcto a las diferentes discapacidades que puede presentar un huésped.</p>
            </v-col>
          </v-row>
        </v-card-text>
        <v-card-actions class="px-0">
          <v-btn class="px-0 text-dark">Ver más <v-icon class="text-dark">mdi-chevron-right</v-icon></v-btn>
        </v-card-actions>
      </v-card>
    </v-col>
    <v-col cols="12" sm="4" lg="4">
      <v-card class="mx-auto my-12" rounded="0" max-width="374" variant="flat">
        <v-img
          height="250"
          src="https://s3-alpha-sig.figma.com/img/7322/dd9a/5929a7a55ac770d19acce621f0a43e96?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=WbaNCU04kl7ZOE~ufmQmjitRqXi1xOE0APmZz5PvaCjBAqHKXiIkzxxuIoPKiKo-ix0GF9DFt6LWZVe7wqciZU5GUxKsINhOxhmyneFtsIfFttv0b4gkhgx2eQRXUEflUnA88SlzETNFSlLCEyaRFR51lqXIr5xei6yndwmZe6O2cLHfhy-j6Y5T7yOJazXfJpHMhJgVUTku04yWmh07xnPkldn4uoxpuIy76YcEl0MojBVHHWfrGcnvapWwQHKpsgOGUFtQSjRDyHoLJm6HCqlC46Qfb8o1pBNewL4xVM3kzr2lPJnno0eOTg0~CQq9snT-rpg4sGw~IwJAWk25gA__"
          cover
        ></v-img>
        <v-card-text class="px-0">
          <v-row class="px-0 justify-space-between">
            <v-col cols="12">
              <v-chip color="brown" rounded="0">
                <span class="font-weight-bold">RESTAURANTES</span>
              </v-chip>
              <span class="font-weight-bold px-5">8 Lecciones</span>
              <h5 class="font-weight-bold my-5 text-dark"  style="word-break: break-all;">Atención a personas con discapacidad</h5>
              <p class="text-justify">Este curso está diseñado para potenciar el desarrollo integral de habilidades blandas, proporcionando a los participantes las herramientas necesarias para destacar en entornos profesionales y personales.</p>
            </v-col>
          </v-row>
        </v-card-text>
        <v-card-actions class="px-0">
          <v-btn class="px-0 text-dark">Ver más <v-icon class="text-dark">mdi-chevron-right</v-icon></v-btn>
        </v-card-actions>
      </v-card>
    </v-col>
    <v-col cols="12" sm="4" lg="4">
      <v-card class="mx-auto my-12" max-width="374" rounded="0" variant="flat">
        <v-img
          height="250"
          src="https://s3-alpha-sig.figma.com/img/3845/026a/e88f9f40c40878d335ee7148e9b49307?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=IhiChp2lV6taUqo2gfL3~ISNHO0QcSeHZ6d1chCQ3oGWag7mGDgBwHvJjRoLPfAfXvU5DU5yCz57mFQ9Lqk33vdFxyqitX621wML5VSlkRAk5W6xVHhtPl8d~3yda2Pg8svjXmrMiAI225F0MPynE8trSeLYzu62HqEO00777AL8M1Z5jfO7CLC9UHHeUNdBIIwDAfu3Jx8X2HNiGSg8N462ZHjsXLXqkdc3IO-tJvF-mEjl4~hGFkmp878QJfeu1Bqiwjtv~ZLF5jrNSk2uwtsnSGe-GErIcmBZnJQpJGsWWMYKOjj~GvMPbZbDP9UGgUcv0GYI0GYLovVXjy-Bww__"
          cover
        ></v-img>
        <v-card-text class="px-0">
          <v-row class="px-0 justify-space-between">
            <v-col cols="12">
              <v-chip color="brown" rounded="0">
                <span class="font-weight-bold">GENERAL</span>
              </v-chip>
              <span class="font-weight-bold px-5">10 Lecciones</span>
              <h5 class="font-weight-bold my-5 text-dark"  style="word-break: break-all;">Atención a personas con discapacidad</h5>
              <p class="text-justify">El trabajo de un anfitrión conlleva mucho más que sólo la interacción con un huésped. Es importante que generes una estancia agradable y brindes todos los servicios e información que el huésped solicite.</p>
            </v-col>
          </v-row>
        </v-card-text>
        <v-card-actions class="px-0">
          <v-btn class="px-0 text-dark">Ver más <v-icon class="text-dark">mdi-chevron-right</v-icon></v-btn>
        </v-card-actions>
      </v-card>
    </v-col>
  </v-row>
  <v-row class="mb-10">
    <v-col cols="12" class="d-flex justify-center">
      <v-btn class="text-dark" rounded="0" variant="outlined">
        Ver todos los programas
        <v-icon right>mdi-chevron-right</v-icon>
      </v-btn>
    </v-col>
  </v-row>
  <v-row class="bg-background">
    <v-col cols="12">
      <h5 class="text-dark text-center mt-10">Últimos proveedores turísticos registrados en nuestra plataforma</h5>
      <img class="mt-15 mb-15 ml-15" src="../../../public/img/Content.png"/>
    </v-col>
  </v-row>
</template>

<script setup>
import { ref } from "vue";
const model = ref(null);
const interval = ref(3000);
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
